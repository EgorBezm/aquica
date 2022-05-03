@extends('login.layouts.login-master')

@section('header')

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
                <form action="" method="" class="select__form" id="setting-form">
                    <div class="col">
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="food" onclick="pick(this)">
                            <label for="food">
                                Food
                                <img src="{{ asset('images/settings/icons/food.png') }}" alt="food">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="automobile" onclick="pick(this)">
                            <label for="automobile">
                                Automobile
                                <img src="{{ asset('images/settings/icons/automobile.png') }}" alt="automobile">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="education" onclick="pick(this)">
                            <label for="education">
                                Education
                                <img src="{{ asset('images/settings/icons/education.png') }}" alt="education">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="science" onclick="pick(this)">
                            <label for="science">
                                Science
                                <img src="{{ asset('images/settings/icons/science.png') }}" alt="science">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="art" onclick="pick(this)">
                            <label for="art">
                                Art
                                <img src="{{ asset('images/settings/icons/art.png') }}" alt="art">
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="politics" onclick="pick(this)">
                            <label for="politics">
                                Politics
                                <img src="{{ asset('images/settings/icons/politics.png') }}" alt="politics">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="sport" onclick="pick(this)">
                            <label for="sport">
                                Sport
                                <img src="{{ asset('images/settings/icons/sport.png') }}" alt="sport">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="games" onclick="pick(this)">
                            <label for="games">
                                Games
                                <img src="{{ asset('images/settings/icons/games.png') }}" alt="games">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="animals" onclick="pick(this)">
                            <label for="animals">
                                Animals
                                <img src="{{ asset('images/settings/icons/animals.png') }}" alt="animals">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="health" onclick="pick(this)">
                            <label for="health">
                                Health
                                <img src="{{ asset('images/settings/icons/health.png') }}" alt="health">
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="music" onclick="pick(this)">
                            <label for="music">
                                Music
                                <img src="{{ asset('images/settings/icons/music.png') }}" alt="music">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="painting" onclick="pick(this)">
                            <label for="painting">
                                Painting
                                <img src="{{ asset('images/settings/icons/painting.png') }}" alt="painting">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="architecture" onclick="pick(this)">
                            <label for="architecture">
                                Architecture
                                <img src="{{ asset('images/settings/icons/architecture.png') }}" alt="architecture">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="space" onclick="pick(this)">
                            <label for="space">
                                Space
                                <img src="{{ asset('images/settings/icons/space.png') }}" alt="space">
                            </label>
                        </div>
                        <div class="select__item">
                            <input class="custom-checkbox" type="checkbox" id="natural" onclick="pick(this)">
                            <label for="natural">
                                NaturalPhenomena
                                <img src="{{ asset('images/settings/icons/natural.png') }}" alt="natural phenomena">
                            </label>
                        </div>
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

