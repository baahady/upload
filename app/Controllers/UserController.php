<?php 

namespace App\Controllers;  

use App\Controllers\BaseController;

use App\Models\UserFileModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserFileModel;
        $res = $model->userFile();
        $data = [
            'files' => $res
        ];
        return view('user/main',$data);
    }
}
