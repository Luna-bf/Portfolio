const contactForm = document.getElementById('contact-form'); // Je récupère la balise de mon formulaire grâce à son identifiant.
const submitMessage = document.getElementById('submit-message');

/* Cette fonction une IIFE (Immediately Invoked Function Expression) soit une "Expression de Fonction Immédiatement Invoquée"
ce terme défini un type de fonction s'exécute dès que celle-ci est définie. */
// Cette fonction va donc exécuter la méthode emailjs.init(), qui va initialiser mon formulaire.
(function () {
    emailjs.init({ // Cette méthode va initialiser mon formulaire.
        // J'identifie mon compte EmailJS grâce à une "clé publique" présente dans le compte, sinon je n'aurais pas accès à l'API.
        publicKey: "KUNqq_RTKCTdIU_p7",
    });
})();

/*
J'ajoute un écouteur d'événement sur la page : celui-ci va exécuter le code qui suit uniquement lorsque la page et ses ressources
seront entièrement chargées (liens stylesheets, scripts, cdns...).
*/
window.addEventListener('load', function() {

    // J'ajoute aussi un écouteur d'événement pour le formulaire, lorsque celui-ci est envoyé, je vais :
    contactForm.addEventListener('submit', function (event) {

        event.preventDefault(); // Empêcher le rechargement de la page,

        /*
        Envoyer le formulaire à l'aide de la méthode sendForm() fournie par EmailJS, celle-ci prend les paramètres suivants :
        - L'identifiant du service de boîte mail utilisé : l'identifiant donné correspond à Gmail
        - L'identifiant de la template utilisée : l'identifiant donné correspond à la template par défaut
        - Le formulaire à utiliser : je déclare que le formulaire correspond à la variable contactForm, qui récupère l'identifiant
          unique associé au formulaire de contact
        */
        emailjs.sendForm("service_n3udj4q", "template_eo63ht2", contactForm)
            .then((response) => {
                console.log('Succès !', 'Statut :', response.status, response.text);
                submitMessage.classList.remove('none');
                contactForm.reset(); // Vider le formulaire une fois celui-ci envoyé.

            }) .catch((error) => {
                console.log('Échec.', error);
            });
    });
})