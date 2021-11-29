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

const signInButtons = document.querySelectorAll('.sign-in-button')
const signUpButtons = document.querySelectorAll('.sign-up-button')
const authModal = document.querySelector('.modal')

signInButtons.forEach(item => {
    item.addEventListener('click', () => {
        authModal.classList.remove('hidden')
    })
})

authModal.addEventListener('click', (e) => {
    if (e.currentTarget === e.target) {
        authModal.classList.add('hidden')
    }
})