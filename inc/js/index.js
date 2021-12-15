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


const mobileMenuContent = document.querySelector('.header-mobile-menu__content')
const mobileMenuButton = document.querySelector('.header-mobile-menu__button')
const subMenus = mobileMenuContent.querySelectorAll('.sub-menu')
const mobileMenuItems = mobileMenuContent.querySelectorAll('.menu-item')

mobileMenuItems.forEach(item => {
    if (item.classList.contains('menu-item-has-children')) {
        item.children[0].classList.add('has-children')
        item.children[1].classList.add('hidden-height')

        item.addEventListener('click', e => {
            if (e.target.classList.contains('has-children')) {
                e.preventDefault()
                item.children[1].classList.toggle('hidden-height')
            }
        })
    }
})


mobileMenuButton.addEventListener('click', () => {
    mobileMenuContent.classList.toggle('hidden-height')
})


const albumPhoto = document.querySelector('.album-photo')
const showImage = (path) => {
    console.log(path)
    albumPhoto.children[0].src = path
    albumPhoto.classList.remove('hidden')
}

albumPhoto.addEventListener('click', (e) => {
    if (e.currentTarget === e.target) {
        albumPhoto.classList.add('hidden')
    }
})

