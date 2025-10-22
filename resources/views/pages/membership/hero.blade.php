<section class="hero">
    <div class="banner-container">
        @include('pages.components.banner', ['title' => 'MEMBERSHIP'])
        <p class="banner-description">Learn how to become a valued member of our cooperative. Explore the benefits, requirements, and steps to join our growing community committed to mutual success.</p>
    </div>
    <div class="benefits-container">
        <div class="benefits-header">
            <img src="{{asset('images/icons/benefits-icon.png')}}" alt="" class="header-icon">
            <div class="header-content">
                <h2>Benefits of being a member</h2>
                <p class="description">Mga Kinakailangan para sa Miyembro</p>
            </div>
        </div>
        
        <div class="cards-container">
            <div class="benefits-card">
                <h4 class="benefit-title">Taunang tubo sa Share Capital</h4>
            </div>
            <div class="benefits-card">
                <h4 class="benefit-title">Patronage Refund</h4>
            </div>
            <div class="benefits-card">
                <h4 class="benefit-title">Savings and Time Deposit</h4>
            </div>
            <div class="benefits-card">
                <h4 class="benefit-title">Comprehensive Group Life Insurance</h4>
            </div>
            <div class="benefits-card">
                <h4 class="benefit-title">Tulong sa Tao</h4>
            </div>
        </div>
    </div>
    
</section>