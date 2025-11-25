<section class="hero">
    <div class="banner-container">
        @include('pages.components.banner', ['title' => 'MEMBERSHIP'])
        <p class="banner-description">
            Learn how to become a valued member of our cooperative. Explore the benefits, requirements, 
            and steps to join our growing community committed to mutual success.
        </p>
    </div>

    <div class="hero-stats">
        <div class="stat"><strong>5,000+</strong> Active Members</div>
        <div class="stat"><strong>₱500M+</strong> Total Assets</div>
        <div class="stat"><strong>25+</strong> Years of Service</div>
        <div class="stat"><strong>12%</strong> Avg. Annual Dividend</div>
    </div>

    <div class="hero-cta">
        <a href="#membership" class="btn-primary">Start Your Membership Now →</a>
        <a href="{{ asset('downloads/APPLICATION FOR MEMBERSHIP FORM.9.10.16.doc') }}" class="btn-secondary" download>
            <i class="fa fa-download"></i> Download Application Form
        </a>
    </div>
</section>
