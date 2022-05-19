@extends('layouts.master')

@section('header')
    {{--  здесь кнопки  --}}
@stop

@section('content')
    @include('user.layots.sidebar', [
        'page' => 'admin',
    ])

    <link rel="stylesheet" href="{{ asset('css/admin-page.css') }}">

    <div class="content__main">
        <div class="admin-title">
            <div class="namepage">
                <h1>Admin Panel</h1>
            </div>
            <button class="main_button">
                <h4>Search User</h4>
            </button>
        </div>
        <div class="admin-page_content">
            <div class="columns">
                <div class="column1">
                    <div class="admin-card_user">
                        <div class="user-emoji">
                            <img src="{{ asset('images/avatars/avatar4.svg')}}" alt="user">
                        </div>
                        <div class="userinfo">
                            <h4>Daria Shilkova</h4>
                            <h4 class="email">sk8er@palacecrew.net</h4>
                        </div>
                    </div>
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/postadm1.svg')}}" alt="admin-image">
                    </div>
                    <div class="admin-buttons">
                        <button class="admin-yes_button">
                            <img src="{{ asset('images/icons/icon-yes.svg')}}" alt="admin-yes">
                        </button>
                        <button class="admin-no_button">
                            <img src="{{ asset('images/icons/icon-no.svg')}}" alt="admin-no">
                        </button>
                    </div>
                </div>
                <div class="column1">
                    <div class="admin-card_user">
                        <div class="user-emoji">
                            <img src="{{ asset('images/avatars/avatar4.svg')}}" alt="user">
                        </div>
                        <div class="userinfo">
                            <h4>Daria Shilkova</h4>
                            <h4 class="email">sk8er@palacecrew.net</h4>
                        </div>
                    </div>
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/postadm2.svg')}}" alt="admin-image">
                    </div>
                    <div class="admin-buttons">
                        <button class="admin-yes_button">
                            <img src="{{ asset('images/icons/icon-yes.svg')}}" alt="admin-yes">
                        </button>
                        <button class="admin-no_button">
                            <img src="{{ asset('images/icons/icon-no.svg')}}" alt="admin-no">
                        </button>
                    </div>
                </div>
                <div class="column1">
                    <div class="admin-card_user">
                        <div class="user-emoji">
                            <img src="{{ asset('images/avatars/avatar4.svg')}}" alt="user">
                        </div>
                        <div class="userinfo">
                            <h4>Daria Shilkova</h4>
                            <h4 class="email">sk8er@palacecrew.net</h4>
                        </div>
                    </div>
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post1demo.svg')}}" alt="admin-image">
                    </div>
                    <div class="admin-buttons">
                        <button class="admin-yes_button">
                            <img src="{{ asset('images/icons/icon-yes.svg')}}" alt="admin-yes">
                        </button>
                        <button class="admin-no_button">
                            <img src="{{ asset('images/icons/icon-no.svg')}}" alt="admin-no">
                        </button>
                    </div>
                </div>
                <div class="column1">
                    <div class="admin-card_user">
                        <div class="user-emoji">
                            <img src="{{ asset('images/avatars/avatar4.svg')}}" alt="user">
                        </div>
                        <div class="userinfo">
                            <h4>Daria Shilkova</h4>
                            <h4 class="email">sk8er@palacecrew.net</h4>
                        </div>
                    </div>
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post4.svg')}}" alt="admin-image">
                    </div>
                    <div class="admin-buttons">
                        <button class="admin-yes_button">
                            <img src="{{ asset('images/icons/icon-yes.svg')}}" alt="admin-yes">
                        </button>
                        <button class="admin-no_button">
                            <img src="{{ asset('images/icons/icon-no.svg')}}" alt="admin-no">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    {{-- Здесь должно быть пусто --}}
@stop
