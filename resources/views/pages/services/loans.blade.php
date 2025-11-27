<section class="loans" id="loans">
    <div class="loans-content">
        <div class="loans-header" data-aos="fade-down" data-aos-delay="200">
            <h2 class="loans-title">Loans</h2>
            <p class="loans-description">
                Access a variety of loan products with competitive rates and flexible terms to meet your needs.
            </p>
        </div>

        <!-- Loan Carousel -->
        <div class="loans-carousel-container" data-aos="fade-up" data-aos-delay="400">
            <button class="carousel-btn prev-btn" onclick="scrollCarousel(-1)" aria-label="Previous loans">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>

            <div class="loans-carousel" id="loanCarousel">
                <div class="loans-wrapper" id="loanWrapper">
                    @php
                        $loans = [
                            ['name' => 'Productive Loan', 'max' => 0, 'term' => '0 months', 'interest' => '1.75%', 'desc' => 'For business expansion and capital needs.'],
                            ['name' => 'Providential Loan', 'max' => 0, 'term' => '0 months', 'interest' => '1.75%', 'desc' => 'Multi-purpose emergency loan.'],
                            ['name' => 'Educational Loan', 'max' => 0, 'term' => '0 months', 'interest' => '1.75%', 'desc' => 'For tuition and school-related expenses.'],
                            ['name' => 'Business Car Loan', 'max' => 1500000, 'term' => '36 months', 'interest' => '1.5%', 'desc' => 'Finance your business vehicle.'],
                            ['name' => 'Motorcycle Loan', 'max' => 130000, 'term' => '24 months', 'interest' => '1.5%', 'desc' => 'Get your dream bike with easy terms.'],
                            ['name' => 'Jewelry Pledge Loan', 'max' => 0, 'term' => '0 months', 'interest' => '0%', 'desc' => 'Instant cash using jewelry as collateral.'],
                            ['name' => 'Medical/Emergency Loan', 'max' => 5000, 'term' => '5 months', 'interest' => '2.5%', 'desc' => 'For urgent medical and emergency needs.'],
                            ['name' => 'Petty Cash Loan', 'max' => 2000, 'term' => '2 months', 'interest' => '2.5%', 'desc' => 'Small amount for immediate needs.'],
                            ['name' => 'Pensioner\'s Pledge Loan', 'max' => 0, 'term' => '0 months', 'interest' => '1.5%', 'desc' => 'Exclusive for senior citizens.'],
                            ['name' => 'Promo Loan', 'max' => 0, 'term' => '0 months', 'interest' => '1%', 'desc' => 'Special low-rate promotion!'],
                        ];
                    @endphp

                    @foreach($loans as $index => $loan)
                        <div class="loans-item" 
                             data-aos="zoom-in" 
                             data-aos-delay="{{ 200 + ($index * 300) }}"
                             onclick="openLoanDetail({{ $index }})">
                            <div class="loan-card">
                                <h3 class="loans-name">{{ $loan['name'] }}</h3>
                                <p class="loan-max">Up to ₱{{ $loan['max'] > 0 ? number_format($loan['max']) : 'Flexible' }}</p>
                                <span class="loan-interest">{{ $loan['interest'] }}/month</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <button class="carousel-btn next-btn" onclick="scrollCarousel(1)" aria-label="Next loans">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </button>
        </div>

        <!-- Loan Detail Overlay (hidden by default) -->
        <div id="loanDetailOverlay" class="loan-detail-overlay">
            <div class="loan-detail-content">
                <button class="close-detail" onclick="closeLoanDetail()">×</button>

                <h2 id="detailTitle" class="detail-title"></h2>
                <p id="detailDesc" class="detail-desc"></p>

                <div class="loan-info-grid">
                    <div><strong>Maximum Amount:</strong> <span id="detailMax"></span></div>
                    <div><strong>Term:</strong> <span id="detailTerm"></span></div>
                    <div><strong>Interest Rate:</strong> <span id="detailInterest"></span></div>
                </div>

                <div class="calculator-section">
                    <h3>Loan Proceeds Calculator</h3>
                    <p style="color: #e74c3c; font-size: 0.95rem; margin-bottom: 15px;">
                        <strong>Note:</strong> The amount of loan proceeds may have deductibles.<br>
                        Final approval and exact net proceeds are subject to the assessment of the head officer.
                    </p>

                    <label for="amount">Enter Desired Amount (₱):</label>
                    <input type="number" id="amount" placeholder="ex. 50000" step="100" min="3000">

                    <button onclick="computeDeductions()">Calculate Net Proceeds</button>

                    <pre id="result"></pre>

                    <div style="margin-top: 20px; padding: 15px; background: #fff8e1; border-radius: 8px; font-size: 0.9rem; color: #856404;">
                        <strong>Important:</strong><br>
                        • The approval of the loan will be based on the assessment of the head officer.<br>
                        • Loan proceeds may be subject to deductions (Service Fee, Filing Fee, Share Capital, and S/D Deduction).<br>
                        • This calculator is for estimation purposes only.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

.loan-detail-overlay {
    display: none;
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0,0,0,0.8);
    z-index: 1000;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.4s ease;
}

.loan-detail-overlay.active {
    display: flex;
    opacity: 1;
}

