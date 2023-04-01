@extends('master')
@section('title', 'Cart')

@section('content')
<div class='container-fluid'>
    <div class="card mx-auto col-md-3 col-10 mt-5">
        <img class='mx-auto img-thumbnail'
            src="#"
            width="auto" height="auto"/>
        <div class="card-body text-center mx-auto">
            <div class='cvp'>
                <h5 class="card-title font-weight-bold">{{$product}}</h5>
                <p class="card-text">$299</p>
                <a href="{{route('cart')}}" class="btn cart px-auto">ADD TO CART</a>

            </div>
        </div>
    </div>

</div>
@endsection
