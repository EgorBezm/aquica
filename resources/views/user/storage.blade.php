<<<<<<< HEAD

=======
>>>>>>> 4d31e751ec8172c67294172cb95fd48b1ceb6e79
@extends('layouts.master')

@section('header')
    <header class="header-container">
        <div class="header__logo">
            <img src="{{ asset('images/logos/logo-secondary.png') }}" alt="logo-main">
        </div>
    </header>
@stop

@section('content')
<<<<<<< HEAD
    @include('user.layots.sidebar')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/storage-page.css')}}">
=======

    <link rel="stylesheet" href="{{ asset('css/storage-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    @include('user.layots.sidebar', [
        'page' => 'storage',
    ])
    
>>>>>>> 4d31e751ec8172c67294172cb95fd48b1ceb6e79
    <div class="content__main">
    <div class="admin-title">
            <div class="namepage">
                <h1>Information</h1>
            </div>
            <div class="title-buttons">
                <button class="alert_button">
                    <img src="{{ asset('images/icons/icon-alert.svg')}}" alt="alert">
                </button>
                <button class="main_button">
                    <h4>Confirm</h4>
                </button>
            </div>
        </div>
    </div>
@stop

@section('footer')
    {{-- Здесь должно быть пусто --}}
@stop
