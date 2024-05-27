window.addEventListener('scroll', function() {
    var footer = document.querySelector('.footer-fixed');
    var scrollPosition = window.scrollY + window.innerHeight;
    var bodyHeight = document.body.offsetHeight;

    if (scrollPosition >= bodyHeight) {
        footer.style.display = 'block';
    } else {
        footer.style.display = 'none';
    }
});

document.getElementById('about-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('about').scrollIntoView({ behavior: 'smooth' });
});

document.getElementById('contact-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
});

document.getElementById('contact-link2').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('contact2').scrollIntoView({ behavior: 'smooth' });
});

function redirectToLink(url) {
    window.open(url, '_blank');
}



