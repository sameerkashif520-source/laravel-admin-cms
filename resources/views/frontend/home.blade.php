<x-frontend.layout>
    <!-- Hero Section -->
    <section class="hero-section" id="home"
        style="background-image: url({{ asset('frontend/images/' . $home->hero_bg_image) }})">
        <div class="overlay">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-6 col-md-12 hero-content">
                        <h1 class="hero-title">{{ $home->hero_title }}</h1>
                        <p class="hero-subtitle">{{ $home->hero_subtitle }}</p>

                        <div class="hero-description">
                            <p>{{ $home->hero_description }}</p>
                        </div>

                        <button class="btn btn-get-started">{{ $home->hero_button_text }}</button>
                    </div>

                    <!-- Right Content - Engineer Image & Stats -->
                    <div class="col-lg-6 col-md-12 hero-image-section">
                        <div class="engineer-image-wrapper">
                            <div class="engineer-placeholder">
                                <img src="{{ asset('frontend/images/' . $home->hero_engineer_image) }}" alt="Engineer">
                            </div>
                        </div>

                        <!-- Floating Stats Cards -->
                        <div class="stat-card stat-card-24hrs">
                            <div class="stat-number">{{ $home->stat_1_number }}</div>
                            <div class="stat-label">{{ $home->stat_1_label }}</div>
                        </div>

                        <div class="stat-card stat-card-500">
                            <div class="stat-number">{{ $home->stat_2_number }}</div>
                            <div class="stat-label">{{ $home->stat_2_label }}</div>
                        </div>

                        <div class="stat-card stat-card-98">
                            <div class="stat-number">{{ $home->stat_3_number }}</div>
                            <div class="stat-label">{{ $home->stat_3_label }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="solutions-wrapper" id="solutions">
        <div class="container px-4 px-lg-5">
            <!-- Section Header -->
            <div class="solutions-header-block">
                <h2 class="solutions-main-title">{{ $home->solutions_title }}</h2>
                <p class="solutions-intro-text">{{ $home->solutions_subtitle }}</p>
            </div>

            <!-- Solutions Cards Grid -->
            <div class="row g-4">
                <!-- Card 1 - Cost Estimation -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a class="a-card-wrapper" href="{{ route('frontend.serviceDetails') }}">
                        <div class="card-wrapper">
                            <div class="icon-wrapper">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <rect x="4" y="2" width="16" height="20" rx="2" />
                                    <path d="M8 6h8M8 10h8M8 14h8M8 18h4" />
                                </svg>
                            </div>
                            <h5 class="card-title">{{ $home->card_1_title }}</h5>
                            <p class="card-description">{{ $home->card_1_description }}</p>
                            <div class="tools-section">
                                <h6>Tools We Use:</h6>
                                <div class="tools-grid">
                                    @foreach(explode(',', $home->card_1_tools) as $tool)
                                        <span class="tool-badge">{{ trim($tool) }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 - Structural Design -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a class="a-card-wrapper" href="{{ route('frontend.serviceDetails') }}">
                        <div class="card-wrapper">
                            <div class="icon-wrapper">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <rect x="4" y="2" width="16" height="20" rx="2" />
                                    <path d="M8 6h8M8 10h8M8 14h8M8 18h4" />
                                </svg>
                            </div>
                            <h5 class="card-title">{{ $home->card_2_title }}</h5>
                            <p class="card-description">{{ $home->card_2_description }}</p>
                            <div class="tools-section">
                                <h6>Tools We Use:</h6>
                                <div class="tools-grid">
                                    <span class="tool-badge">ETABS</span>
                                    <span class="tool-badge">STAAD.Pro</span>
                                    <span class="tool-badge">RAM Structural System</span>
                                    <span class="tool-badge">RISA-3D</span>
                                    <span class="tool-badge">Tekla Structures</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 - Structural Analysis -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a class="a-card-wrapper" href="{{ route('frontend.serviceDetails') }}">
                        <div class="card-wrapper">
                            <div class="icon-wrapper">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <rect x="4" y="2" width="16" height="20" rx="2" />
                                    <path d="M8 6h8M8 10h8M8 14h8M8 18h4" />
                                </svg>
                            </div>
                            <h5 class="card-title">{{ $home->card_3_title }}</h5>
                            <p class="card-description">{{ $home->card_3_description }}</p>
                            <div class="tools-section">
                                <h6>Tools We Use:</h6>
                                <div class="tools-grid">
                                    <span class="tool-badge">SAP2000</span>
                                    <span class="tool-badge">SAFE</span>
                                    <span class="tool-badge">ETABS</span>
                                    <span class="tool-badge">ANSYS</span>
                                    <span class="tool-badge">ABAQUS</span>
                                    <span class="tool-badge">Robot Structural Analysis</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 4 - BIM Services -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a class="a-card-wrapper" href="{{ route('frontend.serviceDetails') }}">
                        <div class="card-wrapper">
                            <div class="icon-wrapper">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <rect x="4" y="2" width="16" height="20" rx="2" />
                                    <path d="M8 6h8M8 10h8M8 14h8M8 18h4" />
                                </svg>
                            </div>
                            <h5 class="card-title">{{ $home->card_4_title }}</h5>
                            <p class="card-description">{{ $home->card_4_description }}</p>
                            <div class="tools-section">
                                <h6>Tools We Use:</h6>
                                <div class="tools-grid">
                                    <span class="tool-badge">Autodesk Revit</span>
                                    <span class="tool-badge">Navisworks</span>
                                    <span class="tool-badge">AutoCAD</span>
                                    <span class="tool-badge">BIM 360</span>
                                    <span class="tool-badge">Tekla Structures</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 5 - Quality Assurance -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-wrapper">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="4" y="2" width="16" height="20" rx="2" />
                                <path d="M8 6h8M8 10h8M8 14h8M8 18h4" />
                            </svg>
                        </div>
                        <h5 class="card-title">{{ $home->card_5_title }}</h5>
                        <p class="card-description">{{ $home->card_5_description }}</p>
                    </div>
                </div>

                <!-- Card 6 - Expert Team -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card-wrapper">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <rect x="4" y="2" width="16" height="20" rx="2" />
                                <path d="M8 6h8M8 10h8M8 14h8M8 18h4" />
                            </svg>
                        </div>
                        <h5 class="card-title">{{ $home->card_6_title }}</h5>
                        <p class="card-description">{{ $home->card_6_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="feature-header">
                        <h2>{{ $home->learn_more_title }}</h2>
                        <p>{{ $home->learn_more_subtitle }}</p>
                    </div>

                    <div class="toggle-nav">
                        <a href="#" class="toggle-btn active" data-section="section-1">{{ $home->tab_1_title }}</a>
                        <a href="#" class="toggle-btn" data-section="section-2">{{ $home->tab_2_title }}</a>
                    </div>
                </div>
            </div>

            <!-- Section 1 -->
            <div id="section-1" class="content-section active">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-title-block">
                            <h3>{{ $home->process_title }}</h3>
                            <p>{{ $home->process_subtitle }}</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Step 1 -->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-badge-num">{{ $home->step_1_number }}</div>
                            <div class="feature-icon-box">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h5>{{ $home->step_1_title }}</h5>
                            <p>{{ $home->step_1_description }}</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-badge-num">{{ $home->step_2_number }}</div>
                            <div class="feature-icon-box">
                                <i class="fas fa-search"></i>
                            </div>
                            <h5>{{ $home->step_2_title }}</h5>
                            <p>{{ $home->step_2_description }}</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-badge-num">{{ $home->step_3_number }}</div>
                            <div class="feature-icon-box">
                                <i class="fas fa-pen"></i>
                            </div>
                            <h5>{{ $home->step_3_title }}</h5>
                            <p>{{ $home->step_3_description }}</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="feature-item">
                            <div class="feature-badge-num">{{ $home->step_4_number }}</div>
                            <div class="feature-icon-box">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>{{ $home->step_4_title }}</h5>
                            <p>{{ $home->step_4_description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div id="section-2" class="content-section">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-title-block">
                            <h3>Case Studies</h3>
                            <p>Explore our portfolio of successful engineering projects across various sectors</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frontend.cta :cta='$cta' />
    <x-frontend.contact :contact='$contact' />

</x-frontend.layout>