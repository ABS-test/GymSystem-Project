"use strict"

let dots = document.getElementsByClassName('dots_item'),
    dotsArea = document.getElementsByClassName('dots_block')[0],
    slides = document.getElementsByClassName('slides_item'),
    prevBtn = document.getElementById('left_button'),
    nextBtn = document.getElementById('right_button'),
    slideIndex = 1;

showSlides(slideIndex);

function showSlides (n) {
    if (n < 1) {
        slideIndex = slides.length;
    } else if (n > slides.length) {
        slideIndex = 1;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    for (let i = 0; i < dots.length; i++) {
        dots[i].classList.remove('dot-active');
    }
    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].classList.add('dot-active');
}
function plusSlides (n) {
    showSlides(slideIndex += n);
}
function currentSlide (n) {
    showSlides(slideIndex = n)
}

prevBtn.onclick = function () {
    plusSlides(-1);
}
nextBtn.onclick = function () {
    plusSlides(1);
}
dotsArea.onclick = function (e) {
    for (let i = 0; i < dots.length + 1; i++) {
        if (e.target.classList.contains('dots_item') && e.target == dots[i - 1]) {
            currentSlide(i);
        }
    }
}