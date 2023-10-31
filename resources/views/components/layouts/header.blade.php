<header class="header">
    <div class="header__container container">
        <div class="header__logo">
            <a class="header__logo-link logo__link link" href="/">
                <svg class="header__logo-icon" width="65" height="65">
                    <use xlink:href="{{mix('/img/sprite.svg')}}#logo"></use>
                </svg>
            </a>
        </div>

        <div class="header__modal burger-menu">
            <button class="burger-menu__button" type="button" data-target="menu" data-main-menu-button>
                <div class="burger-menu__button-wrapper">
                    <span class="burger-menu__span"></span>
                </div>
            </button>
            <div class="burger-menu__box" data-main-menu>
                <div class="burger-menu__cart @if($totalProductCount == 0) disabled @endif">
                    <a class="burger-menu__cart-link" href="{{route('cart')}}">
                        <div class="burger-menu__cart-wrapper">
                            <svg class="burger-menu__cart-icon" width="24" height="24">
                                <use xlink:href="{{mix('/img/sprite.svg')}}#cart"></use>
                            </svg>
                           @if($totalProductCount > 0)
                                <span class="burger-menu__cart-count">{{ $totalProductCount }}</span>
                           @endif
                        </div>
                        <span class="burger-menu__cart-name">Кошик</span>
                    </a>
                </div>
                <nav class="nav burger-menu__nav">
                    <ul class="nav__list list">
                        @foreach ($categories as $category)
                            <li class="nav__item">
                                <a href="{{route('category', $category->code)}}" class="nav__link">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <div class="burger-menu__contacts header-contacts">
                    <span class="header-contacts__title">Телефони для зв'язку</span>
                    <ul class="list header-contacts__list">
                        <li class="header-contacts__item"><a class="header-contacts__link" href="tel:+380953130809">+38 095 313 08 09</a>
                            <a class="header-contacts__social-link" href="https://t.me/n1k0nss">
                                <svg class="header-contacts__social-icon" width="24" height="24">
                                    <use xlink:href="{{mix('/img/sprite.svg')}}#telegram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="header-contacts__item"><a class="header-contacts__link" href="tel:+380636220482">+38 063 622 04 82</a>
                            <a class="header-contacts__social-link" href="https://t.me/n1k0nss">
                                <svg class="header-contacts__social-icon" width="24" height="24">
                                    <use xlink:href="{{mix('/img/sprite.svg')}}#telegram"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="burger-menu__lang-switch lang-switch">
                    <ul class="list lang-switch__list">
                        <li class="lang-switch__item"><a class="lang-switch__link" href="#">Ua</a></li>
                        <li class="lang-switch__item"><a class="lang-switch__link" href="#">En</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
