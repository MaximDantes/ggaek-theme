const slider = new Swiper('.slider-swiper', {
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    spaceBetween: 20,
    slidesPerView: 1,
    loop: true,
});

const ourProud = new Swiper('.our-proud__swiper', {
    autoplay: {
        delay: 5000,
    },
    slidesPerView: 1,
    loop: true,
});