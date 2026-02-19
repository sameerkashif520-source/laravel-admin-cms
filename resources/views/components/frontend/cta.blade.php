<section class="cta-section">
    <div class="container">
        <div class="cta-container">
            <div class="cta-content">
                <!-- Headline -->
                <div class="cta-headline">
                    <h2>{{ $cta->heading }}</h2>
                    <p>{{ $cta->description }}</p>
                </div>

                <!-- Buttons -->
                <div class="cta-buttons">
                    <button class="cta-btn cta-btn-primary">
                        {{ $cta->primary_button_text }}
                    </button>
                    <a href="tel:+15551234567" class="cta-btn cta-btn-secondary">
                        <i class="fas fa-phone"></i>
                        {{ $cta->secondary_button_text }}
                    </a>
                </div>

                <!-- Footer Info -->
                <div class="cta-footer-info">
                    <div class="cta-contact-detail">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@engineeringsolutions.com">{{ $cta->email }}</a>
                    </div>
                    <div class="cta-contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>{{ $cta->availability }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>