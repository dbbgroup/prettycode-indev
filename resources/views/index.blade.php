@extends('layouts.main')

@section('seo')

@endsection

@section('content')
    <main class="main">
        <div class="wrapper">
            <div class="inline">
                <div class="column-content">

                    @include('components.post')

                </div>

                <div class="column-sidebar">
                    <section class="catalog-controls">
                        <div class="catalog-controls__column">
                            <a class="catalog-controls__btn-primary" href="{{ route('page.show', ['page.slug' => 'post/add']) }}">Создать публикацию</a>
                            <a class="catalog-controls__btn-secondary" href="{{ route('page.show', ['page.slug' => 'quotation/add']) }}">Задать вопрос</a>
                        </div>
                    </section>

                    @include('components.last-publications')
                </div>
            </div>
        </div>
    </main>
@endsection
