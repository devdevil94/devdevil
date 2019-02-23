

function navSlide(){
    const menuBars = document.querySelector('.menu-bars');

    menuBars.addEventListener('click', () => {
        const nav = document.querySelector('nav');
        const navLinks = document.querySelectorAll('.nav-links li');
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
