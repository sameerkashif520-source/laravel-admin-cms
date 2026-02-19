<footer>

    <div class="footer-top">
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-section-brand">
                <div class="footer-logo"><img src="{{ asset('frontend/images/footerlogomultiple.png') }}"></div>
                <div class="footer-tagline">Since 2001</div>
                <p class="footer-copyright">Comprehensive engineering solutions including estimation, structural
                    design, analysis, and BIM services.</p>
            </div>

            <!-- Services Section -->
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li><a href="{{ route('frontend.serviceDetails') }}">Cost Estimation</a></li>
                    <li><a href="{{ route('frontend.serviceDetails') }}">Structural Design</a></li>
                    <li><a href="{{ route('frontend.serviceDetails') }}">Structural Analysis</a></li>
                    <li><a href="{{ route('frontend.serviceDetails') }}">BIM Drawing</a></li>
                </ul>
            </div>

            <!-- Company Section -->
            <div class="footer-section">
                <h3>Company</h3>
                <ul>
                    <li><a href="{{ route('frontend.about') }}">About Us</a></li>
                    <li><a href="{{ route('frontend.services') }}">Services</a></li>
                    <li><a href="{{ route('frontend.projects') }}">Projects</a></li>
                    <li><a href="{{ route('frontend.faq') }}">FAQ's</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="footer-section">
                <h3>Contact</h3>
                <ul>
                    <li><a href="tel:+15551234567">(555) 123-4567</a></li>
                    <li><a href="mailto:info@engineerpro.com">info@engineerpro.com</a></li>
                    <li>456 Engineering Plaza</li>
                    <li>Tech City, TC 67890</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <p>&copy; ENVERO 2025. All rights reserved.</p>
        </div>
        <div class="footer-divider"></div>
    </div>
</footer>