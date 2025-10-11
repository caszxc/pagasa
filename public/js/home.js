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