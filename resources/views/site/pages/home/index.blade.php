@extends('layouts.master')
@section('bladename', 'home')
@section('content')
    <main class="home">
        <section class="home__hero hero">
            <h1 class="hero__title">ValoShop - Valorant skins market</h1>
        </section>

        <div class="home__container container">
        @include('site.pages.home.components.benefits', ['class' => 'home__benefits benefits'])
        </div>

        <section class="home__products home-products">
            <div class="home__container container js--show-more-container">
                <h2 class="home__subtitle title title--center">Список товарів</h2>
                <div class="home-products__list products-list js--show-more-content">
                    @foreach ($products as $product)
                        <div class="product-card @if($loop->iteration == 9) js--show-more-anchor @endif">
                            <a class="product-card__image-link" href="{{route('product', [$product->category->code, $product->code])}}">
                                <picture class="product-card__picture">
                                    <img class="product-card__image" src="{{$product->image}}"
                                         alt="">
                                </picture>
                            </a>
                            <div class="product-card__top">
                                <span class="product-card__code">
                                № лоту <span class="product-card__code-number">{{ $product->id }}</span>
                                </span>
                            </div>
                            <a class="product-card__title-link" href="{{route('product', [$product->category->code, $product->code])}}">
                                {{$product->name}}
                            </a>
                            <div class="product-card__footer">
                                <span class="product-card__price">
                                    {{$product->price}}
                                    VP
                                </span>
                                <a href="{{route('product', [$product->category->code, $product->code])}}" class="product-card__footer-button product-card__cart">
                                    <svg class="product-card__footer-icon">
                                        <use xlink:href="{{mix('/img/sprite.svg')}}#cart"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="home-products__btn btn js--show-more" data-show-more-text="Сховати">
                    <span class="home-products__btn-text btn__text js--show-more-text">
                        Показати більше
                    </span>
                    <svg class="home-products__btn-icon btn__icon">
                        <use xlink:href="{{mix('/img/sprite.svg')}}#reload"></use>
                    </svg>
                </button>
            </div>
        </section>

        @include('site.pages.home.components.reviews', ['class' => 'home__reviews'])

        <div class="home__container container">
            @include('components.site.faq', ['class' => 'home__faq', 'faqs' => [
                        [
                            'title' => 'Чи можна накладеним платежем?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aspernatur cumque deserunt doloribus error in incidunt itaque magnam mollitia nam nulla quae quaerat, quas quia, quo sed tenetur ut!'
                        ],
                        [
                            'title' => 'Чи зможу я повернути товар?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aspernatur cumque deserunt doloribus error in incidunt itaque magnam mollitia nam nulla quae quaerat, quas quia, quo sed tenetur ut!'
                        ],
                        [
                            'title' => 'Скільки часу доставка?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aspernatur cumque deserunt doloribus error in incidunt itaque magnam mollitia nam nulla quae quaerat, quas quia, quo sed tenetur ut!',
                        ],
                         [
                            'title' => 'Чи потрібна передоплата?',
                            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi aspernatur cumque deserunt doloribus error in incidunt itaque magnam mollitia nam nulla quae quaerat, quas quia, quo sed tenetur ut!',
                        ]

                   ]])
        </div>
    </main>
@endsection
