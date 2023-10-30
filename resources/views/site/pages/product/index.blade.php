@extends('layouts.master')
@section('title', 'Product')
@section('bladename', 'product')

@section('content')
    <main class="product">
        <div class="product__container container">
            @include('site.pages.product.includes.product-slider')

            @include('site.pages.product.includes.product-info')

            @include('site.pages.product.includes.characteristics', ['title' => true, 'class'=> 'product__characteristics'])
        </div>
    </main>
@endsection
