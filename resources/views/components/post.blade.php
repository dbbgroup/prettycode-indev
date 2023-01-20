<section class="post">
    <div class="post__poster">
        <img src="" class="post__poster-image" alt="Post image">
    </div>
    <div class="post__info">
        <h2>Заголовок тестовой новости</h2>
        <p>Lorem ipsum dolor sit amet awkldmaw awdklmawd awdklmawd awkdlmawd awdklamwdl awdklmawdkl awdawdawd awdawdawd awdawd awdawd adwdawd awda...</p>

        <div class="post__info-inline">
            <div class="post__info-buttons">
                <a href="{{ route('page.show', ['page.slug' => 'p/post-slug-link']) }}" class="post__info-btn-primary">Подробнее</a>
                <button class="post__info-btn-secondary">
                    <img src="{{ asset('images/like-gray.svg') }}" alt="Мне нравится">
                    <img src="{{ asset('images/like-filled.svg') }}" alt="Мне нравится">
                </button>
                <button class="post__info-btn-secondary">
                    <img src="{{ asset('images/comment-gray.svg') }}" alt="Мне нравится">
                    <img src="{{ asset('images/comment-filled.svg') }}" alt="Мне нравится">
                </button>
            </div>
            <div class="post__info-views">
                1203 просмотра
            </div>
        </div>
    </div>
</section>
