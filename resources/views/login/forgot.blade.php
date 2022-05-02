@extends('login.layouts.login-master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">

    <div class="forgot">
        <div class="forgot__name">
            Aquica
        </div>
        <h1 class="forgot__main-text">
            Having trouble signing in to your account?
        </h1>
        <div class="forgot__description">
            Enter your email to get started account recovery.
        </div>
        <form action="" method="">
            <input type="email" name="email" placeholder="Email"><br>
            <button class="btn btn_blue">Processed</button>
        </form>
    </div>

@stop
