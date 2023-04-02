@extends('master')
@section('content')
        <!-- Header-->
        <header class="bg-dark py-5" style="background-image: url(./img/panorama.jpg); background-size: cover; background-repeat: no-repeat">
            <div class="container px-4 px-lg-5 my-5" >
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">All products</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($products as $product)
                        @include('card', compact('product'))
                    @endforeach
                </div>
            </div>
        </section>
@endsection
