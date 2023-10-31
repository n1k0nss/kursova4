@extends('layouts.master')
@section('title', 'Cart')
@section('bladename', 'cart-success')

@section('content')
    <main class="cart-success">

        <div class="cart-success__container container">
            <div class="cart-success__text-box">
                <div class="cart-success__title">
                     <span class="cart-success__title-icon">
                         <svg class="">
                            <use xlink:href="{{mix('/img/sprite.svg')}}#done"></use>
                        </svg>
                     </span>
                    <span class="cart-success__title-text">Дякуюємо за покупку!</span>
                </div>
                <div class="cart-success__content">
                    <span class="cart-success__content-text">Ваше замовлення оформлене.</span>
                    <span class="cart-success__content-text">Ми зв’яжемось з вами найближчим часом.</span>

                    <a href="{{ route('index') }}" class="cart-success__content-link btn">
                        <svg class="cart-success__content-link-icon btn__icon">
                            <use xlink:href="{{mix('/img/sprite.svg')}}#cart"></use>
                        </svg>
                        <span class="cart-success__content-link-text btn__text"> На головну</span>
                    </a>
                </div>
            </div>

            <picture class="cart-success__img-box">
                <source type="image/webp" srcset="/img/cart-success.webp">
                <source type="image/png" srcset="/img/cart-success.jpg">
                <img src="/img/cart-success.jpg" alt="" class="cart-success__img" decoding="async" width="" height="">
            </picture>
        </div>
    </main>
@endsection
