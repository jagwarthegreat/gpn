<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Auth;
use App\Core\Request;

class ProfileController
{
    protected $pageTitle;

    public function index()
    {
        $pageTitle = "Profile";
        $user_id = Auth::user('id');
        $user_data = App::get('database')->select("*", 'users', "id='$user_id'");

        return view('auth/profile', compact('user_data', 'pageTitle'));
    }

    public function store()
    {
        $data = [
            'role_name' => $_POST['name']
        ];

        App::get('database')->insert('tbl_role', $data);
        redirect("users");
    }

    public function detail($id)
    {
        $pageTitle = "Profile Detail";

        $id = $id[0];
        $role_detail = App::get('database')->select("*", "users", "id = '$id'");

        return view('auth/profile-detail', compact('role_detail', 'pageTitle'));
    }

    public function update()
    {
        $email = sanitizeString($_POST['email']);
        $name = sanitizeString($_POST['name']);
        Request::validate();

        $user_id = Auth::user('id');

        $update_data = [
            'email' => "$email",
            'fullname' => "$name"
        ];

        App::get('database')->update('users', $update_data, "id = '$user_id'");
        redirect("profile");
    }
}
