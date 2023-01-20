@extends('layouts.main')

@section('seo')

@endsection

@section('content')
    <section class="form">
        <h1 class="form__title">Регистрация</h1>

        <form method="post">
            @csrf
            <label>
                <span>Ваше имя</span>
                <input class="form__input-text" type="text" name="name" placeholder="Например, Иван" required>
            </label>
            <label>
                <span>Электропочта</span>
                <input class="form__input-text" type="email" name="email" placeholder="mail@example.com" required>
            </label>
            <label>
                <span>Пароль</span>
                <input class="form__input-text" type="password" name="password" required>
            </label>
            <label>
                <span>Повторите пароль</span>
                <input class="form__input-text" type="password" name="repassword" required>
            </label>
            <label class="form__checkbox-label">
                <input type="checkbox" required>
                <span>Я принимаю условия пользования сервисом и хочу продолжить.</span>
            </label>
            <button class="form-button form-button-primary">Зарегистрироваться</button>
        </form>
    </section>
@endsection
