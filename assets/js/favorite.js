const menu = document.querySelector('nav .container .sub-menu');
const burgerMenu  = document.querySelector('.burger-menu ');

burgerMenu.addEventListener('click', () => {
    menu.classList.toggle("active");
})


var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 15,
    stretch: 0,
    depth: 300,
    spaceBetween: 0,
    modifier: 1,
    slideShadows: true,
  },
  loop: true,
});