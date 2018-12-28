

function navSlide(){
    const burger = document.querySelector('.burger');

    burger.addEventListener('click', () => {
        const nav = document.querySelector('.nav-links');
        const navLinks = document.querySelectorAll('.nav-links li');
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if(link.style.animation)
                link.style.animation = '';
            else
                link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.5}s`;
        });

        burger.classList.toggle('toggle');
    });
}
navSlide();