<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    public function index()
    {
        $roles = App::get('database')->selectLoop('tbl_role');

        return view('users', compact('roles', 'id'));
    }

    public function store()
    {
        $data = [
            'role_name' => $_POST['name']
        ];

        App::get('database')->insert('tbl_role', $data);
        return redirect("users");
    }

    public function detail($id)
    {
        $id = $id[0];
        $role_detail = App::get('database')->select("*", "tbl_role", "role_id = '$id'");

        return view('roles/detail', compact('role_detail'));
    }
}
