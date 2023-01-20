@extends('layouts.main')

@section('seo')

@endsection

@section('content')
    <section class="form">
        <h1 class="form__title">Вход в аккаунт</h1>

        <form method="post">
            @csrf
            <label>
                <span>Электропочта</span>
                <input class="form__input-text" type="email" name="email" placeholder="mail@example.com" required>
            </label>
            <label>
                <span>Пароль</span>
                <input class="form__input-text" type="password" name="password" required>
            </label>
            <button class="form-button form-button-primary">Войти</button>
        </form>
    </section>
@endsection
