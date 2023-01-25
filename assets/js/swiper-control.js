//Partners logos
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    centeredSlides: true,
    mousewheel: {
        releaseOnEdges: true,
    },
    // loop: true,
    speed: 1000,
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            //spaceBetween: 30,
            slidesPerGroup: 1,
        },
        500: {
            slidesPerView: 2,
            //spaceBetween: 30,
            slidesPerGroup: 1,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 50,
            slidesPerGroup: 1,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 40,
            slidesPerGroup: 1,
        },

    },
});

//Testimonials
var swiper = new Swiper(".swiper-testimonials", {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    mousewheel: {
        releaseOnEdges: true,
    },
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 2000,
    }
});

//Related projects
var extrasmallScreen = slides_per_view_extra_small_screen;
var smallScreen = slides_per_view_small_screen;
var mediumScreen = slides_per_view_medium_screen;
var largeScreen = slides_per_view_large_screen;
var swiper = new Swiper(".swiper-projects", {
    spaceBetween: 30,
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    },
    mousewheel: {
        releaseOnEdges: true,
    },
    breakpoints: {
        320: {
            slidesPerView: extrasmallScreen,
            spaceBetween: 30,
            slidesPerGroup: 1,
        },
        576: {
            slidesPerView: smallScreen,
            spaceBetween: 10,
            slidesPerGroup: 1,
        },
        768: {
            slidesPerView: mediumScreen,
            spaceBetween: 10,
            slidesPerGroup: 1,
        },
        992: {
            slidesPerView: largeScreen,
            spaceBetween: 40,
            slidesPerGroup: 1,
        },
    },
});

// const swiperContainer = document.querySelector('.swiper-projects');
// swiperContainer.style.width = '75%';
// swiperContainer.style.height = '75%';
// document.querySelectorAll('.swiper-slide img').forEach(img => {
//     img.style.width = '100%';
//     img.style.height = '100%';
// });