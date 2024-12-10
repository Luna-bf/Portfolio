//Je récupère mes éléments
const elements = {
    darkMode: window.localStorage.getItem("dark-mode"),
    changeTheme: document.getElementById("change-theme-btn"),
    increment: document.getElementById("increment"),
    decrement: document.getElementById("decrement"),
    reset: document.getElementById("reset-all"),
    btn: document.querySelector('#prompt button'),
    prompt: document.getElementById("prompt"),
    paragraph: document.querySelector("#prompt p"),
};


/*Dark mode*/

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


/*Accessibilité*/
elements.increment.addEventListener("click", () => {
    document.querySelector("body").style.fontSize = "24px";
});

elements.decrement.addEventListener("click", () => {
    document.querySelector("body").style.fontSize = "16px";
});

elements.reset.addEventListener("click", () => {
    document.querySelector("body").style.fontSize = "16px";
    elements.darkMode = disableDarkMode();
});



//Apparition du prompt
/*setTimeout(function() {
    elements.prompt.classList.remove('hide-prompt');
}, 5000);

//Pour faire disparaitre le prompt
elements.btn.addEventListener('click', () => {
    elements.prompt.classList.add('hide-prompt');
});*/
