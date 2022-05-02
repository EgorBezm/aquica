@extends('login.layouts.login-master')

@section('header')

@stop

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="login">
        <form action="" method="">
            <div class="login__logo">
                <img src="{{ asset('images/logos/logo-bg-blue.png') }}" alt="logo">
            </div>
            <div class="login__description">
                Login to Aquica
            </div>

            <div class="for-input for-input_email">
                <input type="email" name="email" placeholder="Email">
                <button>
                    <img src="{{ asset('images/icons/icon-send.png') }}" alt="send">
                </button>
            </div>
            <div class="for-input for-input_password">
                <input type="password" name="password" placeholder="Password">
                <button>
                    <img src="{{ asset('images/icons/icon-send.png') }}" alt="send">
                </button>
            </div>
            <div class="forgot">
                <hr class="forgot__hr">
                <a href="#" class="forgot__link">
                    Forgot password?
                </a>
            </div>

        </form>
    </div>

@stop

