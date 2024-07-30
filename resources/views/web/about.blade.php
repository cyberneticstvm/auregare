@extends("web.base")
@section("content")
<!-- bread croumba rea start -->
<div class="breadcrumb-area-bg bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-crumb-area-inner">
                    <div class="breadcrumb-top">
                        <a href="{{ route('index') }}">Home</a> /
                        <a class="active" href="{{ route('about') }}">About</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bread croumba rea end -->
<!-- about  page top histoory information  -->
<div class="about-top-history-information rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="title-style-left">
                    <div class="pre-title-area">
                        <img src="{{ asset('/web/assets/images/about/02.png') }}" alt="about">
                        <span class="pre-title">Aurega Real Estate LLC</span>
                    </div>
                    <h2 class="title">Our Story</h2>
                </div>
                <div class="about-left-history pl--50 pt--30">
                    <img src="{{ asset('/web/assets/images/about/12.png') }}" alt="about">
                </div>
                <div class="history-image-left mt--55 rts-reveal-one">
                    <img class="rts-reveal-image-one" src="{{ asset('/web/assets/images/about/13.jpg') }}" alt="about">
                </div>
            </div>
            <div class="col-lg-8 col-md-8 mt_sm--50">
                <div class="history-right-area-inner">
                    <p class="disc rts-slide-up">
                        Aurega Real Estate is a premier real estate firm in Dubai, renowned for its extensive experience and deep understanding of the UAE property market. With over two decades ago, we have earned a reputation for excellence through our steadfast commitment to delivering superior client outcomes.
                    </p>
                    <p class="disc rts-slide-up">
                        Our mission is to provide exceptional real estate advisory services that empower our clients to make informed investment decisions with confidence and clarity. We pride ourselves on our integrity, professionalism, and dedication to exceeding client expectations. At Aurega Real Estate, every client relationship is built on trust, transparency, and a deep-seated commitment to achieving exceptional results.
                    </p>
                    <p class="disc rts-slide-up">
                        As industry leaders, we leverage our profound market knowledge and strategic insights to navigate the complexities of the Dubai property market successfully. Whether you're seeking expert guidance on property leasing, financing solutions through mortgages, or strategic property investments, our specialized team is equipped to provide tailored solutions that align with your unique investment goals.
                    </p>
                    <p class="disc rts-slide-up">
                        At Aurega Real Estate, we believe in forging enduring partnerships based on mutual trust and shared success. Our client-centric approach ensures personalized attention at every stage of your property journey, from initial consultation to post-purchase support. Experience the difference with Aurega Real Estate and unlock unparalleled opportunities in Dubai's thriving real estate market.
                    </p>
                    <div class="history-right-img mt--80 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{ asset('/web/assets/images/about/14.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about  page top histoory information end -->
@endsection("content")