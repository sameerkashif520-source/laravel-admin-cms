<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <div class="brand">
                <div class="brand-icon">
                    <i class="fas fa-cube"></i>
                </div>
                <div>
                    <div class="brand-text">ENVERO</div>
                    <div class="brand-subtitle">Content Management</div>
                </div>
            </div>
        </a>
    </div>

    <nav class="sidebar-nav">
        <div class="nav-section">
            <div class="nav-section-title">Main Menu</div>
            <ul class="nav-menu">

                <!-- Components Dropdown -->
                <li class="nav-item">
                    <div class="nav-link" onclick="toggleDropdown('components-dropdown')">
                        <i class="fas fa-puzzle-piece"></i>
                        <span>Components</span>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                    <ul class="dropdown-menu" id="components-dropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('admin.cta') }}" class="dropdown-link">
                                <i class="fas fa-bullhorn"></i>
                                <span>CTA</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.contact') }}" class="dropdown-link">
                                <i class="fas fa-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Website Pages Dropdown -->
                <li class="nav-item">
                    <div class="nav-link" onclick="toggleDropdown('pages-dropdown')">
                        <i class="fas fa-file-alt"></i>
                        <span>Website Pages</span>
                        <i class="fas fa-chevron-right arrow"></i>
                    </div>
                    <ul class="dropdown-menu" id="pages-dropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('admin.home') }}"
                                class="dropdown-link {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.about') }}"
                                class="dropdown-link {{ request()->routeIs('admin.about') ? 'active' : '' }}">
                                <i class="fas fa-info-circle"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.services') }}"
                                class="dropdown-link {{ request()->routeIs('admin.services') ? 'active' : '' }}">
                                <i class="fas fa-cogs"></i>
                                <span>Services</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.projects') }}"
                                class="dropdown-link {{ request()->routeIs('admin.projects') ? 'active' : '' }}">
                                <i class="fas fa-project-diagram"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.faq') }}"
                                class="dropdown-link {{ request()->routeIs('admin.faq') ? 'active' : '' }}">
                                <i class="fas fa-question-circle"></i>
                                <span>FAQ's</span>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.contact.us') }}"
                                class="dropdown-link {{ request()->routeIs('admin.contact.us') ? 'active' : '' }}">
                                <i class="fas fa-address-book"></i>
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>

    <div class="sidebar-footer">
        <button type="button" class="logout-btn" onclick="logoutConfirmation()">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </button>
    </div>

    <form id="logoutForm" method="POST" action="{{ route('admin.logout') }}">
        @csrf
    </form>
</aside>