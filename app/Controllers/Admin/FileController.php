<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

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
        return view('admin/allowedType');
    }
}
