@extends('layouts.master')
@section('title', 'Cart')
@section('bladename', 'cart')

@section('content')
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    </div>
                    @if(isset($order))
                        @foreach ($order->products as $product)
                            <div class="card rounded-3 mb-4">
                                <div class="card-body p-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img
                                                src="../img/{{$product->image}}.jpg"
                                                class="img-fluid rounded-3"
                                                height="143" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                            <p class="lead fw-normal mb-2">{{$product->name}}</p>
                                        </div>
                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <form action="{{route('cart-remove', $product)}}" method="POST">
                                                <button class="btn btn-link px-2">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                @csrf
                                            </form>
                                            <input id="form1" min="0" name="quantity" value="{{$product->pivot->count}}"
                                                   type="number"
                                                   class="form-control form-control-sm"/>
                                            <form action="{{route('cart-add', $product)}}" method="POST">
                                                <button type="submit" class="btn btn-link px-2">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                @csrf
                                            </form>

                                        </div>
                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h5 class="mb-0">Price: {{$product->price}}VP</h5>
                                            <h5 class="mb-0">Total: {{$product->getPriceForCount()}}VP</h5>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <form action="{{route('cart-detach', $product)}}" method="POST">
                                                <button type="submit" class="btn btn-link px-2 text-danger">
                                                    <i class="fas fa-trash fa-lg"></i>
                                                </button>
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="card">
                        <div class="card-body d-flex justify-content-center">
                            <button @if($order->products->isEmpty()) disabled @endif type="button" class="btn btn-warning btn-block btn-lg">
                                Оплатити @if(isset($order)){{$order->getFullPrice()}} VP @endif
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    @include('site.pages.cart.components.one-click-modal')
@endsection
