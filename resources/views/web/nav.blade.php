<!-- header style two start -->
<header class="header-style-two header--sticky">
    <div class="header-wrapper-main">
        <a href="{{ route('index') }}" class="logo">
            <img src="{{ asset('/web/assets/images/logo/aurega-dark-logo.webp') }}" alt="logo">
        </a>
        <div class="header-right">
            <div class="nav-area-center">
                <nav class="navigation">
                    <ul class="parent-ul">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('property') }}">Property</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <!--<li><a href="{{ route('contact') }}">Contact Us</a></li>-->
                    </ul>
                </nav>
            </div>
            <a href="{{ route('contact') }}" class="rts-btn btn-border">Contact Us<i class="fa-regular fa-arrow-right"></i></a>
            <div class="action-area">
                <div class="menu-icon" id="menu-btn">
                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 1.34375C0 0.886719 0.351562 0.5 0.84375 0.5H14.9062C15.3633 0.5 15.75 0.886719 15.75 1.34375C15.75 1.83594 15.3633 2.1875 14.9062 2.1875H0.84375C0.351562 2.1875 0 1.83594 0 1.34375ZM0 6.96875C0 6.51172 0.351562 6.125 0.84375 6.125H10.4062C10.8633 6.125 11.25 6.51172 11.25 6.96875C11.25 7.46094 10.8633 7.8125 10.4062 7.8125H0.84375C0.351562 7.8125 0 7.46094 0 6.96875ZM5.90625 13.4375H0.84375C0.351562 13.4375 0 13.0859 0 12.5938C0 12.1367 0.351562 11.75 0.84375 11.75H5.90625C6.36328 11.75 6.75 12.1367 6.75 12.5938C6.75 13.0859 6.36328 13.4375 5.90625 13.4375Z" fill="#30373E" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header style two end -->