<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AllowedTypeModel;

class FileController extends BaseController
{
    public function __construct(){
        
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        $model = new AllowedTypeModel;
        $types = $model->first();
        $data = [
            'types' => $types
        ];
        return view('admin/allowedType',$data);
    }

    public function allowedType(){
        
        $rules = [
            'allowedTypes' => 'required|min_length[2]'
        ];
        if($this->validate($rules)){

            $data = [
                'allowedTypes' => $this->request->getVar('allowedTypes')
            ];
            $model = new AllowedTypeModel();
            $model->truncate();
            $model->save($data);
            return redirect()->to('/allowedType');
        }else{
            $model = new AllowedTypeModel;
            $types = $model->first();
            $data = [
                'types' => $types
            ];
            $data['validation'] = $this->validator;
            return view('admin/allowedType',$data);        }
    }
}
