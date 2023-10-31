<footer class="footer">
    <div class="footer__container container">
        <a class="footer__logo" href="/">
            <svg class="footer__logo-icon">
                <use xlink:href="{{mix('/img/sprite.svg')}}#logo-white"></use>
            </svg>
        </a>
        <address class="footer__address">Луцьк, просп. Перемоги</address>
        <div class="footer__block footer-block footer-block--contacts-block">
            <span class="footer-block__title">
                Наші контакти
            </span>
            <ul class="footer-block__phones phones-list js--region-phones">
                <li class="phones-list__item">
                    <a href="tel:+380953130809" class="phones-list__link">
                        +38 095 313 08 09
                    </a>
                    <a href="https://t.me/n1k0nss" target="_blank" class="phones-list__icon-link">
                        <svg class="phones-list__icon">
                            <use xlink:href="{{mix('/img/sprite.svg')}}#telegram"></use>
                        </svg>
                    </a>
                </li>
                <li class="phones-list__item">
                    <a href="tel:+380636220482" class="phones-list__link">
                        +38 063 622 04 82
                    </a>
                    <a href="https://t.me/n1k0nss" target="_blank" class="phones-list__icon-link">
                        <svg class="phones-list__icon">
                            <use xlink:href="{{mix('/img/sprite.svg')}}#telegram"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer__block footer-block footer-block--navigation">
            <span class="footer-block__title">
                Інфрмація
            </span>
            <ul class="navigation footer-block__navigation">
                @foreach ($categories as $category)
                    <li class="navigation__item">
                        <a class="navigation__link" href="{{route('category', $category->code)}}">
                            <svg class="navigation__icon">
                                <use xlink:href="{{mix('/img/sprite.svg')}}#information"></use>
                            </svg>
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="footer__block footer-block footer-block--schedule">
            <span class="footer-block__title">
                Режим роботи
            </span>
            <div class="schedule footer-block__schedule">
                <ul class="schedule__list">
                    <li class="schedule__item">
                        Пн-Пт:
                        <span class="value">09:00 до 17:00</span>
                    </li>
                    <li class="schedule__item">
                        Сб:
                        <span class="value">10:00 до 16:00</span>
                    </li>
                    <li class="schedule__item">
                        Нд:
                        <span class="value"> 10:00 до 16:00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__container container">
            <span class="footer__all-rights">
                © ValoShop 2023. Всі права захищені
            </span>
        </div>
    </div>
</footer>
