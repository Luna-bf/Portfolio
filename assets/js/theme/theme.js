// Theme switcher
let darkMode = localStorage.getItem('darkMode');
const toggleMode = document.querySelector('.theme-switcher');

// Activation du mode sombre
function enableDarkMode() {

    document.body.classList.add("dark-mode"); // Je donne la classe 'dark-mode' à la balise body

    // Puis je met à jour l'état du mode sombre dans le localStorage
    window.localStorage.setItem("darkMode", 'active'); //Je ne peux mettre que des strings dans le localStorage, au lieu de mettre un boléen (true ou false) je met juste 'active'
};

// Désactive le mode sombre
function disableDarkMode() {

    document.body.classList.remove("dark-mode"); // Je retire la classe 'dark-mode' de la balise body
    window.localStorage.setItem("darkMode", null); // Puis je change l'état du dark-mode à null
}

// Si l'utilisateur a déjà visité le site et a activé le mode sombre
if (darkMode === 'active') {
    enableDarkMode(); // J'appelle la fonction enableDarkMode();
}

// J'ajoute un événement de click au bouton qui change le thème de la page
toggleMode.addEventListener('click', function () {

    // Je récupère l'élément darkMode stocké dans localStorage
    darkMode = localStorage.getItem('darkMode');

    // Puis je vérifie sa valeur
    if (darkMode !== 'active') {
        enableDarkMode(); // Si la valeur n'est pas 'active' (thème lumineux) je donne la possibilité de l'activer
    } else {
        disableDarkMode(); // Sinon, je donne la possibilité de le désactiver
    }
});