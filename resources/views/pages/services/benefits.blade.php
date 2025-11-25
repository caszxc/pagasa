<section class="benefits" id="benefits">
    <div class="benefits-content">
        <div class="benefits-hex-grid">
            <div class="hex-row">
                <div class="hex-wrapper">
                    <div class="hex active" 
                         data-title="Annual Dividend on Share Capital" 
                         data-text="Your investment grows every year through shared earnings.">
                        <img src="{{asset('images/icons/share-capital-icon.png')}}">
                    </div>
                </div>
                <div class="hex-wrapper">
                    <div class="hex" 
                         data-title="Patronage Refund" 
                         data-text="The more you avail of our services, the greater your reward.">
                        <img src="{{asset('images/icons/patronage-refund-icon.png')}}">
                    </div>
                </div>
            </div>
            <div class="hex-row">
                <div class="hex-wrapper">
                    <div class="hex" 
                         data-title="Savings and Time Deposit" 
                         data-text="Earn guaranteed interest with tax-free savings options.">
                        <img src="{{asset('images/icons/savings-icon.png')}}">
                    </div>
                </div>

                <div class="benefits-info">
                    <h3 class="benefit-title">Share Capital</h3>
                    <p class="benefit-description">
                        Build ownership in the cooperative through your share contributions.
                    </p>
                </div>
            </div>
            <div class="hex-row">
                <div class="hex-wrapper">
                    <div class="hex" 
                         data-title="Comprehensive Group Life Insurance" 
                         data-text="Enjoy peace of mind knowing you and your family are protected.">
                        <img src="{{asset('images/icons/insurance-icon.png')}}">
                    </div>
                </div>
                <div class="hex-wrapper">
                    <div class="hex" 
                         data-title="Member Assistance" 
                         data-text="Receive care and support during times of need from your cooperative community.">
                        <img src="{{asset('images/icons/helping-hands-icon.png')}}">
                    </div>
                </div>
            </div>
        </div>

        <div class="benefits-text">
            <h2 class="benefits-title">Benefits</h2>
            <p class="benefits-description">
                Enjoy exclusive rewards and protections as a valued member of our cooperative.
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const hexes = document.querySelectorAll('.hex');
    const benefitsInfo = document.querySelector('.benefits-info');
    const benefitTitle = benefitsInfo.querySelector('.benefit-title');
    const benefitDesc = benefitsInfo.querySelector('.benefit-description');

    hexes.forEach(hex => {
        hex.addEventListener('click', function () {
            // Remove active class from all hexes
            hexes.forEach(h => h.classList.remove('active'));
            
            // Add active to clicked one
            this.classList.add('active');

            // Update info text
            const title = this.getAttribute('data-title');
            const text = this.getAttribute('data-text');

            benefitTitle.textContent = title;
            benefitDesc.textContent = text;

            // Show the info with smooth fade
            benefitsInfo.classList.add('show');
        });
    });

    // Optional: Show first one on load
    const firstHex = document.querySelector('.hex.active');
    if (firstHex) firstHex.click();
});
</script>