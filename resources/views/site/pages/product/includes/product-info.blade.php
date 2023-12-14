<div class="product__info product-info">
    <h1 class="product-info__title title">
        {{$product->name}}
    </h1>
    <div class="product-info__header">
        <div class="product-info__codes">
            <span class="product-info__code-title product-info__code-title--first">
                <span class="product-info__code-name">Лот:</span>
                <span class="product-info__code product-info__code--blue">
                    {{ $product->id }}
                </span>
            </span>
            <span class="product-info__code-title product-info__code-title--second">
                <span class="product-info__code-name">Стан:</span>
                <span class="product-info__code product-info__code--green">
                    Новий
                </span>
            </span>
{{--            <form class="product-info__favorite-form js--add-to-favorite"--}}
{{--                  action="" method="POST"--}}
{{--            >--}}
{{--                @csrf--}}
{{--                <button class="product-info__favorite js--add-to-favorite-button" type="submit">--}}
{{--                    <svg class="product-info__favorite-icon">--}}
{{--                        <use xlink:href="{{mix('/img/sprite.svg')}}#heart"></use>--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </form>--}}
        </div>

    </div>
    <div class="product-info__middle">
        <span class="product-info__price price">
            <span class="price__new">
               {{$product->price}}<span class="currency"> VP</span>
            </span>
        </span>

        <div class="product-info__forms">
            <form action="{{route('cart-add', $product)}}" method="POST" id="js--add-to-cart" class="product-info__add-to-cart add-to-cart js--add-to-cart-form">
                @csrf
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="lot_number" value="">
                <button type="submit"
                        class="add-to-cart__button btn btn-primary"
                        data-in-cart="В кошику">
                    <span class="add-to-cart__text js--add-to-cart-button-text">
                       В кошик
                    </span>
                    <svg class="add-to-cart__icon">
                        <use xlink:href="{{mix('/img/sprite.svg')}}#cart"></use>
                    </svg>
                </button>
            </form>
            <button type="button" class="one-click btn btn-secondary">
                <span class="add-to-cart__text">Швидка покупка</span>
                <svg class="add-to-cart__icon">
                    <use xlink:href="{{mix('/img/sprite.svg')}}#call-out"></use>
                </svg>
            </button>
        </div>
    </div>
    @include('site.pages.product.includes.info-block')
</div>
