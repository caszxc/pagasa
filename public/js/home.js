//FAQ accordion script
const faqs = document.querySelectorAll(".faq-item");

faqs.forEach((faq) => {
  const btn = faq.querySelector(".faq-question");

  btn.addEventListener("click", () => {
    faqs.forEach((item) => {
      if (item !== faq) {
        item.classList.remove("active");
        item.querySelector(".faq-question").setAttribute("aria-expanded", "false");
      }
    });

    const nowActive = faq.classList.toggle("active");
    btn.setAttribute("aria-expanded", nowActive ? "true" : "false");
  });
});

// Auto-playing Mobile Image Slider
document.addEventListener('DOMContentLoaded', function () {
    const slidesContainer = document.querySelector('.image-slider .slides');
    const dots = document.querySelectorAll('.slider-dots .dot');
    let currentSlide = 0;
    const totalSlides = 3;

    function goToSlide(index) {
        slidesContainer.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentSlide = index;
    }

    // Auto-play every 4 seconds
    let autoPlay = setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        goToSlide(currentSlide);
    }, 4000);

    // Click dots to navigate
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            clearInterval(autoPlay); // pause on interaction
            autoPlay = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                goToSlide(currentSlide);
            }, 4000);
        });
    });

    // Pause on hover (nice UX)
    document.querySelector('.image-slider').addEventListener('mouseenter', () => clearInterval(autoPlay));
    document.querySelector('.image-slider').addEventListener('mouseleave', () => {
        autoPlay = setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;
            goToSlide(currentSlide);
        }, 4000);
    });
});

