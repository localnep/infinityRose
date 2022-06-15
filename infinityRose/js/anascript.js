var open = document.getElementById('hamburger-menu');
var changeIcon = true;

open.addEventListener("click", function () {

    var covering = document.querySelector('.covering');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    covering.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
        document.getElementById("slide").style.display = "none";
        document.getElementById("responsive-section").style.display = "none";
        document.getElementById("film-main").style.display="none";
        document.getElementById("film-header").style.display="none";
        
    } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
        document.getElementById("slide").style.display = "block";
        document.getElementById("responsive-section").style.display = "block";
        document.getElementById("film-main").style.display="block";
        document.getElementById("film-header").style.display="block";
    }
});





var slideIndex = 0;
showSlides();
var slides, dots;

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 9000); // Change image every 8 seconds
}

function plusSlides(position) {
    slideIndex += position;
    if (slideIndex > slides.length) {
        slideIndex = 1
    } else if (slideIndex < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function currentSlide(index) {
    if (index > slides.length) {
        index = 1
    } else if (index < 1) {
        index = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index - 1].style.display = "block";
    dots[index - 1].className += " active";
}
