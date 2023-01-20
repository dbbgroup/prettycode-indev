<header class="header">
    <div class="header__wrapper">
        <div class="header__logotype">
            <img src="{{ asset('images/Logotype.svg') }}" class="header__logotype-image" alt="PrettyCode">
        </div>

        <div class="header__nav">
            <nav class="header__nav-menu">
                <a href="{{ route('page.index') }}" class="header__nav-link">Новости</a>
                <a href="{{ route('page.show', ['page.slug' => 'catalog/my']) }}" class="header__nav-link">Мои публикации</a>
                <a href="{{ route('auth.show', ['action' => 'login']) }}" class="header__nav-link">Войти</a>
            </nav>
        </div>

        <div class="header__nav-mobile">
            <a id="toggleMobileHeader" class="header__nav-link">&#9776;</a>
        </div>
    </div>
</header>

<section class="header-mobile" style="right: -150%">
    <div class="header-mobile__wrapper">
        <ul>
            <li>
                <a href="{{ route('page.index') }}" class="header__nav-link">Новости</a>
            </li>
            <li>
                <a href="{{ route('page.show', ['page.slug' => 'catalog/my']) }}" class="header__nav-link">Мои публикации</a>
            </li>
            <li>
                <a href="{{ route('auth.show', ['action' => 'login']) }}" class="header__nav-link">Войти</a>
            </li>
        </ul>
    </div>
</section>
