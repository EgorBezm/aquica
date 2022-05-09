@extends('layouts.master')

@section('header')
    {{--  здесь кнопки  --}}
@stop

@section('content')
    @include('user.layots.sidebar')

    <link rel="stylesheet" href="../resources/css/main-page.css">
    <link rel="stylesheet" href="../resources/css/main.css">

    <div class="content__main">
        <div class="main-columns">
            <div class="main-column">

                <!-- Колонка 1 -->

                <div class="column_element">
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
                </div>
            </div>

            <!-- Колонка 2 -->

            <div class="main-column">
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post4.svg')}}" alt="card-post4">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post5.svg')}}" alt="card-post5">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post6.svg')}}" alt="card-post6">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
            </div>

            <!-- Колонка 3 -->

            <div class="main-column">
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post7.svg')}}" alt="card-post7">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post8.svg')}}" alt="card-post8">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post9.svg')}}" alt="card-post9">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
            </div>

            <!-- Колонка 4 -->

            <div class="main-column">
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post10.svg')}}" alt="card-post10">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post11.svg')}}" alt="card-post11">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post12.svg')}}" alt="card-post12">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
            </div>

            <!-- Колонка 5 -->
            
            <div class="main-column">
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post13.svg')}}" alt="card-post13">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post14.svg')}}" alt="card-post14">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
                <div class="column_element">
                    <div class="post-img">
                        <img src="{{ asset('images/main posts/post15.svg')}}" alt="card-post15">
                    </div>
                    <div class="post-username">
                        <img src="{{ asset('images/logos/logo post.svg')}}" alt="post-avatar">
                        <h6>Aquica Researcher</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    {{-- Здесь должно быть пусто --}}
@stop
