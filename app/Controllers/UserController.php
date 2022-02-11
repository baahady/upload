<?php 

namespace App\Controllers;  

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
}
