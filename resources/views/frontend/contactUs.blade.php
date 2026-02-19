<x-frontend.layout>
    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-hero-content">
                        <h1>{{ $contactUs->hero_title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ===== CONTACT SECTION ===== -->
    <section class="contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6">
                    <div class="contact-left">
                        <span class="services-label">{{ $contactUs->label }}</span>
                        <h2>{{ $contactUs->heading }}</h2>
                        <p>{{ $contactUs->description }}</p>

                        <div class="contact-support-center">
                            <img src="{{ asset('frontend/images/' . $contactUs->support_image) }}">
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="info-item">
                                    <h4>{{ $contactUs->info_title_1 }}</h4>
                                    <p>{{ $contactUs->info_text_1 }}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-item">
                                    <h4>{{ $contactUs->info_title_2 }}</h4>
                                    <p>{{ $contactUs->info_text_2 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12 col-lg-6">
                    <div class="contact-right">
                        {{-- USER CONTACT FORM - NOT CMS --}}
                        <form id="contactForm" novalidate>
                            <div class="row gy-4">
                                <div class="col-12">
                                    <input type="text" class="form-control" id="fullName" placeholder="*Full name"
                                        required>
                                </div>

                                <div class="col-12">
                                    <input type="email" class="form-control" id="email" placeholder="*Email address"
                                        required>
                                </div>

                                <div class="col-12">
                                    <input type="tel" class="form-control" id="phone" placeholder="*Phone number"
                                        required>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" id="message"
                                        placeholder="Write message..."></textarea>
                                </div>

                                <div class="col-12 my-3">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label for="terms">Accept terms and conditions from Envero.</label>
                                </div>

                                <div class="col-12 d-lg-flex">
                                    <button type="submit" class="submit-btn">Send Message</button>
                                    <div class="arrow-icon">→</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend.layout>