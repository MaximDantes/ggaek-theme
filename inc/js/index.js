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
const logInModal = document.querySelector('.log-in-modal')
const signUpModal = document.querySelector('.sign-up-modal')

signUpButtons.forEach(item => {
    item.addEventListener('click', () => {
        signUpModal.classList.remove('hidden')
    })
})

signInButtons.forEach(item => {
    item.addEventListener('click', () => {
        logInModal.classList.remove('hidden')
    })
})

logInModal.addEventListener('click', (e) => {
    if (e.currentTarget === e.target) {
        logInModal.classList.add('hidden')
    }
})

signUpModal.addEventListener('click', (e) => {
    if (e.currentTarget === e.target) {
        signUpModal.classList.add('hidden')
    }
})