@extends('login.layouts.login-master')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <div class="welcome">
        <div class="welcome__col">
            <h1 class="welcome__tagline">
                Save and share your ideas and inspiration
            </h1>
            <div class="welcome__description">
                Save creative inspiration, colors, cards and share them with other creators with Aquica!
            </div>
            <div class="welcome__sign-up">
                <a href="{{ route('signup') }}" class="btn btn_red">Sign Up</a>
            </div>
        </div>
        <div class="welcome__col">
            <div class="col__description">Colors</div>
            <div class="welcome__colors">
                <div class="pink pink_1"></div>
                <div class="pink pink_2"></div>
                <div class="pink pink_3"></div>
                <div class="pink pink_4"></div>
                <div class="pink pink_5"></div>
                <div class="pink pink_6"></div>
            </div>
            <div class="example_laptop">
                <img src="{{ asset('images/welcome_page/mac.png') }}" alt="">
            </div>
        </div>
        <div class="welcome__col">
            <div class="col__description">Pictures</div>
            <div class="welcome__card">
                <div class="card__img">
                    <img src="{{ asset('images/welcome_page/card_img.png') }}" alt="">
                </div>
                <div class="card__author">
                    <div class="author__emoji">
                        <img src="{{ asset('images/welcome_page/user_emoji.png') }}" alt="">
                    </div>
                    <div class="author__name">
                        Ahmat Strength
                    </div>
                </div>
            </div>
            <div class="example_phone">
                <img src="{{ asset('images/welcome_page/iphone.png') }}" srcset="{{ asset('images/welcome_page/iphone@2x.png') }} 2x" alt="">
            </div>
        </div>
    </div>
@stop
