<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function signup()
    {
        return view('login.signup');
    }

    public function login()
    {
        return view('login.login');
    }

    public function forgot()
    {
        return view('login.forgot');
    }
}
