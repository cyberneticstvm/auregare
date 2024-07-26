@extends("web.base")
@section("content")
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>About Us</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>About Aurega Real Estate</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->
<!-- Start Agent Profile Area -->
<div class="agent-profile-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-cues="slideInUp">
            <div class="col-lg-5 col-md-12">
                <div class="agent-profile-image">
                    <img src="{{ asset('/web/assets/images/about/dubai.svg') }}" alt="image">
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="agent-profile-content">
                    <div class="title">
                        <h2>About Us</h2>
                        <span class="sub">About Aurega Real Estate</span>
                        <p class="text-justify">Aurega Real Estate is a premier real estate firm in Dubai, renowned for its extensive experience and deep understanding of the UAE property market. With over two decades ago, we have earned a reputation for excellence through our steadfast commitment to delivering superior client outcomes.</p>
                        <p class="text-justify">Our mission is to provide exceptional real estate advisory services that empower our clients to make informed investment decisions with confidence and clarity. We pride ourselves on our integrity, professionalism, and dedication to exceeding client expectations. At Aurega Real Estate, every client relationship is built on trust, transparency, and a deep-seated commitment to achieving exceptional results.</p>
                        <p class="text-justify">As industry leaders, we leverage our profound market knowledge and strategic insights to navigate the complexities of the Dubai property market successfully. Whether you're seeking expert guidance on property leasing, financing solutions through mortgages, or strategic property investments, our specialized team is equipped to provide tailored solutions that align with your unique investment goals.</p>
                        <p class="text-justify">At Aurega Real Estate, we believe in forging enduring partnerships based on mutual trust and shared success. Our client-centric approach ensures personalized attention at every stage of your property journey, from initial consultation to post-purchase support. Experience the difference with Aurega Real Estate and unlock unparalleled opportunities in Dubai's thriving real estate market.</p>
                    </div>
                    <div class="social-info">
                        <a href="https://www.facebook.com/auregagroup/" target="_blank">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://x.com/Auregagroup" target="_blank">
                            <i class="ri-twitter-x-line"></i>
                        </a>
                        <a href="https://www.instagram.com/auregagroup/" target="_blank">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/auregaglobal/" target="_blank">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                        <a href="https://www.youtube.com/@auregagroup7318" target="_blank">
                            <i class="ri-youtube-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Agent Profile Area -->
@endsection("content")