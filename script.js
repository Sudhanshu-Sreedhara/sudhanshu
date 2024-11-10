// Example: Smooth Scroll for Navigation
const navbarLinks = document.querySelectorAll('.navbar a');

navbarLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        document.getElementById(targetId).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
