<section class="{{$class}} reviews">
    <div class="reviews__container container">
        <span class="reviews__title title">Відгуки про нас</span>
        <div class="reviews__box">
            <div class="reviews__slider" data-swiper-reviews>
                <div class="swiper-container" data-swiper-init-reviews>

                    <div class="swiper-wrapper">
                        @php
                            $reviews = [
                                [
                                    'author' => 'Іван',
                                    'text' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolorum exercitationem magni minima molestiae sequi voluptas? Esse obcaecati perferendis vero!'
                                ],
                                [
                                    'author' => 'Василь',
                                    'text' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolorum exercitationem magni minima molestiae sequi voluptas? Esse obcaecati perferendis vero!'
                                ],
                                [
                                    'author' => 'Степан',
                                    'text' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolorum exercitationem magni minima molestiae sequi voluptas? Esse obcaecati perferendis vero!'
                                ],
                                [
                                    'author' => 'Мавродій',
                                    'text' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolorum exercitationem magni minima molestiae sequi voluptas? Esse obcaecati perferendis vero!'
                                ],
                                [
                                   'author' => 'Інокентій',
                                    'text' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, dolorum exercitationem magni minima molestiae sequi voluptas? Esse obcaecati perferendis vero!'
                                ]
                            ]
                        @endphp
                        @foreach($reviews as $review)
                                @include('site.pages.home.components.review-item', [
                                    'class' => 'reviews__review-item swiper-slide',
                                    'author' => $review['author'],
                                    'text' => $review['text']
                                ])
                        @endforeach
                    </div>
                    <div class="reviews__scrollbar swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</section>

