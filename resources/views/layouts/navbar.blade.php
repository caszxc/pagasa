<nav>
    <div class="logo-container">
        <img src="{{ asset('images/logo.png')}}" alt="Pagasa Multi-Purpose Cooperative" class="logo">
        <h2 class="name">PAGASA<br>MULTI-PURPOSE<br>COOPERATIVE</h2>
    </div>

    <!-- Hamburger Button (visible only on mobile/tablet) -->
    <div class="hamburger-container">
        <div class="hamburger" id="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>

    <ul class="nav-menu" id="nav-menu">
        <li><a href="{{ route('home') }}" class="nav-link">HOME</a></li>
        <li><a href="{{ route('services') }}" class="nav-link">SERVICES</a></li>
        <li><a href="{{ route('membership') }}" class="nav-link">MEMBERSHIP</a></li>
        <li><a href="{{ route('about') }}" class="nav-link">ABOUT US</a></li>
        <li><a href="{{ route('contact') }}" class="nav-link">CONTACT US</a></li>
    </ul>
</nav>