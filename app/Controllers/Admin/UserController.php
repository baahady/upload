<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct(){
        
        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        $model = new UserModel();
        $allusers = $model->select('id,name,email,created_at')->findAll();

        $data = [
            'users' => $allusers
        ];
        
        return view('admin/allusers',$data);
    }
}
