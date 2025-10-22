const form = document.getElementById('contactForm');
const modalOverlay = document.getElementById('modalOverlay');
const modalBox = document.getElementById('modalBox');
const closeModal = document.getElementById('closeModal');

form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = new FormData(form);

    try {
        const res = await fetch(form.action, {
        method: form.method,
        body: data,
        headers: { 'Accept': 'application/json' }
        });

        if (res.ok) {
        showModal("success", "Message Sent!", "Thank you for reaching out. We'll get back to you soon!");
        form.reset();
        } else {
        showModal("error", "Error", "Oops! Something went wrong. Please try again later.");
        }
    } catch (error) {
        showModal("error", "Error", "Network error. Please try again.");
    }
});

function showModal(type, title, message){
    modalBox.className = "modal " + type;
    modalBox.querySelector("h3").textContent = title;
    modalBox.querySelector("p").textContent = message;
    modalOverlay.style.display = "flex";
}

    closeModal.addEventListener('click', () => {
    modalOverlay.style.display = "none";
});

modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) modalOverlay.style.display = "none";
});