<section class="about">
    <div class="container">
        <div class="about-container">
            <div class="about-image">
                <div class="image-slider">
                    <div class="slides">
                        <img src="{{ asset('images/home/picture1.png') }}" alt="Cooperative Community">
                        <img src="{{ asset('images/home/picture2.png') }}" alt="Member Success">
                        <img src="{{ asset('images/home/picture3.png') }}" alt="Team & Growth">
                    </div>
                    <div class="slider-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                
                <div class="image-grid">
                    <img src="{{ asset('images/home/picture3.png') }}" alt="About Image 1">
                    <img src="{{ asset('images/home/picture2.png') }}" alt="About Image 2">
                    <img src="{{ asset('images/home/picture1.png') }}" alt="About Image 3">
                </div>
            </div>

            <div class="about-content">
                <div class="about-header">
                    <h4 class="about-subtitle">ABOUT US</h4>
                    <h2 class="about-title">Pagasa Multi-Purpose Cooperative</h2>
                    <div class="about-line"></div>
                </div>
                <div class="about-description">
                    <p>
                        Pagasa Multi-Purpose Cooperative (PMPC) is a member-owned organization
                        committed to empowering communities through sustainable financial and
                        livelihood services. Guided by the spirit of cooperation, PMPC provides
                        accessible loans, savings, and business opportunities to help members
                        achieve financial stability and growth. Together, we build a brighter
                        future—rooted in trust, unity, and shared progress.
                    </p>
                </div>
                <div class="about-button">
                    <a href="{{ route('about') }}" class="learn-more-btn">
                        LEARN MORE
                        <i class="fas fa-arrow-right icon"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mvc-container">
            <div class="mvc-content">
                <h2 class="mvc-title">Our Mission, Vision, and Cooperative Values</h2>
                <p class="mvc-description">Building trust and identity for our members.</p>
            </div>
            <div class="mvc-card-container">
                <div class="mvc-card">
                    <div class="mvc-icon">
                        <img src="{{asset('images/icons/mission-icon.png')}}" alt="Mission Icon">
                    </div>
                    <h3 class="mvc-title">MISSION</h3>
                    <p class="mvc-text">
                        PMPC provides quality products and financial assistance that are responsive
                        to the changing members’ needs, through prompt, honest and efficient services.
                    </p>
                </div>

                <div class="mvc-card">
                    <div class="mvc-icon">
                        <img src="{{asset('images/icons/vision-icon.png')}}" alt="Vision Icon">
                    </div>
                    <h3 class="mvc-title">VISION</h3>
                    <p class="mvc-text">
                        The preferred large cooperative in Valenzuela providing innovative products
                        and efficient services uplifting the lives of members and more marginalized
                        sector in the community.
                    </p>
                </div>

                <div class="mvc-card">
                    <div class="mvc-icon">
                        <img src="{{asset('images/icons/values-icon.png')}}" alt="Cooperative Values Icon">
                    </div>
                    <h3 class="mvc-title">COOPERATIVE VALUES</h3>
                    <p class="mvc-text">
                        The cooperative upholds the values of self-help, self-responsibility, equity, democracy, equality, honesty, openness, caring for others, social responsibility, solidarity, and being pro-active in all its undertakings.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>