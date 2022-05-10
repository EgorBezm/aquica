@extends('layouts.master')

@section('header')
    {{--  здесь кнопки  --}}
@stop

@section('content')
    @include('user.layots.sidebar', [
        'page' => 'home',
    ])

    <link rel="stylesheet" href="{{ asset('css/main-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <div class="content__main">
        <div class="main-columns" id="columns">
            <div class="main-column">

                <!-- Колонка 1 -->

                {{--<div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post1demo.svg')}}" alt="card-post1">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post2.svg')}}" alt="card-post2">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post3.svg')}}" alt="card-post3">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>--}}


            </div>
        </div>
    </div>

    <script src="{{ asset('js/main/main.js') }}"></script>
@stop

@section('footer')
    {{-- Здесь должно быть пусто --}}
@stop
