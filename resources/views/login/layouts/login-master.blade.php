@extends('layouts.master')

@section('header')
    <header class="header-container">
        <div class="header__logo">
            <img src="{{ asset('images/logos/logo-main.png') }}" alt="logo-main">
        </div>
        <div class="header__nav">
            <div class="login__button">
                Log in
            </div>
            <div class="signup__button">
                Sign up
            </div>
        </div>
    </header>
@stop

@section('content')

@stop

@section('footer')
    <div class="footer__content">
        <div class="footer__text">Design by mako in Tatarstan</div>
        <div class="footer__text">Designed for my graduation project</div>
        <div class="footer__text">If anyone's rights are violated, I'm sorry, I accidentally</div>
        <div class="footer__text">Not for commercial use</div>
        <div class="footer__text">Copyright © 2022</div>
    </div>
@stop
