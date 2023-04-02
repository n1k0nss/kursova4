@extends('master')
@section('title', 'Cart')

@section('content')
<div class='container-fluid'>
    <div class="card mx-auto col-md-3 col-10 mt-5">
        <img class='mx-auto img-thumbnail'
            src="../img/{{$product->image}}.jpg"
            width="auto" height="auto"/>
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold">{{$product->name}}</h5>
                <p class="card-text">{{$product->price}}VP</p>
                <form action="{{route('cart-add', $product)}}" method="POST">
                    <button type="submit" class="btn btn-outline-dark mt-auto" role="button">Add to cart</a>
                        @csrf
                </form>

            </div>
        </div>
    </div>

</div>
@endsection
