<div class="col mb-5">
    <div class="card h-100">
        <!-- Sale badge-->
        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
        <!-- Product image-->
        <img class="card-img-top" src="./img/{{$product->image}}.jpg" height="143" alt="..." />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{$product->name}}</h5>
                <h5 class="text-muted">{{$product->category->name}}</h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                </div>
                <!-- Product price-->
                <span>{{$product->price}}VP</span>

            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                <form action="{{route('cart-add', $product)}}" method="POST">
                    <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-outline-dark details px-auto">view details</a><br />
                    <button type="submit" class="btn btn-outline-dark mt-auto" role="button">Add to cart</a>
                        @csrf
                </form>

            </div>
        </div>
    </div>
</div>
