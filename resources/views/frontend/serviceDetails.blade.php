<x-frontend.layout>

    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-hero-content">
                        <h1>{{ $details->hero_title }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- =====SERVICES SECTION===== -->
    <section class="bg-light py-5">
        <div class="container">
            <!-- Back Button -->
            <div class="row">
                <div class="col-2">
                    <a href="{{ route('frontend.services') }}" class="go-back-link">
                        <span>Go Back</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Service Image and Form Section -->
            <div class="row align-items-start gap-4 gap-lg-0">
                <div class="col-12">
                    <div class="service-image-container">
                        <img src="{{ asset('frontend/images/' . $details->hero_image) }}"
                            alt="{{ $details->hero_title }}">
                    </div>

                    <h2 class="service-heading">{{ $details->main_heading }}</h2>
                    <p class="service-description">{{ $details->main_description }}</p>

                    <h2 class="subheading">{{ $details->subheading_1 }}</h2>
                    <p class="service-description">{{ $details->subheading_1_desc }}</p>

                    <!-- 6 Features -->
                    <h4 class="subheading">{{ $details->feature_1_title }}</h4>
                    <p class="service-description">{{ $details->feature_1_desc }}</p>

                    <h4 class="subheading">{{ $details->feature_2_title }}</h4>
                    <p class="service-description">{{ $details->feature_2_desc }}</p>

                    <h4 class="subheading">{{ $details->feature_3_title }}</h4>
                    <p class="service-description">{{ $details->feature_3_desc }}</p>

                    <h4 class="subheading">{{ $details->feature_4_title }}</h4>
                    <p class="service-description">{{ $details->feature_4_desc }}</p>

                    <h4 class="subheading">{{ $details->feature_5_title }}</h4>
                    <p class="service-description">{{ $details->feature_5_desc }}</p>

                    <h4 class="subheading">{{ $details->feature_6_title }}</h4>
                    <p class="service-description">{{ $details->feature_6_desc }}</p>

                    <h3 class="subheading">{{ $details->why_choose_heading }}</h3>
                    <ul class="services-list">
                        <li><strong>{{ $details->why_choose_point_1 }}</strong></li>
                        <li><strong>{{ $details->why_choose_point_2 }}</strong></li>
                        <li><strong>{{ $details->why_choose_point_3 }}</strong></li>
                        <li><strong>{{ $details->why_choose_point_4 }}</strong></li>
                        <li><strong>{{ $details->why_choose_point_5 }}</strong></li>
                    </ul>

                    <h3 class="subheading">{{ $details->industries_heading }}</h3>
                    <ul class="services-list">
                        <li><strong>{{ $details->industry_1 }}</strong></li>
                        <li><strong>{{ $details->industry_2 }}</strong></li>
                        <li><strong>{{ $details->industry_3 }}</strong></li>
                        <li><strong>{{ $details->industry_4 }}</strong></li>
                    </ul>

                    <h3 class="subheading">{{ $details->trusted_heading }}</h3>
                    <p class="services-description">{{ $details->trusted_description }}</p>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.cta :cta="$cta" />

</x-frontend.layout>