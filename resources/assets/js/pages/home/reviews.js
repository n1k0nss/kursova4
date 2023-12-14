
import {Swiper, Scrollbar} from "@/libs/swiper-exports";

Swiper.use([Scrollbar]);

const swiperReviews = document.querySelectorAll('[data-swiper-reviews]');

const mediaQuery = window.matchMedia(`(max-width: 1360px)`)

if (mediaQuery.matches) {
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
            breakpoints: {
                568: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 4,
                },
                1360: {
                    slidesPerView: 5,
                },
            },
        })
    })
}





