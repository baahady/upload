<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UserFileModel;

class AdminController extends BaseController
{
    public function __construct(){
        
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    { 
        $model = new UserFileModel;
        $res = $model->allUserFile();

        $data = [
            'files' => $res,
        ];

        return view('admin/main',$data);
    }
}
