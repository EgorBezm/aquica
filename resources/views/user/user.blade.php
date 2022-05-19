@extends('layouts.master')

@section('header')
    {{--  здесь кнопки  --}}
@stop

@section('content')
    @include('user.layots.sidebar', [
        'page' => 'user',
    ])
    <link rel="stylesheet" href="{{ asset('css/user-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

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
        <div class="admin-page_content">
            <div class="content-left_side">
                <div class="page-title">
                    <h2>User Information</h2>
                    <h4>Enter the required information below to register. You can change it anytime you want.</h4>
                </div>
                <h6>*Obligatory field</h6>
                <div class="content-inputs">
                    <div class="title-input">
                        <h4>Email address*</h4>
                        <input type="email" class="input" name="email" id="1" placeholder="Type your Email adress...">
                    </div>
                    <div class="title-input">
                        <h4>Full name</h4>
                        <div class="group-inputs">
                            <input type="text" class="input" name="first mame" id="1" placeholder="Type your First name...">
                            <input type="text" class="input" name="first mame" id="1" placeholder="Type your Second name...">
                            <input type="text" class="input" name="first mame" id="1" placeholder="Type your Second second name...">
                        </div>
                    </div>
                    <div class="title-input">
                        <h4>Adress</h4>
                        <div class="adress-group_input">
                            <input type="text" class="input" name="first mame" id="1" placeholder="Type your Country...">
                            <input type="text" class="input" name="first mame" id="1" placeholder="Type your City...">
                        </div>
                        <input type="text" class="input" name="first mame" id="1" placeholder="Type your Street...">
                    </div>
                    <div class="title-input">
                        <h4>Date of birth*</h4>
                        <input type="date" class="input" name="date" id="1" placeholder="day.month.year...">
                    </div>
                    <div class="title-input">
                        <h4>Phone number</h4>
                        <input type="tel" class="input" name="date" id="1" placeholder="8(***)-***-**-**">
                    </div>
                </div>
            </div>
            <div class="content-right_side">
                <div class="right-side_profile">
                    <div class="right-side_profile__title">
                        <h4>Profile photo</h4>
                    </div>
                    <div class="right-side_profile__img">
                        <img src="{{ asset('images/avatars/avatar1.svg')}}" alt="avatar">
                    </div>
                </div>
                <div class="right-side_dropdown">
                    <h4>Choose your main interest</h4>
                    <div class="dropdown">
                        <button class="dropbtn"><h4>Music</h4><img src="{{ asset('images/icons/icon-arrow-down.png')}}" alt="arrow-down"></button>
                        <div class="dropdown-content">
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Food / Beverage</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-1.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Automobile</h4></a>
                                  <img src="{{ asset('images/icons/dropdown/icon-dropdown-2.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Education</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-3.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Science</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-4.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Art</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-5.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Politics</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-6.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Sport</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-7.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Games</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-8.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Animals</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-9.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Health</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-10.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image_active">
                                <div class="dropdown-content_name">
                                   <a href="#"><h4>Music</h4></a>
                                    <img src="{{ asset('images/icons/dropdown/icon-dropdown-11.png')}}" alt="dropdown-img">
                                </div>
                                <img src="{{ asset('images/icons/icon-checkmark.svg')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Painting</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-12.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Architecture</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-13.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Space</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-14.png')}}" alt="dropdown-img">
                            </div>
                            <div class="dropdown-content_image">
                                <a href="#"><h4>Natural phenomena</h4></a>
                                <img src="{{ asset('images/icons/dropdown/icon-dropdown-15.png')}}" alt="dropdown-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-side_gender">
                    <h4>Select your gender</h4>
                    <div class="right-side_radio">
                        <div class="radio">
                            <input type="radio">
                            <h4>Male</h4>
                        </div>
                        <div class="radio">
                            <input type="radio">
                            <h4>Female</h4>
                        </div>
                        <div class="radio">
                            <input type="radio">
                            <h4>Non-binary</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    {{-- Здесь должно быть пусто --}}
@stop
