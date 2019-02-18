

function navSlide(){
    const menuBars = document.querySelector('.menu-bars');

    menuBars.addEventListener('click', () => {
        const nav = document.querySelector('nav');
        const navLinks = document.querySelectorAll('.nav-links li');
    
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
