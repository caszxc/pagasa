<section class="hero">
    <div class="banner-container">
        @include('pages.components.banner', ['title' => 'ABOUT US'])
        <p class="banner-description">
            Get to know our cooperative’s history, mission, and vision. Learn how we started, what we stand for, and how we continue to empower our members and community.
        </p>
    </div>

    <div class="about-container">
        <!-- What is Cooperative -->
        <div class="about-con">
            <div class="about-image">
                <img src="{{ asset('images/home/hero-bg.jpg')}}" alt="What is Cooperative">
            </div>
            <div class="about-content">
                <div class="about-header">
                    <h2 class="about-title">What is a Cooperative</h2>
                </div>
                <div class="about-description">
                    <p>
                        A cooperative is an organization owned and operated by its members for their mutual benefit. It is built on the principles of cooperation, equality, and shared responsibility. Members pool their resources to provide affordable goods and services, promote economic growth, and uplift the welfare of the community. Unlike traditional businesses, cooperatives prioritize people over profit, ensuring that success is shared among all members.
                    </p>
                </div>
            </div>
        </div>

        <!-- Pagasa Multi-Purpose Cooperative -->
        <div class="about-con">
            <div class="about-content">
                <div class="about-header">
                    <h2 class="about-title">Pagasa Multi-Purpose Cooperative</h2>
                </div>
                <div class="about-description">
                    <p>
                        Pagasa Multi-Purpose Cooperative is a community-based cooperative duly registered under the Cooperative Development Authority (CDA) with Registration No. 9520-16007936. Founded with the goal of promoting financial stability and community development, PMPC offers savings, loans, and other services that empower individuals and families to build a better future. Through unity and cooperation, we continue to uphold our mission of service, trust, and progress for all members.
                    </p>
                </div>
            </div>
            <div class="about-image right">
                <img src="{{ asset('images/home/hero-bg.jpg')}}" alt="Pagasa Multi-Purpose Cooperative">
            </div>
        </div>
    </div>
</section>
