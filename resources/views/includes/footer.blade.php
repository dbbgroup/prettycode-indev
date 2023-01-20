<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__inline">
            <div class="footer__identic">
                <img src="{{ asset('images/Logotype.svg') }}" class="footer__identic-logotype">
            </div>
            <ul class="footer__list">
                <lh>PrettyCode</lh>
                <li>
                    <a href="{{ route('page.index') }}" class="footer__list-link">Главная</a>
                </li>
                <li>
                    <a href="{{ route('page.show', ['page.slug' => 'catalog/last']) }}" class="footer__list-link">Последние публикации</a>
                </li>
                <li>
                    <a href="{{ route('page.show', ['page.slug' => 'account/profile']) }}" class="footer__list-link">Аккаунт</a>
                </li>
            </ul>
            <ul class="footer__list">
                <lh>Последние анонсы</lh>
                @if(!empty($publications))
                @foreach($publications as $p)
                <li>
                    <a href="{{ route('page.show', ['page.slug' => $p->slug]) }}" class="footer__list-link">{{ $p->title }}</a>
                </li>
                @endforeach
                @else
                <li>Публикаций нет.</li>
                @endif
            </ul>
            <ul class="footer__list">
                <lh>Контакты</lh>
                <li>
                    <a href="mailto:contact@prettycode.ru" class="footer__list-link">contact@prettycode.ru</a>
                </li>
                <li>
                    <a href="{{ route('auth.show', ['action' => 'abuse']) }}" class="footer__list-link">Сообщить о проблеме</a>
                </li>
                <li>
                    <a href="{{ route('page.show', ['page.slug' => 'privacy']) }}" class="footer__list-link">Политика конфиденциальности</a>
                </li>
            </ul>
        </div>
        <div class="footer__copyright">
            © PrettyCODE.ru <script type="text/javascript">var mdate = new Date(); document.write(mdate.getFullYear())</script>
        </div>
    </div>
</footer>