.loan-detail-content {
    background: white;
    padding: 40px;
    border-radius: 16px;
    max-width: 600px;
    width: 90%;
    max-height: 90vh;
    overflow-y: auto;
    position: relative;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    animation: slideUp 0.5s ease;
}

@keyframes slideUp {
    from { transform: translateY(100px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.close-detail {
    position: absolute;
    top: 15px;
    right: 20px;
    background: none;
    border: none;
    font-size: 2rem;
    cursor: pointer;
    color: #999;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s;
}

.close-detail:hover {
    background: #f0f0f0;
    color: #000;
}

.detail-title {
    margin: 0 0 15px 0;
    font-size: 2rem;
    color: #1a5d1a;
}

.detail-desc {
    color: #555;
    font-size: 1.1rem;
    margin-bottom: 25px;
}

.loan-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
    margin-bottom: 30px;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 10px;
    font-size: 1.1rem;
}

.calculator-section {
    margin-top: 30px;
    padding-top: 30px;
    border-top: 2px solid #eee;
}

.calculator-section h3 {
    margin-bottom: 20px;
    color: #1a5d1a;
}

.calculator-section input {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin: 10px 0;
}

.calculator-section button {
    background: #1a5d1a;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.1rem;
    margin-top: 10px;
}

.calculator-section button:hover {
    background: #146b14;
}

#result {
    background: #f0f7f0;
    padding: 15px;
    border-radius: 8px;
    margin-top: 20px;
    white-space: pre-wrap;
    border-left: 4px solid #1a5d1a;
}
</style>

<script>
    const loanData = @json($loans);


    function scrollCarousel(direction) {
        const wrapper = document.getElementById('loanWrapper');
        const cardWidth = 324; // 300px card + 24px gap
        const scrollAmount = cardWidth * 2; // Show ~2 cards at a time on desktop

        wrapper.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }

    function openLoanDetail(index) {
        const loan = loanData[index];
        document.getElementById('detailTitle').textContent = loan.name;
        document.getElementById('detailDesc').textContent = loan.desc;
        document.getElementById('detailMax').textContent = '₱' + loan.max.toLocaleString();
        document.getElementById('detailTerm').textContent = loan.term;
        document.getElementById('detailInterest').textContent = loan.interest;

        document.getElementById('amount').value = '';
        document.getElementById('result').textContent = '';

        const overlay = document.getElementById('loanDetailOverlay');
        overlay.classList.add('active');

        // ADD THIS LINE — Disable body scroll
        document.body.classList.add('modal-open');
    }

    function closeLoanDetail() {
        const overlay = document.getElementById('loanDetailOverlay');
        overlay.classList.remove('active');

        // REMOVE THIS LINE — Re-enable body scroll
        document.body.classList.remove('modal-open');
    }

    // Your existing calculator (unchanged)
    function computeDeductions() {
        const amount = parseFloat(document.getElementById('amount').value);
        const result = document.getElementById('result');

        if (isNaN(amount) || amount <= 0) {
            result.textContent = "Please enter a valid amount";
            return;
        }

        if (amount < 3000) {
            result.textContent = "Minimum loan amount is ₱3,000";
            return;
        }

        // SERVICE FEE & FIXED FEES
        const serviceFee = amount * 0.02;     // 2%
        const filingFee = 100;                // Fixed
        const shareCapital = amount * 0.03;   // 3%

        // S/D DEDUCTION TABLE (tiered)
        let sdDeduction = 0;

        if (amount >= 3000 && amount <= 4999.99) sdDeduction = 200;
        else if (amount >= 5000 && amount <= 9999.99) sdDeduction = 300;
        else if (amount >= 10000 && amount <= 19999.99) sdDeduction = 400;
        else if (amount >= 20000 && amount <= 29999.99) sdDeduction = 500;
        else if (amount >= 30000 && amount <= 39999.99) sdDeduction = 600;
        else if (amount >= 40000 && amount <= 49999.99) sdDeduction = 700;
        else if (amount >= 50000 && amount <= 59999.99) sdDeduction = 800;
        else if (amount >= 60000 && amount <= 69999.99) sdDeduction = 900;
        else if (amount >= 70000 && amount <= 79999.99) sdDeduction = 1000;
        else if (amount >= 80000 && amount <= 89999.99) sdDeduction = 1100;
        else if (amount >= 90000 && amount <= 99999.99) sdDeduction = 1200;
        else if (amount >= 100000 && amount <= 149999.99) sdDeduction = 1300;
        else if (amount >= 150000 && amount <= 199999.99) sdDeduction = 1400;
        else if (amount >= 200000) sdDeduction = 1500;

        // TOTAL DEDUCTIONS
        const totalDeductions = serviceFee + filingFee + shareCapital + sdDeduction;
        const netAmount = amount - totalDeductions;

        // FORMATTED OUTPUT
        const output = `
Entered Amount: ₱${amount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}
Service Fee (2%): ₱${serviceFee.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}
Filing Fee: ₱${filingFee.toFixed(2)}
Share Capital (3%): ₱${shareCapital.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}
S/D Deduction: ₱${sdDeduction.toFixed(2)}
─────────────────────
Total Deductions: ₱${totalDeductions.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}
Net Proceeds: ₱${netAmount.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})}
        `.trim();

        result.textContent = output;
    }
</script>