<section class="hero">
    <div class="banner-container" data-aos="fade-down" data-aos-delay="200">
        @include('pages.components.banner', ['title' => 'MEMBERSHIP'])
        <p class="banner-description" data-aos="fade" data-aos-delay="600">
            Learn how to become a valued member of our cooperative. Explore the benefits, requirements, 
            and steps to join our growing community committed to mutual success.
        </p>
    </div>

    <div class="hero-stats">
        <div class="stat" data-aos="zoom-in" data-aos-delay="500"><strong>1,000+</strong> Active Members</div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="700"><strong>₱71M+</strong> Total Assets</div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="900"><strong>21+</strong> Years of Service</div>
        <div class="stat" data-aos="zoom-in" data-aos-delay="1000"><strong>12%</strong> Avg. Annual Dividend</div>
    </div>

    <div class="hero-cta" data-aos="fade-up" data-aos-delay="1300">
        <a href="#membership" class="btn-primary">Start Your Membership Now →</a>
        <a href="{{ asset('downloads/APPLICATION FOR MEMBERSHIP FORM.9.10.16.doc') }}" class="btn-secondary" download>
            <i class="fa fa-download"></i> Download Application Form
        </a>
    </div>
</section>
