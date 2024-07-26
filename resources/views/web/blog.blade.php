@extends("web.base")
@section("content")
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Blog</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->
<!-- Start Agent Profile Area -->
<div class="agent-profile-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-cues="slideInUp">
            <div class="col-lg-12 col-md-12">
                <div class="agent-profile-content">
                    <div class="title">
                        <h2>Blog</h2>
                        <span class="sub">Stay Informed with Aurega Real Estate Blog</span>
                        <p class="text-justify">Welcome to the Aurega Real Estate Blog, your go-to resource for the latest insights, trends, and news in the Dubai property market. Our blog covers a wide range of topics, from investment tips and market analysis to property management advice and updates on the latest real estate developments.</p>
                        <p class="text-justify">Stay ahead of the curve with our expert insights and make informed decisions about your property investments in Dubai. Subscribe to our blog for regular updates and stay connected with the ever-evolving world of real estate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Agent Profile Area -->
@endsection("content")