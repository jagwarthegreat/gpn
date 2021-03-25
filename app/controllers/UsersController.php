<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    protected $pageTitle;

    public function index()
    {
        $pageTitle = "Users";

        $roles = App::get('database')->selectLoop('tbl_role');

        return view('users/index', compact('roles', 'id', 'pageTitle'));
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
        $pageTitle = "User Detail";

        $id = $id[0];
        $role_detail = App::get('database')->select("*", "tbl_role", "role_id = '$id'");

        return view('users/detail', compact('role_detail', 'pageTitle'));
    }
}
