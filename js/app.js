const dropdowns = document.querySelectorAll('.dropdown');
        console.log(dropdowns);
        
        for(let i = 0; i < dropdowns.length; i++) {
            
            dropdowns[i].addEventListener('click', function(e) {
                
                //for(let x = 0; i < dropdowns.length; x++) {
                  //  dropdowns[x].querySelector('.dropdown-content').classList.add('hide');
                //}
                e.currentTarget.querySelector('.dropdown-content').classList.toggle('hide');
            });
        }

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
