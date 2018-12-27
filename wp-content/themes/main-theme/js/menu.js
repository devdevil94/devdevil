
const navSlide = () => {
    const burger = document.getElementsByClassName('burger');
    const nav = document.getElementsByClassName('nav-links')[0];
    const navLinks = document.querySelectorAll('.nav-links li');
    console.log(burger);
    console.log(nav);
    console.log(navLinks);

    if(burger){
        burger[0].addEventListener('click', () => {
            console.log('hrrtgrtg');
            nav.classList.toggle('nav-active');

            navLinks.forEach((link, index) => {
                if(link.style.animation)
                    link.style.animation = '';
                else
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index/7 + 0.5}s`;
            });

            burger.classList.toggle('toggle')
        });
    }
    
};

navSlide();