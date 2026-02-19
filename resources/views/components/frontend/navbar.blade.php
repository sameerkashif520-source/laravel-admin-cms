<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('frontend.home') }}"> <img
                src="{{ asset('frontend/images/footerlogomultiple.png') }}"></a>

        <!-- Offcanvas Toggler Button - Only visible on mobile/tablet -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Menu - Only visible on mobile/tablet -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand fw-bold fs-4" href="{{ route('frontend.home') }}"> <img
                        src="{{ asset('frontend/images/footerlogomultiple.png') }}"></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('frontend.home') }}"
                            data-bs-dismiss="offcanvas">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.about') }}" data-bs-dismiss="offcanvas">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.services') }}"
                            data-bs-dismiss="offcanvas">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.projects') }}"
                            data-bs-dismiss="offcanvas">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.faq') }}" data-bs-dismiss="offcanvas">FAQ's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.contactUs') }}"
                            data-bs-dismiss="offcanvas">Contact</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="btn btn-outline-light btn-sm quote-btn w-100" href="#quote"
                            data-bs-dismiss="offcanvas">Get a quote <i class="fas fa-arrow-right ms-2"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Desktop Navigation - Only visible on large screens and above -->
        <div class="navbar-nav-desktop ms-auto d-none d-lg-flex align-items-center">
            <a class="nav-link active" href="{{ route('frontend.home') }}">Home</a>
            <a class="nav-link" href="{{ route('frontend.about') }}">About Us</a>
            <a class="nav-link" href="{{ route('frontend.services') }}">Services</a>
            <a class="nav-link" href="{{ route('frontend.projects') }}">Projects</a>
            <a class="nav-link" href="{{ route('frontend.faq') }}">FAQ's</a>
            <a class="nav-link" href="{{ route('frontend.contactUs') }}">Contact</a>
            <a class="btn btn-outline-light btn-sm quote-btn ms-3" href="#quote">Get a quote <i
                    class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</nav>