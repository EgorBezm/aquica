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
        <form action="{{ route('forgot') }}" method="post">
            @csrf
            <input type="email" name="email" placeholder="Email" required maxlength="255"><br>
            <div class="error
                @if (! $errors->any())
                    error_no
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
            @if (session('status'))
                <div class="alert alert_success">
                    {{ session('status') }}
                </div>
            @endif
            <button class="btn btn_blue">Processed</button>
        </form>
    </div>

@stop
