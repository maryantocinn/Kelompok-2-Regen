// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("slidex");
//   var dots = document.getElementsByClassName("progress_bar");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
// }
const track = document.querySelector('.carousel_track');
const slides = Array.from(track.children);

const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');
const dotsNav = document.querySelector('.carousel_nav');
const dots = Array.from(dotsNav.children);

const slideWidth = slides[0].getBoundingClientRect().width;
// const slideWidth = slideSize.width;
// console.log(slideWidth)
// slides[0].style.left = slideWidth * 0 + 'px';
// slides[1].style.left = slideWidth * 1 + 'px';
// slides[2].style.left = slideWidth * 2 + 'px'; 

//arrange the slides next to one another
const setSlidePosition = (slide,index) =>{
    slide.style.left = slideWidth * index + 'px';
}
slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left +')';
    currentSlide.classList.remove('currentSlide');
    targetSlide.classList.add('currentSlide');
}
const updateDots = (currentDot, targetDot)=>{
    currentDot.classList.remove('currentSlide');
    targetDot.classList.add('currentSlide');
}
// slides.forEach((slide, index) => {
//     slide.style.left = slideWidth * index + 'px';
// });
//when i click left moves to the left
prevButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.currentSlide');
    const prevSlide = currentSlide.previousElementSibling;
    const currentDot = dotsNav.querySelector('.currentSlide');
    const prevDot = currentDot.previousElementSibling;
    moveToSlide(track, currentSlide, prevSlide);
    updateDots(currentDot, prevDot);
});

//when i click right moves to the right
nextButton.addEventListener('click', e => {
    const currentSlide = track.querySelector('.currentSlide');
    const nextSlide = currentSlide.nextElementSibling;
    const currentDot = dotsNav.querySelector('.currentSlide');
    const nextDot = currentDot.nextElementSibling;
    //move to the next slide
    // track.style.transform = 'translateX(-' + amountToMove + ')';
    // currentSlide.classList.remove('currentSlide');
    // nextSlide.classList.add('currentSlide');
    moveToSlide(track, currentSlide, nextSlide);
    updateDots(currentDot, nextDot);
});

//when i click nav indicator it moves to that slide

dotsNav.addEventListener('click', e => {
    //what indicator was clicked on
    const targetDot = e.target.closest('button');

    if (!targetDot) return;

    const currentSlide = track.querySelector('currentSlide');
    const currentDot = dotsNav.querySelector('.currentSlide');
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];
    
    moveToSlide(track, currentSlide, targetSlide);
    updateDots(currentDot, targetDot);
});