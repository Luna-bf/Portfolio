const form = document.getElementById('contact-form');

(function () {
    emailjs.init({
        publicKey: "KUNqq_RTKCTdIU_p7",
    });
})();


window.onload = function () {

    form.addEventListener('submit', function (event) {

        event.preventDefault(); // J'empêche le rechargement de la page

        emailjs.sendForm("service_n3udj4q", "template_eo63ht2", this)
            .then(() => {
                alert('Merci pour votre email, je vous recontacterai dans les plus brefs délais.');
                // window.location.href = "success.html";
                form.reset();

            }, (error) => {
                console.log('Failed to send email.', error);
            });
    });
}