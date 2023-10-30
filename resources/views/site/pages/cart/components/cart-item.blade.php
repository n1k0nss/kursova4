<div class="{{$class}} cart-item">
    <form action="{{route('cart-detach', $product)}}" method="POST">
        <button type="submit" class="cart-item__remove js--remove-cart" data-card-delete>
            <svg class="cart-item__icon">
                <use xlink:href="{{mix('/img/sprite.svg')}}#cancel"></use>
            </svg>
        </button>
        @csrf
    </form>

    <a href="{{route('product', [$product->category->code, $product->code])}}" class="cart-item__link-img">
        <img
            src="{{$product->image}}"
            alt="{{$product->name}} photo"
            title="{{$product->name}} photo"
            decoding="async"
            class="cart-item__img"
        >
    </a>
    <div class="cart-item__box">
        <a href="{{route('product', [$product->category->code, $product->code])}}" class="cart-item__link-text">{{$product->name}}</a>
        @include('components.site.count', [
                            'class' => 'cart-item__count',
                        ])
        <div class="cart-item__price">
             <span class="js--product-price">{{$product->getPriceForCount()}} VP</span>
        </div>
    </div>
</div>
