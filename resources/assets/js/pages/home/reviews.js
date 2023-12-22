
import {Swiper, Scrollbar} from "@/libs/swiper-exports";

Swiper.use([Scrollbar]);

const swiperReviews = document.querySelectorAll('[data-swiper-reviews]');


!!swiperReviews.length && Array.from(swiperReviews, swiperReview => {
    const init = swiperReview.querySelector('[data-swiper-init-reviews]');
    new Swiper(init, {
        preloadImages: false,
        breakpointsInverse: true,
        slidesPerView: 1,
        spaceBetween: 20,
        a11y: true,
        scrollbar: {
            el: swiperReview.querySelector(".swiper-scrollbar"),
            draggable: true,
        },
        enabled: true,
        breakpoints: {
            568: {
                enabled: true,
                slidesPerView: 2,
            },
            768: {
                enabled: true,
                slidesPerView: 3,
            },
            992: {
                enabled: true,
                slidesPerView: 4,
            },
            1360: {
                enabled: false,
                slidesPerView: 5,
            },
        },
    })
})





