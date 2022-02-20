<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

use App\Controllers\BaseController;

use App\Models\UploadModel;

class UploadController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,100]'
                    . '|max_dims[userfile,1024,768]',
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
            'name' => $name,
            'type' => $type,
            'owner' => $id
        ]);

        $fdata = [
            'name' => $name,
            'baseName' => $file->getBasename(),
            'size' => $file->getSizeByUnit('kb'),
            'type' => $type,
        ];

        return view('upload_success', $fdata);
    }
}