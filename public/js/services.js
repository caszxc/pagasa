const cards = document.querySelectorAll('.savings-card');

cards.forEach(card => {
  card.addEventListener('click', () => {
    // If it's already flipped, flip back immediately
    if (card.classList.contains('flipped')) {
      card.classList.remove('flipped');
      return;
    }

    card.classList.add('flipped');

    setTimeout(() => {
      card.classList.remove('flipped');
    }, 5000);
  });
});

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
