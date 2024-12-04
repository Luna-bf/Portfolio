//Je récupère mes éléments
let darkMode = window.localStorage.getItem("dark-mode");
const changeTheme = document.getElementById("change-theme-btn");

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
changeTheme.addEventListener("click", () => {
    
    darkMode = window.localStorage.getItem("dark-mode");
    darkMode !== "active" ? enableDarkMode() : disableDarkMode();
    
    //C'est l'équivalent de :
    /*
    if(darkMode !== "isActive") {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
    */
});

const btn = document.querySelector('#prompt button');

btn.addEventListener('click', () => {
    console.log('ok');
});

//Apparition du prompt
setTimeout(function() {
    document.querySelector("#prompt p").innerHTML += 'Some text';
}, 5000);
