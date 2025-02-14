//Je récupère mes éléments
const elements = {
    darkMode: window.localStorage.getItem("dark-mode"),
    changeTheme: document.getElementById("change-theme-btn"),
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

//Flèche qui ramène en haut de la page
$(document).ready(function() {
    let animation_elements = $.find('.animation-item');
    let web_window = $(window);
    
    function check_if_in_view() {
        let window_height = web_window.height();
        let window_top_position = web_window.scrollTop();
        let window_bottom_position = (window_top_position + window_height);
        
        $.each(animation_elements, function() {
            let element = $(this);
            let element_height = $(element).outerHeight();
            let element_top_position = $(element).offset().top;
            let element_bottom_position = (element_top_position + element_height);
        
            
            if((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                element.addClass('item-in-view');
            } else {
                element.removeClass('item-in-view');
            }
        });
    }
    $(window).on('scroll resize', function() {
        check_if_in_view();
    });
    $(window).trigger('scroll');
});
