<div class="{{$class}} review-items js--review-items">
    <span class="review-items__rate">5.0</span>
    <div class="review-items__stars">
        <svg class="review-items__img review-items__img--active">
            <use xlink:href="{{mix('/img/sprite.svg')}}#star"></use>
        </svg>
        <svg class="review-items__img review-items__img--active">
            <use xlink:href="{{mix('/img/sprite.svg')}}#star"></use>
        </svg>
        <svg class="review-items__img review-items__img--active">
            <use xlink:href="{{mix('/img/sprite.svg')}}#star"></use>
        </svg>
        <svg class="review-items__img review-items__img--active">
            <use xlink:href="{{mix('/img/sprite.svg')}}#star"></use>
        </svg>
        <svg class="review-items__img review-items__img--active">
            <use xlink:href="{{mix('/img/sprite.svg')}}#star"></use>
        </svg>
    </div>
    <div class="review-items__text">
        {{ $text ?? '' }}
    </div>
    <span class="review-items__author">
        {{ $author ?? '' }}
    </span>
</div>

