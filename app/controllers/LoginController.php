<?php

namespace App\Controllers;

use App\Core\App;

class LoginController
{
    public function index()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userDdata = App::get('database')->select("COUNT(role_id) AS roleIds", "tbl_role", "role_id = '3444'");

        if ($userDdata['roleIds'] < 1) {
            redirect('login');
            die();
        }

        redirect('home');
    }
}
