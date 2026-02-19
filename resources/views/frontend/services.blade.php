<x-frontend.layout>

    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-hero-content">
                        <h1>{{ $services->hero_title }}</h1>
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
            <div class="row align-items-center">
                <!-- Left Column -->
                <div class="col-12 col-lg-6 pe-lg-5">
                    <div class="services-label">{{ $services->services_label }}</div>
                    <h2 class="services-title">{{ $services->services_title }}</h2>

                    <div class="mt-4 mt-lg-5">
                        <!-- Service 1 -->
                        <div class="services-item active" onclick="showServices('emergency')">
                            <span class="services-arrow">→</span>
                            <span class="services-text">{{ $services->service_1_name }}</span>
                        </div>

                        <!-- Service 2 -->
                        <div class="services-item" onclick="showServices('pipe')">
                            <span class="services-arrow">→</span>
                            <span class="services-text">{{ $services->service_2_name }}</span>
                        </div>

                        <!-- Service 3 -->
                        <div class="services-item" onclick="showServices('drain')">
                            <span class="services-arrow">→</span>
                            <span class="services-text">{{ $services->service_3_name }}</span>
                        </div>

                        <!-- Service 4 -->
                        <div class="services-item" onclick="showServices('water')">
                            <span class="services-arrow">→</span>
                            <span class="services-text">{{ $services->service_4_name }}</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-12 col-lg-6">
                    <!-- Service 1 -->
                    <div class="services-image services-image-emergency active">
                        <img src="{{ asset('frontend/images/' . $services->service_1_image) }}"
                            alt="{{ $services->service_1_name }}">
                        <div class="services-overlay">
                            <div class="services-overlay-title">{{ $services->service_1_title }}</div>
                            <div class="services-overlay-text">{{ $services->service_1_description }}</div>
                            <a href="{{ route('frontend.serviceDetails') }}" class="services-learn-btn">Learn More</a>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="services-image services-image-pipe">
                        <img src="{{ asset('frontend/images/' . $services->service_2_image) }}"
                            alt="{{ $services->service_2_name }}">
                        <div class="services-overlay">
                            <div class="services-overlay-title">{{ $services->service_2_title }}</div>
                            <div class="services-overlay-text">{{ $services->service_2_description }}</div>
                            <a href="{{ route('frontend.serviceDetails') }}" class="services-learn-btn">Learn More</a>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="services-image services-image-drain">
                        <img src="{{ asset('frontend/images/' . $services->service_3_image) }}"
                            alt="{{ $services->service_3_name }}">
                        <div class="services-overlay">
                            <div class="services-overlay-title">{{ $services->service_3_title }}</div>
                            <div class="services-overlay-text">{{ $services->service_3_description }}</div>
                            <a href="{{ route('frontend.serviceDetails') }}" class="services-learn-btn">Learn More</a>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="services-image services-image-water">
                        <img src="{{ asset('frontend/images/' . $services->service_4_image) }}"
                            alt="{{ $services->service_4_name }}">
                        <div class="services-overlay">
                            <div class="services-overlay-title">{{ $services->service_4_title }}</div>
                            <div class="services-overlay-text">{{ $services->service_4_description }}</div>
                            <a href="{{ route('frontend.serviceDetails') }}" class="services-learn-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.contact :contact="$contact" />

    <x-frontend.cta :cta="$cta" />

</x-frontend.layout>