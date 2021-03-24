<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $roles = App::get('database')->selectLoop('tbl_role');

        return view('users', compact('roles'));
    }

    public function store()
    {
        $data = [
            'role_name' => $_POST['name']
        ];

        App::get('database')->insert('tbl_role', $data);
        return redirect("users");
    }
}
