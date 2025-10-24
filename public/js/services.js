// Savings Card Flip Effect
const cards = document.querySelectorAll('.savings-card');
  cards.forEach(card => {
    card.addEventListener('click', () => {
      // Flip the card
      card.classList.add('flipped');

      // Wait 5 seconds, then flip it back
      setTimeout(() => {
        card.classList.remove('flipped');
      }, 5000); // ← change this number (milliseconds) for longer/shorter flip time
    });
  });


// Loans Carousel
const wrapper = document.querySelector(".loans-wrapper");
const items = document.querySelectorAll(".loans-item");
const prevBtn = document.querySelector(".carousel-btn.prev");
const nextBtn = document.querySelector(".carousel-btn.next");

let index = 0;
const visibleItems = 3;
const totalItems = items.length;
let autoSlide;

// Clone items for infinite looping
items.forEach(item => {
  const clone = item.cloneNode(true);
  wrapper.appendChild(clone);
});

// Move carousel
function moveCarousel() {
  index++;
  wrapper.style.transform = `translateX(-${index * (items[0].offsetWidth + 20)}px)`;

  // Reset when end reached
  if (index >= totalItems) {
    setTimeout(() => {
      wrapper.style.transition = "none";
      index = 0;
      wrapper.style.transform = "translateX(0)";
      setTimeout(() => {
        wrapper.style.transition = "transform 0.5s ease";
      }, 50);
    }, 500);
  }
}

// Auto slide
function startAutoSlide() {
  autoSlide = setInterval(moveCarousel, 2500);
}

function stopAutoSlide() {
  clearInterval(autoSlide);
}

nextBtn.addEventListener("click", () => {
  stopAutoSlide();
  moveCarousel();
  startAutoSlide();
});

prevBtn.addEventListener("click", () => {
  stopAutoSlide();
  index = index <= 0 ? totalItems - 1 : index - 1;
  wrapper.style.transform = `translateX(-${index * (items[0].offsetWidth + 20)}px)`;
  startAutoSlide();
});

document.querySelector(".loans-carousel").addEventListener("mouseenter", stopAutoSlide);
document.querySelector(".loans-carousel").addEventListener("mouseleave", startAutoSlide);

startAutoSlide();


// Other Services Tab Switcher
const tabs = document.querySelectorAll('.tab');
  const serviceItems = document.querySelectorAll('.service-item');
  const container = document.querySelector('.services-items');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');

      const target = tab.dataset.target;
      container.style.opacity = 0;

      setTimeout(() => {
        serviceItems.forEach(serviceItems => {
          serviceItems.style.display = serviceItems.dataset.category === target ? 'flex' : 'none';
        });
        container.style.opacity = 1;
      }, 300);
    });
  });

  // Default: show services only
  window.addEventListener('DOMContentLoaded', () => {
    serviceItems.forEach(serviceItems => {
      serviceItems.style.display = serviceItems.dataset.category === 'services' ? 'flex' : 'none';
    });
  });



  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    const offset = 40; // your fixed header height
    const topPos = target.getBoundingClientRect().top + window.scrollY - offset;

    window.scrollTo({
      top: topPos,
      behavior: 'smooth'
    });
  });
});
