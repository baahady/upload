<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

use App\Controllers\BaseController;

use App\Models\UploadModel;

use App\Models\AllowedTypeModel;

class UploadController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $model = new AllowedTypeModel;
        $types = $model->first();
        $allowed = $types['allowedTypes'];

        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                . "|ext_in[userfile,$allowed]"              
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];

            return view('home', $data);
        }

        // Grab the file by name given in HTML form
        $file = $this->request->getFile('userfile');
        //get the real type of the file
        $type = $file->getMimeType();

        // Generate a new secure name
        $name = $file->getRandomName();

        // Move the file to the directory
        $file->move('uploads', $name);

        //file model
        $uploadModel = new UploadModel;

        //user id
        $id = session()->get('id');
        if(!$id){
            $id = "0";
        }

        //insert uploaded file Data to the DB
        $uploadModel->save([
            'fileName' => $name,
            'type' => $type,
            'owner' => $id
        ]);

        $fdata = [
            'fileName' => $name,
            'baseName' => $file->getBasename(),
            'size' => $file->getSizeByUnit('kb'),
            'type' => $type,
        ];

        return view('upload_success', $fdata);
    }
}