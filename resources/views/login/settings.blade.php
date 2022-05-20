@extends('login.layouts.login-master')

@section('header')
    <header class="header-container">
        <div class="header__logo">
            <img src="{{ asset('images/logos/logo-secondary.png') }}" alt="logo-secondary">
        </div>
    </header>
@stop

@section('content')
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">

    <div class="settings-page">
        <div class="settings-page__slider" id="slider">
            @for($i = 1; $i != 20; $i++)
            <div class="post">
                <div class="post__img">
                    <img src="{{ asset("images/settings/slider/$i.png") }}" alt="">
                </div>
                <div class="post__author">
                    <div class="author__emoji">
                        <img src="{{ asset('images/settings/author_emoji.png') }}" alt="">
                    </div>
                    <div class="author__name">Aquica Researcher</div>
                </div>
            </div>
            @endfor
        </div>
        <div class="settings-page__select">
            <h1 class="select__name">
                Tell Aquica what you like
            </h1>
            <div class="select__description">
                Select more than 5 interests. This makes it easier for Aquica to find what you need.
            </div>
            <div class="form__wrapper">
                <div class="form__selected">
                    <span id="selected">0</span> of 5 selected
                </div>
                <form action="{{ route('user-tag') }}" method="post" class="select__form" id="setting-form">
                    @csrf
                    <div class="select__tags">
                        @foreach($tags as $tag)
                            <div class="select__item">
                                <input
                                    class="custom-checkbox" type="checkbox" name="{{ $tag->name }}"
                                    value="{{ $tag->id }}" id="{{ $tag->name }}" onclick="pick(this)"
                                >
                                <label for="{{ $tag->name }}">
                                    {{ $tag->name }}
                                    <img src="{{ asset('images/emoji') . '/' . $tag->emoji->url }}" alt="food">
                                </label>
                            </div>
                        @endforeach
                    </div>
                </form>
                <div class="select__button">
                    <button class="btn btn_settings" onclick="send()">
                        User Settings
                        <img src="{{ asset('images/icons/icon-send.png') }}" alt="send">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/settings_page/slider.js') }}"></script>
@stop

