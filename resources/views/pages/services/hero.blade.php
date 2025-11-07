<section class="hero">
    <div class="banner-container">
        @include('pages.components.banner', ['title' => 'SERVICES'])
        <p class="banner-description">
            Discover the wide range of services our cooperative offers to support members’ growth and community development — 
            from financial assistance and livelihood programs to training and business opportunities.
        </p>
    </div>

    <div class="circle-container">
        @php
            $items = [
                ['href' => '#savings',  'icon' => 'images/icons/savings-offer-icon.png', 'text' => 'Savings'],
                ['href' => '#loans',    'icon' => 'images/icons/loans-offer-icon.png',    'text' => 'Loans'],
                ['href' => '#benefits', 'icon' => 'images/icons/benefits-offer-icon.png','text' => 'Benefits'],
                ['href' => '#others',   'icon' => 'images/icons/other-offer-icon.png',   'text' => 'Others'],
            ];
        @endphp

        @foreach ($items as $i => $item)
            <a href="{{ $item['href'] }}"
               class="circle"
               data-aos="zoom-in"
               data-aos-delay="{{ 300 + $i * 150 }}">
                <img src="{{ asset($item['icon']) }}" alt="{{ $item['text'] }} Icon" class="circle-icon">
                <span>{{ $item['text'] }}</span>
            </a>
        @endforeach
    </div>
</section>