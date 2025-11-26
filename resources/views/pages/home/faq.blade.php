<section class="faq">
    <div class="faq-container">
        <div class="faq-header" data-aos="fade-up">
            <h4 class="faq-subtitle">FAQ</h4>
            <h2 class="faq-title">Frequently Asked Questions</h2>
        </div>
        <div class="accordion-container">
            @foreach([
                ['q' => 'How do I become a member?', 'a' => 'You can sign up online or visit any branch.'],
                ['q' => 'What are the membership benefits?', 'a' => 'Access to loans, dividends, and cooperative events.'],
                ['q' => 'How are dividends calculated?', 'a' => 'Based on annual profits and your share contribution.'],
                ['q' => 'What documents are needed?', 'a' => 'ID, proof of address, and income statement.']
            ] as $i => $item)
                <div class="faq-item" data-aos="fade-up" data-aos-delay="{{ ($i + 1) * 150 }}">
                    <button class="faq-question" aria-expanded="false">
                        {{ $item['q'] }}
                        <span class="icon" aria-hidden="true">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>{{ $item['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>