<div class="product-card">
    <a class="product-card__image-link" href="{{route('product', [$product->category->code, $product->code])}}">
        <picture class="product-card__picture">
            <img class="product-card__image" src="{{$product->image}}"
                 alt="">
        </picture>
    </a>
    <div class="product-card__top">
        <span class="product-card__code">
        № лоту <span class="product-card__code-number">{{ $product->id }}</span>
        </span>
    </div>
    <a class="product-card__title-link" href="{{route('product', [$product->category->code, $product->code])}}">
        {{$product->name}}
    </a>
    <div class="product-card__footer">
        <span class="product-card__price">
            {{$product->price}}
            VP
        </span>
        <a href="{{route('product', [$product->category->code, $product->code])}}" class="product-card__footer-button product-card__cart">
            <svg class="product-card__footer-icon">
                <use xlink:href="{{mix('/img/sprite.svg')}}#cart"></use>
            </svg>
        </a>
    </div>
</div>

