var swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },

  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
});
