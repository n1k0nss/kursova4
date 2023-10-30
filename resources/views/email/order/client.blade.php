@extends('email.order.components.layout')

@section('content')
    @yield('content')
    @include('email.order.components.header')
    @include('email.order.components.welcome')
    @include('email.order.components.order-number')
    @foreach($mailData['order']->products as $product)
        @include('email.order.components.product', ['product' => $product])
    @endforeach

    @include('email.order.components.sum')
    @include('email.order.components.delivery-cost')
    @include('email.order.components.total-sum')
    @include('email.order.components.personal')
    @include('email.order.components.delivery')
    @include('email.order.components.thanks')
    @include('email.order.components.footer')
@endsection
