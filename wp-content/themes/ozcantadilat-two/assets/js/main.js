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

  // Progress bars
  const wrappers = document.querySelectorAll(".smm-wrapper");

  function animateProgressBars(bars) {
      bars.forEach(bar => {
          let progress = 0;
          const targetProgress = parseInt(bar.parentNode.getAttribute("aria-valuenow"));
          const animationDuration = 1000;
          const increment = targetProgress / (animationDuration / 10);

          const interval = setInterval(() => {
              progress += increment;
              bar.style.width = progress + "%";

              if (progress >= targetProgress) {
                  clearInterval(interval);
              }
          }, 10);
      });
  }

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              const progressBars = entry.target.querySelectorAll(".progress-bar");
              animateProgressBars(progressBars);
              observer.unobserve(entry.target);
          }
      });
  }, { threshold: 0.5 });

  wrappers.forEach(wrapper => {
      observer.observe(wrapper);
  });
  // Progress bar end.

});