@extends('login.layouts.login-master')

@section('header')

@stop

@section('content')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

    <div class="signup">
        <div class="signup__wrapper">
            <div class="signup__slider" id="slider">
                @for($y = 1; $y != 4; $y++)
                <div class="slider__col slider__col_{{$y}}">
                    @for($i = 1; $i != 11; $i++)
                    <div class="slider__card">
                        <div class="card__img" style="background-image: url({{ asset("images/signup/slider/$i.png") }})"></div>
                        <div class="card__user">
                            <div class="user__emoji">
                                <img src="{{ asset('images/welcome_page/user_emoji.png') }}" alt="">
                            </div>
                            <div class="user__name">Ahmat Strength</div>
                        </div>
                    </div>
                    @endfor
                </div>
                @endfor
            </div>
            <div class="signup-form">
                <form action="" method="" class="form">
                    <div class="form__wrapper">
                        <div class="form__logo">
                            <img src="{{ asset('images/logos/logo-name.png') }}" alt="logo">
                        </div>
                        <div class="form__description">
                            Sign up to find your inspiration
                        </div>
                        <div class="inputs">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password">
                            <input type="number" name="age" placeholder="Age">
                            <button class="btn btn_green">Sign up</button>
                        </div>
                        <div class="login">
                            <a href="#" class="login__link">Have an account? Log in!</a>
                        </div>
                    </div>
                </form>
                <div class="signup-form__logo">
                    <div class="logo__img">
                        <img src="{{ asset('images/logos/logo-status.png') }}" alt="logo">
                    </div>
                    <div class="logo__name">Aquica</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/signup/slider.js') }}"></script>
@stop
