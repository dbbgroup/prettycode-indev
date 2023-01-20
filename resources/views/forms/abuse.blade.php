@extends('layouts.main')

@section('seo')

@endsection

@section('content')
    <section class="form">
        <h1 class="form__title">Оставить вопрос</h1>

        <form method="post">
            @csrf
            <label>
                <span>Ваше имя</span>
                <input class="form__input-text" type="text" name="name" placeholder="Например, Иван">
            </label>
            <label>
                <span>Контакт для связи</span>

                <input class="form__input-text" type="text" name="contact" placeholder="E-mail или Номер телефона">
            </label>
            <label>
                <span>Суть обращения</span>
                <textarea class="form__input-text form__input-textarea" name="content"></textarea>
            </label>
            <button class="form-button form-button-primary">Войти</button>
        </form>
    </section>
@endsection
