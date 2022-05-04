<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! password_verify($request->password, $user->password))
        {
            $error = 'Password is incorrect';
            return back()->withErrors($error)->withInput();
        }

        Auth::login($user);

        return redirect('/');
    }
}
