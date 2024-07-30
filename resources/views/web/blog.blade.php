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
                        <a class="active" href="{{ route('blog') }}">Blog</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bread croumba rea end -->
<!-- rts service inner area start -->
<div class="rts-service-inner-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style-center">
                    <div class="pre-title-area">
                        <img src="{{ asset('/web/assets/images/about/02.png') }}" alt="about">
                        <span class="pre-title">Blog</span>
                    </div>
                    <h2 class="title">Stay Informed with Aurega Real Estate Blog</h2>
                    <p class="disc rts-slide-up">
                        Welcome to the Aurega Real Estate Blog, your go-to resource for the latest insights, trends, and news in the Dubai property market. Our blog covers a wide range of topics, from investment tips and market analysis to property management advice and updates on the latest real estate developments.
                    </p>
                    <p class="disc rts-slide-up">
                        Stay ahead of the curve with our expert insights and make informed decisions about your property investments in Dubai. Subscribe to our blog for regular updates and stay connected with the ever-evolving world of real estate.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")