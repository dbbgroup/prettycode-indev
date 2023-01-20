<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/404.css') }}">

    <title>404 - произошла оБшибка</title>
</head>
<body>
    <div id="root">
        <section class="err-container">
            <img src="/images/404_bg.svg" class="err-image" alt="404 error">
            <h2 class="err-header">Произошло что-то непонятное.. Страница не существует.</h2>

            <ul class="err-navigation">
                <li>
                    <a href="{{ route('page.index') }}" class="err-link">Главная</a>
                </li>

                <li>
                    <a href="{{ route('page.show', ['page.slug' => 'abuse']) }}" class="err-link">Нашли ошибку?</a>
                </li>

                <li>
                    <a href="{{ route('auth.show', ['action' => 'login']) }}" class="err-link err-link-active">Войти в учётную запись</a>
                </li>
            </ul>
        </section>
    </div>
</body>
</html>
