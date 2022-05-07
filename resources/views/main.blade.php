<link rel="stylesheet" href="../resources/css/main-page.css">
<link rel="stylesheet" href="../resources/css/main.css">
@extends('layouts.master')

@section('header')
    {{--  здесь кнопки  --}}
@stop

@section('content')
    @include('user.layots.sidebar')

    <div class="content__main">
    
    </div>
@stop

@section('footer')
    {{-- Здесь должно быть пусто --}}
@stop
