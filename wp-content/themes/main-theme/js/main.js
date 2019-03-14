

function navSlide(){
    const menuBars = document.querySelector('.menu-bars');

    menuBars.addEventListener('click', () => {
        const nav = document.querySelector('nav');
        nav.classList.toggle('active');

    //     navLinks.forEach((link, index) => {
    //         if(link.style.animation)
    //             link.style.animation = '';
    //         else
    //             link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.5}s`;
    //     });

    //    menuBars.classList.toggle('toggle');
    });
}


(function($) {
    $('#contact-form').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        
        var name = form.find('#contact_name').val(),
            email = form.find('#contact_email').val(),
            message = form.find('#contact_message').val();

        var ajaxurl = form.data('url');

        $('.input-error').removeClass('input-error');
        $('.form-feedback').removeClass('form-feedback');

        if(name == ''){
            $('#contact_name').addClass('input-error');
            $('#name-error').removeClass('hide-msg');
            console.log('no name');
            return;
        }
        if(email == ''){ // Needs more validation
            $('#contact_email').addClass('input-error');
            $('#email-error').removeClass('hide-msg');
            console.log('no email');
            return;
        }
        if(message == ''){
            $('#contact_message').addClass('input-error');
            $('#message-error').removeClass('hide-msg');
            console.log('no message');
            return;
        }

        form.find('input, button, textarea').attr('disabled', 'disabled');
        $('.form-processed').addClass('form-feedback');
        

        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: {
                name: name,
                email: email,
                message: message,
                action: 'devdevil_save_user_contact'
            },
            error: function(response){
                $('.form-error').addClass('form-feedback');    
                $('.form-processed').removeClass('form-feedback');
                
                form.find('input, button, textarea').removeAttr('disabled');
            },
            success: function(response){
                if(response == 0){
                    setTimeout(function(){
                        $('.form-error').addClass('form-feedback');    
                        $('.form-processed').removeClass('form-feedback');
                    
                        form.find('input, button, textarea').removeAttr('disabled');
                    }, 1500);
                }else{
                    setTimeout(function(){
                        $('.form-submitted').addClass('form-feedback');    
                        $('.form-processed').removeClass('form-feedback');
                    
                        form.find('input, button, textarea').removeAttr('disabled').val('');
                    }, 1500);
                }
            }
        });

    });
}(jQuery));

(function($) {
    $('.recent-post-panel').hover(function(e){
        e.preventDefault();
        var panel = $(this),
            postAuthor = panel.find('.recent-post-author'),
            postDate = panel.find('.recent-post-date');     

        postAuthor.toggleClass('hide-info');
        postDate.toggleClass('hide-info');
    })
}(jQuery));


(function($) {
    window.fnames = new Array();
    window.ftypes = new Array();
    fnames[0]='EMAIL';
    ftypes[0]='email';
    fnames[1]='FNAME';
    ftypes[1]='text';
    fnames[2]='LNAME';
    ftypes[2]='text';
}(jQuery));

var $mcj = jQuery.noConflict(true);

navSlide();
