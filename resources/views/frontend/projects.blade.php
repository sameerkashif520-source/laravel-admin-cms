<x-frontend.layout>

    <!-- ===== HERO SECTION ===== -->
    <section class="about-hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-hero-content">
                        <h1>{{ $projects->hero_title_line1 }}<br>{{ $projects->hero_title_line2 }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section py-5" id="projects">
        <div class="container px-3 px-md-5">

            <!-- Project 1 -->
            <div class="row project-card align-items-center">
                <div class="col-lg-6 order-lg-1 mb-3 mb-lg-0">
                    <h2 class="project-title">{{ $projects->project_1_title }}</h2>
                    <p class="project-description">{{ $projects->project_1_description }}</p>

                    <ul class="services-list">
                        <li><strong>Location:</strong> {{ $projects->project_1_location }}</li>
                        <li><strong>Project Type:</strong> {{ $projects->project_1_type }}</li>
                        <li><strong>Scope of Work:</strong> {{ $projects->project_1_scope }}</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <a class="project-image">
                        <img src="{{ asset('frontend/images/' . $projects->project_1_image) }}"
                            alt="{{ $projects->project_1_title }}">
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="row project-card align-items-center">
                <div class="col-lg-6">
                    <a class="project-image">
                        <img src="{{ asset('frontend/images/' . $projects->project_2_image) }}"
                            alt="{{ $projects->project_2_title }}">
                    </a>
                </div>
                <div class="col-lg-6 ps-lg-4">
                    <h2 class="project-title">{{ $projects->project_2_title }}</h2>
                    <p class="project-description">{{ $projects->project_2_description }}</p>

                    <ul class="services-list">
                        <li><strong>Location:</strong> {{ $projects->project_2_location }}</li>
                        <li><strong>Project Type:</strong> {{ $projects->project_2_type }}</li>
                        <li><strong>Scope of Work:</strong> {{ $projects->project_2_scope }}</li>
                    </ul>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="row project-card align-items-center">
                <div class="col-lg-6 order-lg-1 mb-3 mb-lg-0">
                    <h2 class="project-title">{{ $projects->project_3_title }}</h2>
                    <p class="project-description">{{ $projects->project_3_description }}</p>

                    <ul class="services-list">
                        <li><strong>Location:</strong> {{ $projects->project_3_location }}</li>
                        <li><strong>Project Type:</strong> {{ $projects->project_3_type }}</li>
                        <li><strong>Scope of Work:</strong> {{ $projects->project_3_scope }}</li>
                    </ul>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <a class="project-image">
                        <img src="{{ asset('frontend/images/' . $projects->project_3_image) }}"
                            alt="{{ $projects->project_3_title }}">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.cta :cta="$cta" />

</x-frontend.layout>