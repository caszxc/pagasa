  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    const offset = 30; // your fixed header height
    const topPos = target.getBoundingClientRect().top + window.scrollY - offset;

    window.scrollTo({
      top: topPos,
      behavior: 'smooth'
    });
  });
});