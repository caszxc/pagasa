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


// Location Section
const locations = [
{
    name: "Valenzuela Office",
    type: "Main Office",
    address: "293 San Guillermo Street, Valenzuela, Metro Manila",
    phone: "(555) 123-4567",
    map: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4202698572285!2d120.97294797368562!3d14.688809474913823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b405e5591c49%3A0x18694cdd26eb8fa4!2sPagasa%20Multi-Purpose%20Cooperative!5e0!3m2!1sen!2sph!4v1761186035570!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
},
{
    name: "Malabon Office",
    type: "Branch Office",
    address: "MXP5+VH7, Rodriguez St, Malabon, 1478 Metro Manila",
    phone: "(555) 987-6543",
    map: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61751.18741768942!2d120.88683452167967!3d14.68717019999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b471f7d998c3%3A0xeeeafda5237d9621!2sPag-Asa%20Multi-Purpose%20Cooperative!5e0!3m2!1sen!2sph!4v1761186254733!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
},
{
    name: "Quezon Office",
    type: "Branch Office",
    address: "M246+7J5, Kaingin Rd, Quezon City, 1106 Metro Manila",
    phone: "(555) 456-7890",
    map: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61760.08754831533!2d120.93950942167965!3d14.655630800000022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b6f2d945b8b3%3A0x9bbc50c33db31231!2sPagasa%20Multi%20-%20Purpose%20Cooperative!5e0!3m2!1sen!2sph!4v1761186309422!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
}
];

function showDetails(index) {
    const location = locations[index];
    const sidePanel = document.getElementById('sidePanel');
    sidePanel.innerHTML = `
        <h2>${location.name}</h2>
        <p>${location.type}</p>
        <p>${location.address}</p>
        <p>${location.phone}</p>
        <div class="map-container">${location.map}</div>
        <button class="direction-btn" onclick="window.open('https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(location.address)}', '_blank')">Get Directions</button>
    `;
}

// Show first location by default
showDetails(0);