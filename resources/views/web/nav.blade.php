<!-- Start Navbar Area -->
<nav class="navbar navbar-expand-xl" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('/web/assets/images/aurega-dark-logo.webp') }}" alt="Aurega Real Estate Logo">
        </a>
        <form class="search-form">
            <input type="search" class="search-field" placeholder="Search property">
            <button type="submit">
                <i class="ri-search-line"></i>
            </button>
        </form>
        <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
            <span class="burger-menu">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
                </li>
            </ul>
            <div class="others-option d-flex align-items-center">
                <div class="option-item">
                    <div class="user-info">
                        <a href="{{ route('index') }}">Log In / Register</a>
                    </div>
                </div>
                <div class="option-item">
                    <a href="{{ route('contact') }}" class="default-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar Area -->

<!-- Start Responsive Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="index.html" class="logo d-inline-block">
            <img src="{{ asset('/web/assets/images/logo.png') }}" alt="logo">
        </a>
        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="close-btn">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('index') }}">
                    Home
                </a>
            </div>
            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('about') }}">
                    About Us
                </a>
            </div>
            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('blog') }}">
                    Blog
                </a>
            </div>
            <div class="accordion-item">
                <a class="accordion-button without-icon" href="{{ route('contact') }}">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="others-option">
            <div class="option-item">
                <div class="user-info">
                    <a href="my-account.html">Log In / Register</a>
                </div>
            </div>
            <div class="option-item">
                <a href="contact-us.html" class="default-btn">Contact Us</a>
            </div>
            <div class="option-item">
                <form class="search-form">
                    <input type="search" class="search-field" placeholder="Search property">
                    <button type="submit">
                        <i class="ri-search-line"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Responsive Navbar Area -->