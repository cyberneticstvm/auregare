<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link of CSS Files -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/scrollCue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/responsive.css') }}">

    <title>Aurega - Real Estate</title>

    <link rel="icon" type="image/png" href="{{ asset('/web/assets/images/favicon.png') }}">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader-area text-center position-fixed top-0 bottom-0 start-0 end-0" id="preloader">
        <div class="loader position-absolute start-0 end-0">
            <img src="{{ asset('/web/assets/images/favicon.png') }}" alt="favicon">
            <div class="waviy position-relative">
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">U</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">E</span>
                <span class="d-inline-block">G</span>
                <span class="d-inline-block">A</span>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class="top-header-area">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-md-7">
                    <ul class="top-header-info-with-social">
                        <li>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-x-line"></i>
                                </a>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                                <a href="https://bd.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="mail-info">
                                <i class="ri-mail-line"></i>
                                <a href="mailto:are@auregagroup.com">are@auregagroup.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-5 text-end">
                    <div class="top-header-call-info">
                        <i class="ri-phone-line"></i>
                        <a href="tel:+971506258760">+971 50 625 8760</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    @include("web.nav")
    @yield("content")

    <!-- Start Footer Area -->
    <footer class="footer-area pt-120">
        <div class="container">
            <div class="row justify-content-center" data-cues="slideInUp">
                <div class="col-xl-3 col-md-12">
                    <div class="single-footer-widget pe-3">
                        <div class="widget-logo">
                            <a href="index.html">
                                <img src="{{ asset('/web/assets/images/aurega-logo-transparent.png') }}" width="60%" alt="Aurega Real Estate Logo">
                            </a>
                        </div>
                        <p>To be the leading real estate advisory firm in Dubai, renowned for our integrity, innovation, and commitment to delivering exceptional investment outcomes for our clients.</p>
                        <div class="widget-social">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-x-line"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://bd.linkedin.com/" target="_blank">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-12">
                    <div class="row justify-content-center" data-cues="slideInUp">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Company</h3>
                                <ul class="custom-links">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('index') }}">Terms & Conditions</a></li>
                                    <li><a href="{{ route('index') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Resources</h3>
                                <ul class="custom-links">
                                    <li><a href="{{ route('index') }}">Apartments</a></li>
                                    <li><a href="{{ route('index') }}">Villa</a></li>
                                    <li><a href="{{ route('index') }}">Sell or Buy</a></li>
                                    <li><a href="{{ route('index') }}">New Apartment</a></li>
                                    <li><a href="{{ route('index') }}">Our Agents</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget ps-3">
                                <h3>Quick Links</h3>
                                <ul class="custom-links">
                                    <li><a href="{{ route('index') }}">Pricing</a></li>
                                    <li><a href="{{ route('index') }}">What We Do</a></li>
                                    <li><a href="{{ route('index') }}">Testimonial</a></li>
                                    <li><a href="{{ route('index') }}">Neighborhood</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-widget">
                                <h3>Contact Info</h3>
                                <ul class="info-list">
                                    <li>
                                        <span>Address:</span>
                                        #106, Bay Square 11, Business Bay, Dubai, UAE
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <a href="mailto:are@auregagroup.com">are@auregagroup.com</a>
                                    </li>
                                    <li>
                                        <span>Mobile:</span>
                                        <a href="tel:+971506258760">+971 50 625 8760</a>
                                    </li>
                                    <li>
                                        <span>Land Phone:</span>
                                        <a href="tel:+971043494444">+971 04 349 4444</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>
                    Copyright <span>Aurega Real Estate</span> All Rights Reserved by <a href="https://auregagroup.com" target="_blank">Aurega Group</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Back to Top -->
    <button type="button" id="back-to-top" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-s-line"></i>
    </button>
    <!-- End Back to Top -->

    <!-- Start Lines -->
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <!-- End Lines -->

    <!-- Link of JS Files -->
    <script src="{{ asset('/web/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/scrollCue.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/fslightbox.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/main.js') }}"></script>
</body>

</html>