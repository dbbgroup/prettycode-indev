<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('seo')
    <title>
        PrettyCode
    </title>
</head>
<body>
    @include('includes.cookies')
    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    <script type="text/javascript" src="{{ asset('js/mobileNav.js') }}"></script>
</body>
</html>
