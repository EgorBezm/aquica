@extends('login.layouts.login-master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">

    <div class="forgot reset">
        <div class="forgot__name">
            Aquica
        </div>
        <h1 class="forgot__main-text">
            Reset password
        </h1>
        <div class="forgot__description">
            Enter your email and password to complete account recovery.
        </div>
        <form action="{{ route('reset') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" placeholder="Email" required maxlength="255"><br>
            <input type="password" name="password" placeholder="Password" required minlength="8" maxlength="255"><br>
            <input type="password" name="password_confirmation" placeholder="Confirm password" required minlength="8" maxlength="255"><br>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert_error">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <button class="btn btn_blue">Finish!</button>
        </form>
    </div>

@stop
