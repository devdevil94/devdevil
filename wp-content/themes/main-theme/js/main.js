

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

        if(name == '' || email == '' || message == ''){
            console.log('Empty Fields');
            return;
        }

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
                console.log(response);  
            },
            success: function(response){
               
            }
        });

        console.log(name);
    });
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
