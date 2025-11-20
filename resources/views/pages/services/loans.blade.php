<section class="loans" id="loans">
    <div class="loans-content">
        <div class="loans-header">
            <h2 class="loans-title">Loans</h2>
            <p class="loans-description">
                Access a variety of loan products with competitive rates and flexible terms to meet your needs.
            </p>
        </div>

        <!-- Loan Carousel -->
        <div class="loans-carousel" id="loanCarousel">
            <button class="carousel-btn prev" onclick="scrollCarousel(-1)">&#10094;</button>

            <div class="loans-wrapper" id="loanWrapper">
                @php
                    $loans = [
                        ['name' => 'Productive Loan', 'max' => 500000, 'term' => '12-36 months', 'interest' => '1.5% per month', 'desc' => 'For business expansion and capital needs.'],
                        ['name' => 'Providential Loan', 'max' => 300000, 'term' => '6-24 months', 'interest' => '1.8% per month', 'desc' => 'Multi-purpose emergency loan.'],
                        ['name' => 'Educational Loan', 'max' => 200000, 'term' => '12 months', 'interest' => '1.2% per month', 'desc' => 'For tuition and school-related expenses.'],
                        ['name' => 'Business Car Loan', 'max' => 2000000, 'term' => '24-60 months', 'interest' => '1.3% per month', 'desc' => 'Finance your business vehicle.'],
                        ['name' => 'Motorcycle Loan', 'max' => 150000, 'term' => '12-24 months', 'interest' => '2% per month', 'desc' => 'Get your dream bike with easy terms.'],
                        ['name' => 'Jewelry Pledge Loan', 'max' => 1000000, 'term' => '3-12 months', 'interest' => '2.5% per month', 'desc' => 'Instant cash using jewelry as collateral.'],
                        ['name' => 'Medical/Emergency Loan', 'max' => 100000, 'term' => '6-12 months', 'interest' => '1.5% per month', 'desc' => 'For urgent medical and emergency needs.'],
                        ['name' => 'Petty Cash Loan', 'max' => 50000, 'term' => '3-6 months', 'interest' => '2% per month', 'desc' => 'Small amount for immediate needs.'],
                        ['name' => 'Pensioner\'s Pledge Loan', 'max' => 200000, 'term' => '12 months', 'interest' => '1.8% per month', 'desc' => 'Exclusive for senior citizens.'],
                        ['name' => 'Promo Loan', 'max' => 300000, 'term' => '12-24 months', 'interest' => '1% per month (limited time)', 'desc' => 'Special low-rate promotion!'],
                    ];
                @endphp

                @foreach($loans as $index => $loan)
                    <div class="loans-item" onclick="openLoanDetail({{ $index }})" style="cursor: pointer;">
                        <h3 class="loans-name">{{ $loan['name'] }}</h3>
                    </div>
                @endforeach
            </div>

            <button class="carousel-btn next" onclick="scrollCarousel(1)">&#10095;</button>
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
                    <h3>Loan Calculator</h3>
                    <label for="amount">Enter Desired Amount (₱):</label>
                    <input type="number" id="amount" placeholder="ex. 50000" step="1000" min="10000">
                    <button onclick="computeDeductions()">Calculate Net Proceeds</button>

                    <pre id="result"></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Existing CSS remains unchanged, just adding new styles */

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
    font-family: monospace;
    border-left: 4px solid #1a5d1a;
}
</style>

<script>
// Loan data (must match the PHP array above)
const loanData = @json($loans);

function scrollCarousel(direction) {
    const wrapper = document.getElementById('loanWrapper');
    const scrollAmount = 320;
    wrapper.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
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

    document.getElementById('loanDetailOverlay').classList.add('active');
}

function closeLoanDetail() {
    document.getElementById('loanDetailOverlay').classList.remove('active');
    setTimeout(() => {
        document.getElementById('loanCarousel').style.display = 'block';
    }, 400);
}

// Your existing calculator (unchanged)
function computeDeductions() {
    const amount = parseFloat(document.getElementById('amount').value);
    const result = document.getElementById('result');

    if (isNaN(amount) || amount <= 0) {
        result.textContent = "Please enter a valid amount";
        return;
    }

    const serviceFee = amount * 0.02;
    const filingFee = 100;
    const shareCapital = amount * 0.03;

    const totalDeductions = serviceFee + filingFee + shareCapital;
    const netAmount = amount - totalDeductions;

    const output = `
Entered Amount:     ₱${amount.toLocaleString('en-US', {minimumFractionDigits: 2})}
Service Fee (2%):   ₱${serviceFee.toLocaleString('en-US', {minimumFractionDigits: 2})}
Filing Fee:         ₱${filingFee.toLocaleString('en-US', {minimumFractionDigits: 2})}
Share Capital (3%): ₱${shareCapital.toLocaleString('en-US', {minimumFractionDigits: 2})}
Net Proceeds:       ₱${netAmount.toLocaleString('en-US', {minimumFractionDigits: 2})}
    `;

    result.textContent = output;
}
</script>