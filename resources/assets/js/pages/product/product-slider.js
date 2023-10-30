import {Swiper , EffectFade, Navigation , Thumbs , Grid , Pagination} from '@/libs/swiper-exports';

Swiper.use([Navigation, EffectFade, Thumbs , Grid , Pagination]);

const productSliderWrapper = document.getElementsByClassName('product-main-slider')[0],
    thumbsSliderWrapper = document.getElementsByClassName('product-thumbs-slider')[0];

const thumbsSlider = new Swiper(thumbsSliderWrapper, {
    direction: "vertical",
    slidesPerView: 5,
    spaceBetween: 8,
    watchOverflow: true,
    navigation: {
        prevEl: thumbsSliderWrapper.parentElement.querySelector('.swiper-button-prev'),
        nextEl: thumbsSliderWrapper.parentElement.querySelector('.swiper-button-next'),
        hideOnClick: true,
    },
    breakpoints: {
        1200:{
            slidesPerView: 6,
            spaceBetween: 15,
        },
        1700:{
            slidesPerView: 7,
            spaceBetween: 20,
        }
    },
    clickable: true,
    breakpointsInverse: true,
    watchSlidesProgress: true,
})

export const productSlider = new Swiper(productSliderWrapper,{
    effect: 'fade',
    breakpointsInverse: true,
    navigation: {
        prevEl: productSliderWrapper.querySelector('.swiper-button-prev'),
        nextEl: productSliderWrapper.querySelector('.swiper-button-next'),
    },
    thumbs:{
        swiper: thumbsSlider,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '"></span>';
        },
    },
});
