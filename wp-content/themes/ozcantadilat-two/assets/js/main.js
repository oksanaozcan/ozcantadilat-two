document.addEventListener("DOMContentLoaded", function() {
  AOS.init();

  // Main Slider
  const carousel = document.getElementById("main-carousel");  

  carousel.addEventListener("slid.bs.carousel", function() {
    const activeItem = carousel.querySelector(".carousel-item.active");
    const caption = activeItem.querySelector(".carousel-caption");      
    caption.classList.add("show");
  });

  carousel.addEventListener("slide.bs.carousel", function() {
    const activeItem = carousel.querySelector(".carousel-item.active");
    const caption = activeItem.querySelector(".carousel-caption");      
    caption.classList.remove("show");
  });
  // Main slider end

});