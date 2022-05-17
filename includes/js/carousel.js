const carouselSlide = document.querySelector('.carousel_slide');
const carouselImages = document.querySelectorALL('.carousel_slide img');

const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

