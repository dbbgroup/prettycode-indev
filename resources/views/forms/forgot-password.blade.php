@extends('layouts.main')

@section('seo')

@endsection

@section('content')
    <section class="form">
        <h1 class="form__title">Восстановление аккаунта</h1>

        <form method="post">
            @csrf
            <label>
                <span>Электропочта</span>
                <input class="form__input-text" type="email" name="email" placeholder="mail@example.com" required>
            </label>
            <button class="form-button form-button-primary">Продолжить</button>
        </form>
    </section>
@endsection

@section('alert')
    <section class="form">
        <h1 class="form__title">Проверьте почту</h1>
        <p>На указанный E-mail выслана ссылка для смены пароля.</p>
    </section>
@endsection

@section('final')
    <section class="form">
        <h1 class="form__title">Смена пароля</h1>

        <form method="post">
            @csrf
            <label>
                <span>Новый пароль</span>
                <input class="form__input-text" type="password" name="new_password" required>
            </label>
            <label>
                <span>Повтор пароля</span>
                <input class="form__input-text" type="password" name="new_repassword" required>
            </label>
            <button class="form-button form-button-primary">Сменить пароль</button>
        </form>
    </section>
@endsection
