<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurega - Real Estate</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/web/assets/images/logo/favicon.ico') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/plugins/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/assets/css/vendor/bootstrap.min.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/vendor/metismenu.css') }}">
    <link href="{{ asset('/web/assets/css/mystickyelement.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/web/assets/css/style.css') }}">
</head>

<body class="index-two">
    <div class="mystickyelements-fixed mystickyelements-position-right mystickyelements-position-screen-center mystickyelements-position-mobile-right mystickyelements-on-hover mystickyelements-size-medium mystickyelements-mobile-size-medium mystickyelements-templates-default">
        <div class="mystickyelement-lists-wrap">
            <ul class="mystickyelements-lists mystickyno-minimize">
                <li id="mystickyelements-social-whatsapp" class="mystickyelements-social-icon-li mystickyelements-social-whatsapp  element-desktop-on element-mobile-on">
                    <span class="mystickyelements-social-icon social-whatsapp social-custom" style="background: #0C9">
                        <a href="https://api.whatsapp.com/send?phone=971506258760&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                    </span>
                    <span class="mystickyelements-social-text " style="background: #0C9;">
                        <a href="https://api.whatsapp.com/send?phone=971506258760&text=Hello!%20I%20am%20interested%20in%20your%20service" target="_blank" rel="noopener">WhatsApp</a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Whatsapp -->
    @include("web.nav")

    @yield("content")

    <!-- rts footer area start -->
    <div class="rts-footer-area bg-dark social-jumpanimation">
        <div class="container">
            <div class="row g-5   ptb--100 ptb_sm--60 ptb_md--80">
                <div class="col-lg-4">
                    <!-- footer-two wrapper -->
                    <div class="footer-two-main-wrapper">
                        <a href="#" class="logo">
                            <img src="{{ asset('/web/assets/images/logo/aurega-dark-logo.webp') }}" alt="logo">
                        </a>
                        <!-- social style two -->
                        <ul class="social-style-two-wrapper social-anim">
                            <li><a class="counter__anim" href="https://www.facebook.com/auregagroup/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="counter__anim" href="https://x.com/Auregagroup"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a class="counter__anim" href="https://www.youtube.com/@auregagroup7318"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="counter__anim" href="https://www.linkedin.com/company/auregaglobal/"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a class="counter__anim" href="https://www.instagram.com/auregagroup/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                        <!-- social style two end -->
                    </div>
                    <!-- footer-two wrapper end -->
                </div>
                <div class="col-lg-8">
                    <div class="footer-two-main-wrapper-right">
                        <!-- single footer two wozed -->
                        <div class="single-footer-wized">
                            <div class="location-information">
                                <div class="location">
                                    <p class="text-white">#106, Bay Square 11, Business Bay, <br>
                                        Dubai, UAE</p>
                                </div>
                                <div class="contact-call">
                                    <a href="tel:+971506258760" class="text-white">+971 50 625 8760</a>
                                    <span>Call us for support</span>
                                </div>
                                <div class="contact-call">
                                    <a href="mailto:are@auregagroup.com" class="text-white">are@auregagroup.com</a>
                                    <span>Email us for query</span>
                                </div>
                            </div>

                        </div>
                        <!-- single footer two wozed -->
                        <!-- single footer two wozed -->
                        <div class="single-footer-wized">
                            <div class="location-information">
                                <div class="location">
                                    <h6 class="title text-white">Useful Links</h6>
                                </div>
                                <ul>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('property') }}">Property</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- single footer two wozed -->
                        <!-- single footer two wozed -->
                        <div class="single-footer-wized">
                            <div class="location-information">
                                <div class="location">
                                    <h6 class="title text-white">News Letter</h6>
                                    <!--<p class="disc-f">
                                        Subscribe to our newsletter & get all
                                        the latest news.
                                    </p>-->
                                </div>
                                <!--<form action="#">
                                    <div class="input-email">
                                        <input type="text" placeholder="Enter your email address">
                                        <button><i class="fa-thin fa-arrow-right"></i></button>
                                    </div>
                                </form>-->

                            </div>

                        </div>
                        <!-- single footer two wozed -->
                    </div>
                </div>
            </div>
        </div>
        <div class="rts-copyright-area-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-area-inner-two">
                            <p class="disc">&copy; {{ date('Y') }} <a href="https://auregagroup.com" target="_blank">Aurega Group Limited</a>. All Rights Reserved.</p>
                            <div class="right">
                                <ul>
                                    <li><a href="{{ route('privacy.policy') }}">Privacy policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer area end -->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <!-- mobile menu area start -->
        @include("web.mobile-nav")
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->


    <div class="grid-line">
        <div class="grid-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>





    <!-- start loader -->
    <!-- <div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> -->
    <!-- End loader -->


    <div id="anywhere-home">
    </div>

    <!-- scripts -->
    <script src="{{ asset('/web/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('/web/assets/js/vendor/waw.js') }}"></script>

    <!-- gsap plugins -->
    <script src="{{ asset('/web/assets/js/vendor/gsap.js') }}"></script>
    <script src="{{ asset('/web/assets/js/vendor/metismenu.js') }}"></script>
    <script src="{{ asset('/web/assets/js/plugins/scrolltiger.js') }}"></script>
    <script src="{{ asset('/web/assets/js/plugins/scrolltoplugin.js') }}"></script>
    <!-- <script src="{{ asset('/web/assets/js/plugins/smoothscroll.js') }}"></script> -->
    <script src="{{ asset('/web/assets/js/plugins/splittext.js') }}"></script>
    <!-- gsap plugins end-->

    <script src="{{ asset('/web/assets/js/vendor/magnifying-popup.js') }}"></script>

    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('/web/assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('/web/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('/web/assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('/web/assets/js/vendor/chroma.min.js') }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('/web/assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('/web/assets/js/plugins/contact.form.js') }}"></script>
    <script src="{{ asset('/web/assets/js/mystickyelement.js') }}"></script>
    <!-- main Js -->
    <script src="{{ asset('/web/assets/js/main.js') }}"></script>
</body>

</html>