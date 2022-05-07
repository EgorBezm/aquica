@extends('layouts.master')

@section('header')
    <a href="{{ route('login-page') }}" class="btn btn_header">Log In</a>
    <a href="{{ route('signup') }}" class="btn btn_blue btn_header">Sign up</a>
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
