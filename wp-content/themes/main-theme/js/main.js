

function navSlide(){
    const menuBars = document.querySelector('.menu-bars');
    menuBars.addEventListener('click', () => {
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');
        nav.classList.toggle('mobile-nav-active');

        navLinks.forEach((link, index) => {
            if(link.style.animation)
                link.style.animation = '';
            else
                link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.5}s`;
        });

       menuBars.classList.toggle('toggle');
    });
}
navSlide();