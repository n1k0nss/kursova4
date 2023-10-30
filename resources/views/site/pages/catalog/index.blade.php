@extends('layouts.master')
@section('title', 'Category ' . $category->name)
@section('bladename', 'catalog')

@section('content')
    <main class="catalog">
        <!-- Header-->
        <section class="catalog__hero hero">
            <h1 class="hero__title">{{$category->name}}</h1>
            <span class="hero__count">Товарів в наявності: {{$category->products->count()}}</span>
            <span class="hero__description">{{$category->description}}</span>
        </section>

        <section class="catalog__products">
            <div class="catalog__container container js--show-more-container">
                <h2 class="catalog__subtitle title title--center">Список товарів</h2>
                <div class="catalog__products-list products-list js--show-more-content">
                    @foreach ($category->products as $product)
                        @include('components.site.card', compact('product'))
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

