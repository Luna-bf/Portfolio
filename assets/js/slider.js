document.addEventListener("DOMContentLoaded", () => {

    // Initialisation du carrousel
    const swiper = new Swiper('.card-wrapper', {
        // modules: [Navigation, Pagination],

        loop: true,
        spaceBetween: 40,

        // Pagination (points sous le slider)
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },

        // Flèche de navigation (pour utiliser le carrousel)
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Responsive : défini combien de diapositives je vais afficher selon la taille de l'écran
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
});