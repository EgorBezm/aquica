<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

<header>
    <div class="header__content">
        <div class="header__left">
            <div class="header__logo">Это лого</div>
        </div>
        <div class="header__right">
            @yield('header')
        </div>
    </div>
</header>

<div class="content">
    @yield('content')
</div>

<footer>
    @yield('footer', 'Здесь будет футер')
</footer>

</body>
</html>
