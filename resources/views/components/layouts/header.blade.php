<header class="header">
    <div class="header__container container">
        <div class="header__logo">
            <a class="logo__link link" href="/">
                <svg width="65" height="65">
                    <use xlink:href="{{mix('/img/sprite.svg')}}#logo"></use>
                </svg>
            </a>
        </div>
        <div class="header__cart-modal header__modal">
            <button class="header__cart-button button" type="button" data-target="cart">

            </button>
        </div>

        <div class="header__modal header__menu-modal ">
            <button class="header__menu-button button" type="button" data-target="menu" data-main-menu-button>
                <div class="menu-button__wrapper">
                    <span class="menu-button__span"></span>
                </div>
            </button>
            <div class="menu-modal__box" data-main-menu>
                <div class="modal__cart">
                    <a href="{{route('cart')}}">
                        <div class="cart-icon">
                            <svg width="24" height="24">
                                <use xlink:href="{{mix('/img/sprite.svg')}}#cart"></use>
                            </svg>
                        </div>
                        <span>Кошик</span>
                    </a>
                </div>
                <div class="modal__nav">
                    <nav class="nav">
                        <ul class="nav-list list">
                            @foreach ($categories as $category)
                                <li class="nav-list__item">
                                    <a href="{{route('category', $category->code)}}" class="nav__link">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="modal__contact">
                    <div class="contact__title">
                        <p>Телефони для зв'язку</p>
                    </div>
                    <ul class="contact__number-list list">
                        <li class="number-list__item"><a href="tel:+380953130809">+38 095 313 08 09</a>
                            <a href="https://t.me/n1k0nss">
                                <svg width="24" height="24">
                                    <use xlink:href="{{mix('/img/sprite.svg')}}#telegram"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="number-list__item"><a href="tel:+380636220482">+38 063 622 04 82</a>
                            <a href="https://t.me/n1k0nss">
                                <svg width="24" height="24">
                                    <use xlink:href="{{mix('/img/sprite.svg')}}#telegram"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modal__lang-switch">
                    <ul class="lang-list list">
                        <li class="lang-list__item"><a href="#">Ua</a></li>
                        <li class="lang-list__item"><a href="#">Ru</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
