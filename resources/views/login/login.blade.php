@extends('login.layouts.login-master')

@section('header')

@stop

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <div class="login">
        <form action="{{ route('login-page') }}" method="post" onsubmit="submitForm(event)" name="login">
            @csrf
            <div class="login__logo">
                <img src="{{ asset('images/logos/logo-bg-blue.png') }}" alt="logo">
            </div>
            <div class="login__description">
                Login to Aquica
            </div>

            <div class="for-input for-input_email">
                <input
                    type="email" name="email" placeholder="Email" required maxlength="255"
                    value="{{ old('email') }}"
                >
                <button name="checkEmail" id="emailButton">
                    <img src="{{ asset('images/icons/icon-send.png') }}" alt="send">
                </button>
            </div>
            <div class="for-input for-input_password for-input_hidden">
                <input type="password" name="password" placeholder="Password" maxlength="255">
                <button>
                    <img src="{{ asset('images/icons/icon-send.png') }}" alt="send">
                </button>
            </div>
            <div class="login__error
            @if (! $errors->any())
                login__error_no
            @endif
            ">
                <div class="error__icon">
                    <img src="{{ asset('images/icons/icon-error.png') }}" alt="Error">
                </div>
                <div class="error__message" id="error">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="forgot">
                <hr class="forgot__hr">
                <a href="{{ route('forgot') }}" class="forgot__link">
                    Forgot password?
                </a>
            </div>

        </form>
    </div>

    <script src="{{ asset('js/login/login.js') }}"></script>

    @if ($errors->any())
        <script>openPasswordInput(false)</script>
    @endif

@stop

