<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function main()
    {
        $user = Auth::user();

        if (empty($user->tags->all())) {
            return view('login/settings', [
                'tags' => Tag::all(),
            ]);
        }

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
