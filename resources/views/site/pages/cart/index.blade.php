@extends('layouts.master')
@section('title', 'Cart')
@section('bladename', 'cart')

@section('content')

<main class="cart">
    <div class="cart__container container">
        <h1 class="cart__title title title--center">
            Ваш кошик
        </h1>
        <div class="cart__content">
            <div class="cart__box-items">
                @if(isset($order))
                    @foreach ($order->products as $product)
                        @include('site.pages.cart.components.cart-item', ['class' => 'cart__cart-item'])
                    @endforeach
                @endif

            </div>
            @include('site.pages.cart.components.estimation', ['class' => 'cart__estimation'])

        </div>

        <button @if(!isset($order) || $order->products->isEmpty()) disabled @endif type="button" class="cart__button btn js--one-click">
            Оформити
        </button>
    </div>
</main>


    @include('site.pages.cart.components.one-click-modal')
@endsection
