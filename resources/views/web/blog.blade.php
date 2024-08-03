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
<div class="blog-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- single blog list area start -->
                <div class="single-blog-list-style-one mb--60">
                    <a href="{{ route('blog.detail', ['slug' => '1']) }}" class="thumbnail">
                        <img src="{{ asset('/web/assets/images/blog/blog1.png') }}" alt="blog-area">
                    </a>
                    <div class="blog-body">
                        <div class="top">
                            <div class="single">
                                <i class="fa-light fa-circle-user"></i>
                                <span>by Aurega Real Estate</span>
                            </div>
                            <div class="single">
                                <i class="fa-light fa-clock"></i>
                                <span>01 August, 2024</span>
                            </div>
                            <div class="single">
                                <i class="far fa-tags"></i>
                                <span>Volume 10 </span>
                            </div>
                        </div>
                        <div class="inner">
                            <a href="{{ route('blog.detail', ['slug' => '1']) }}">
                                <h4 class="title">Investing in Dubai's Thriving Real Estate Market: Opportunities and Insights</h4>
                            </a>
                            <p class="disc text-justify">
                                Dubai has long been a global hub for real estate investment, attracting investors from around the world with its dynamic market, world-class infrastructure, and lucrative opportunities. As the city continues to evolve and grow, the property sector remains a cornerstone of its economy success, offering investors a chance to capitalize on the emirate's remarkable development. In this article, we'll explore the current state of Dubai's real estate landscape, provide insights into the most promising investment areas, and offer a glimpse into the market's future potential.
                            </p>
                            <a href="{{ route('blog.detail', ['slug' => '1']) }}" class="rts-btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- single blog list area end -->
            </div>
            <div class="col-lg-4 padding-left-sidebar mt_md--50 mt_sm--50">
                <!-- service left side bar area start -->
                <div class="service-left-sidebar-wrapper">
                    <!-- service left sidebar single wized end -->

                    <div class="service-left-sidebar-wized mb--50">
                        <div class="topa-rea">
                            <h4 class="title">Recent Posts</h4>
                        </div>
                        <div class="wized-body">
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.detail', ['slug' => '1']) }}"><img src="{{ asset('/web/assets/images/blog/19.jpg') }}" alt="Blog_post"></a>
                                </div>
                                <div class="content-area text-start">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>01 August, 2024</span>
                                    </div>
                                    <a class="post-title" href="{{ route('blog.detail', ['slug' => '1']) }}">
                                        <h6 class="title">Investing in Dubai's Thriving Real Estate Market: Opportunities and Insights</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service left side bar area end -->
            </div>
        </div>
    </div>
</div>
@endsection("content")