<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Auth;
use App\Core\Request;

class AuthController
{
    protected $pageTitle;

    public function index()
    {
        if (Auth::isAuthenticated()) {
            redirect('home');
        }

        $pageTitle = "Login";
        return view('auth/login', compact('pageTitle'));
    }

    public function authenticate()
    {
        $username = sanitizeString($_POST['username']);
        $password = sanitizeString($_POST['password']);
        Request::validate();

        $userDdata = App::get('database')->select("*", "users", "username = '$username' AND password = md5('$password')");
        Auth::authenticate($userDdata);
    }

    public function logout()
    {
        session_destroy();
        redirect('login');
    }
}
