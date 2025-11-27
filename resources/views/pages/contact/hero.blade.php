<section class="hero">
    <div class="banner-container" data-aos="fade-down" data-aos-delay="200">
        @include('pages.components.banner', ['title' => 'CONTACT US'])
        <p class="banner-description" data-aos="fade" data-aos-delay="600">Reach out to us for inquiries, assistance, or partnership opportunities. Find our office address, contact numbers, and online inquiry form to connect easily with our team.</p>
    </div>
    <div class="form-container" data-aos="fade" data-aos-delay="800">
        <form id="contactForm" action="https://formspree.io/f/mldpybny" method="POST">
            <!-- Replace the action URL with your own Formspree endpoint -->
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" placeholder="Your name" required>

            <label for="email">Email</label>
            <input type="email" name="_replyto" id="email" placeholder="you@example.com" required>

            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Your message..." required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <!-- Modal -->
    <div id="modalOverlay" class="modal-overlay">
        <div id="modalBox" class="modal">
            <h3>Message Sent!</h3>
            <p>Thank you for reaching out. We’ll get back to you soon.</p>
            <button id="closeModal">OK</button>
        </div>
    </div>
</section>