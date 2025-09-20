// Slider
new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 40,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        },
    }
});


// Cover background (active burger menu)
const coverBackground = document.getElementById('cover-background');
const burgerMenuBtn = document.querySelector('.open-menu');

burgerMenuBtn.addEventListener('click', function () {

    // Faire en sorte que le fond sois sombre uniquement lorsque le burger menu est ouvert
    coverBackground.classList.toggle('covering');
    window.setTimeout(function () { coverBackground.classList.toggle('covering'); }, 5000);

    // if(coverBackground.classList)
});