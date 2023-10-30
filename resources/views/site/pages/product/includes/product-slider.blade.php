<div class="product__main-slider product-slider">
    <div class="product-slider__thumbs-wrapper">
        <button type="button" class="product-slider__thumbs-prev-button swiper-button-prev">
            <svg>
                <use xlink:href="{{mix('/img/sprite.svg')}}#down"></use>
            </svg>
        </button>
        <div class="product-slider__thumbs swiper product-thumbs-slider">
            <div class="swiper-wrapper product-thumbs-slider__wrapper">
                <div class="product-thumbs-slider__slide swiper-slide">
                    <picture class="product-thumbs-slider__picture">
                        <img class="product-thumbs-slider__img" src="{{$product->image}}"
                             alt="">
                    </picture>
                </div>
                <div class="product-thumbs-slider__slide swiper-slide">
                    <picture class="product-thumbs-slider__picture">
                        <img class="product-thumbs-slider__img" src="{{$product->image}}"
                             alt="">
                    </picture>
                </div>
                <div class="product-thumbs-slider__slide swiper-slide">
                    <picture class="product-thumbs-slider__picture">
                        <img class="product-thumbs-slider__img" src="{{$product->image}}"
                             alt="">
                    </picture>
                </div>
                <div class="product-thumbs-slider__slide swiper-slide">
                    <picture class="product-thumbs-slider__picture">
                        <img class="product-thumbs-slider__img" src="{{$product->image}}"
                             alt="">
                    </picture>
                </div>
                <div class="product-thumbs-slider__slide swiper-slide">
                    <picture class="product-thumbs-slider__picture">
                        <img class="product-thumbs-slider__img" src="{{$product->image}}"
                             alt="">
                    </picture>
                </div>
                <div class="product-thumbs-slider__slide swiper-slide">
                    <picture class="product-thumbs-slider__picture">
                        <img class="product-thumbs-slider__img" src="{{$product->image}}"
                             alt="">
                    </picture>
                </div>
            </div>
        </div>
        <button type="button" class="product-slider__thumbs-next-button swiper-button-next">
            <svg>
                <use xlink:href="{{mix('/img/sprite.svg')}}#down"></use>
            </svg>
        </button>
    </div>
    <div class="product-slider__main swiper product-main-slider">
        <div class="swiper-wrapper product-main-slider__wrapper" id="js--light-gallery">
            <picture data-src="{{$product->image}}" class="product-main-slider__slide swiper-slide">
                <img class="product-main-slider__img" src="{{$product->image}}" alt="">
            </picture>
            <picture data-src="{{$product->image}}" class="product-main-slider__slide swiper-slide">
                <img class="product-main-slider__img" src="{{$product->image}}" alt="">
            </picture>
            <picture data-src="{{$product->image}}" class="product-main-slider__slide swiper-slide">
                <img class="product-main-slider__img" src="{{$product->image}}" alt="">
            </picture>
            <picture data-src="{{$product->image}}" class="product-main-slider__slide swiper-slide">
                <img class="product-main-slider__img" src="{{$product->image}}" alt="">
            </picture>
            <picture data-src="{{$product->image}}" class="product-main-slider__slide swiper-slide">
                <img class="product-main-slider__img" src="{{$product->image}}" alt="">
            </picture>
            <picture data-src="{{$product->image}}" class="product-main-slider__slide swiper-slide">
                <img class="product-main-slider__img" src="{{$product->image}}" alt="">
            </picture>
        </div>
        <button type="button" class="product-slider__prev-button product-slider__button swiper-button-prev">
            <svg>
                <use xlink:href="{{mix('/img/sprite.svg')}}#arrow-right"></use>
            </svg>
        </button>
        <button type="button" class="product-slider__next-button product-slider__button swiper-button-next">
            <svg>
                <use xlink:href="{{mix('/img/sprite.svg')}}#arrow-right"></use>
            </svg>
        </button>
        <div class="product-main-slider__pagination swiper-pagination"></div>
    </div>
</div>
