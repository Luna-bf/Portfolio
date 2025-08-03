//Je récupère mes éléments
const elements = {
     body: document.querySelector('body'),
     darkMode: window.localStorage.getItem("dark-mode"),
     changeTheme: document.getElementById("change-theme"),
     changeFlag: document.querySelector(".big"),
     en: document.querySelector("#en"),
}

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

/*Dark mode (me laisse bloquée sur le mode sombre, trouver l'origine du problème)*/

// function darkMode() {
//   if (elements.body.classList.contains("")) {
//     elements.body.classList.remove("dark-mode");
//     localStorage.setItem("theme", "light");
//   } else {
//     elements.body.classList.add("dark-mode");
//     localStorage.setItem("theme", "dark");
//   }
// }

// if (localStorage.getItem("theme") === "dark") {
//   elements.body.classList.add('dark-mode');

//   elements.changeTheme.addEventListener('click', darkMode);
// }

// function darkMode() {
//     let setTheme = document.body;
//     setTheme.classList.toggle("dark-mode")
//     let theme;

//     if (setTheme.classList.contains("dark-mode")){
//         console.log("Dark mode");
//         theme = "Dark";
    
//     } else {
//         console.log("Light mode");
//         theme = "Light";
//     }
//     // save to localStorage
//     localStorage.setItem("PageTheme", JSON.stringify(theme));
//     // ensure you convert to JSON like i have done -----JSON.stringify(theme)
// }

// // Mauvais pratique, à changer
// setInterval(() => {
//     let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
    
//     if(getTheme === "Dark"){
//         document.body.classList = "dark-mode";
//         clearInterval(getTheme);
//     } else {
//         document.body.classList = "";
//         clearInterval(getTheme);
//     }
// }, 5);



//Je déclare mes fonctions enableDarkMode et disableDarkMode
const enableDarkMode = () => {
    
     document.body.classList.add("dark-mode");
     window.localStorage.setItem("dark-mode", "active"); //Je ne peux mettre que des strings dans le localStorage, au lieu de mettre isActive (true ou false) je met juste 'active'
};

const disableDarkMode = () => {
    
     document.body.classList.remove("dark-mode");
     window.localStorage.setItem("dark-mode", null);
};

//Puis je met un event listener sur le bouton, ce qui va me permettre de changer de thème
elements.changeTheme.addEventListener("click", () => {
    
     elements.darkMode = window.localStorage.getItem("dark-mode");
     elements.darkMode !== "active" ? enableDarkMode() : disableDarkMode();
     
     //C'est l'équivalent de :
     /*
     if(darkMode !== "isActive") {
          enableDarkMode();
     } else {
          disableDarkMode();
     }
     */
});