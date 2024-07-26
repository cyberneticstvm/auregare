@extends("web.base")
@section("content")
<!-- Start Main Banner Area -->
<div class="main-banner-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-md-12" data-cues="slideInLeft">
                <div class="main-banner-content">
                    <span class="sub">Navigating Your Path to Premier Property Investments.</span>
                    <h1>More than Property, We Offer Possibilities</h1>
                    <div class="search-info-tabs">
                        <ul class="nav nav-tabs" id="search_tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" id="sell-tab" data-bs-toggle="tab" href="#sell" role="tab" aria-controls="sell">Sell</a></li>
                            <li class="nav-item"><a class="nav-link" id="rent-tab" data-bs-toggle="tab" href="#rent" role="tab" aria-controls="rent">Rent</a></li>
                            <li class="nav-item"><a class="nav-link" id="invest-tab" data-bs-toggle="tab" href="#invest" role="tab" aria-controls="invest">Invest</a></li>
                        </ul>
                        <div class="tab-content" id="search_tab_content">
                            <div class="tab-pane fade show active" id="sell" role="tabpanel">
                                <form class="search-form">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Looking For</label>
                                                <select class="form-select form-control">
                                                    <option selected>Property type</option>
                                                    <option value="1">Multifamily</option>
                                                    <option value="2">Detached house</option>
                                                    <option value="3">Industrial</option>
                                                    <option value="4">Townhouse</option>
                                                    <option value="5">Apartment</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select class="form-select form-control">
                                                    <option selected>All cities</option>
                                                    <option value="1">Liverpool</option>
                                                    <option value="2">Bristol</option>
                                                    <option value="3">Nottingham</option>
                                                    <option value="4">Leicester</option>
                                                    <option value="5">Coventry</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Your Price</label>
                                                <input type="text" class="form-control" placeholder="Max price">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Min Lot size</label>
                                                <input type="text" class="form-control" placeholder="Property lot size">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-select form-control">
                                                    <option selected>Property status</option>
                                                    <option value="1">Active (55)</option>
                                                    <option value="2">Open House (65)</option>
                                                    <option value="3">Hot Offer (45)</option>
                                                    <option value="4">Sold (78)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Search Property
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="rent" role="tabpanel">
                                <form class="search-form">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Looking For</label>
                                                <select class="form-select form-control">
                                                    <option selected>Property type</option>
                                                    <option value="1">Multifamily</option>
                                                    <option value="2">Detached house</option>
                                                    <option value="3">Industrial</option>
                                                    <option value="4">Townhouse</option>
                                                    <option value="5">Apartment</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select class="form-select form-control">
                                                    <option selected>All cities</option>
                                                    <option value="1">Liverpool</option>
                                                    <option value="2">Bristol</option>
                                                    <option value="3">Nottingham</option>
                                                    <option value="4">Leicester</option>
                                                    <option value="5">Coventry</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Your Price</label>
                                                <input type="text" class="form-control" placeholder="Max price">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Min Lot size</label>
                                                <input type="text" class="form-control" placeholder="Property lot size">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-select form-control">
                                                    <option selected>Property status</option>
                                                    <option value="1">Active (55)</option>
                                                    <option value="2">Open House (65)</option>
                                                    <option value="3">Hot Offer (45)</option>
                                                    <option value="4">Sold (78)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Search Property
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="invest" role="tabpanel">
                                <form class="search-form">
                                    <div class="row justify-content-center align-items-end">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Looking For</label>
                                                <select class="form-select form-control">
                                                    <option selected>Property type</option>
                                                    <option value="1">Multifamily</option>
                                                    <option value="2">Detached house</option>
                                                    <option value="3">Industrial</option>
                                                    <option value="4">Townhouse</option>
                                                    <option value="5">Apartment</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select class="form-select form-control">
                                                    <option selected>All cities</option>
                                                    <option value="1">Liverpool</option>
                                                    <option value="2">Bristol</option>
                                                    <option value="3">Nottingham</option>
                                                    <option value="4">Leicester</option>
                                                    <option value="5">Coventry</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Your Price</label>
                                                <input type="text" class="form-control" placeholder="Max price">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Min Lot size</label>
                                                <input type="text" class="form-control" placeholder="Property lot size">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-select form-control">
                                                    <option selected>Property status</option>
                                                    <option value="1">Active (55)</option>
                                                    <option value="2">Open House (65)</option>
                                                    <option value="3">Hot Offer (45)</option>
                                                    <option value="4">Sold (78)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="default-btn">
                                                    <i class="ri-search-2-line"></i>
                                                    Search Property
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12" data-cues="fadeIn">
                <div class="swiper main-banner-image-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="main-banner-image">
                                <img src="{{ asset('/web/assets/images/main-banner/banner1.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-banner-image">
                                <img src="{{ asset('/web/assets/images/main-banner/banner2.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-banner-image">
                                <img src="{{ asset('/web/assets/images/main-banner/banner3.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="main-banner-image-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Category Area -->
<div class="category-area pt-120 pb-95">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category1.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">Residential</a>
                        </h3>
                        <span>(26 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category2.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">Commercial</a>
                        </h3>
                        <span>(33 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category3.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">Vacation & Resort</a>
                        </h3>
                        <span>(37 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category4.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">The Land</a>
                        </h3>
                        <span>(54 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category5.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">New Construction</a>
                        </h3>
                        <span>(123 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category6.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">Luxury Estate</a>
                        </h3>
                        <span>(355 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category7.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">Eco-Friendly</a>
                        </h3>
                        <span>(89 Properties)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="category-card">
                    <div class="image">
                        <img src="{{ asset('/web/assets/images/category/category8.png') }}" alt="image">
                    </div>
                    <div class="content">
                        <h3>
                            <a href="{{ route('property') }}">Historic Properties</a>
                        </h3>
                        <span>(17 Properties)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Category Area -->

<!-- Start Sell Area -->
<div class="sell-area">
    <div class="container-fluid">
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-lg-7 col-md-12">
                <div class="sell-image"></div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="sell-content">
                    <span class="sub">Welcome to Aurega Real Estate:</span>
                    <h2>Your Trusted Partner in Dubai Property Investment</h2>
                    <p class="text-justify">For over 30 years, Aurega Group has been a cornerstone of Dubai's dynamic economic, offering unparalleled expertise and exceptional services in property leasing, property mortgages, and property brokerage. Our seasoned team of professionals is dedicated to providing the best property investment advisory, ensuring you make informed decisions that yield substantial returns.</p>
                    <p class="text-justify">At Aurega Real Estate, we understand that each property investment is unique, whether you're looking to lease a commercial space, secure a residential mortgage, or diversify your portfolio through strategic property investments. Our comprehensive approach combines in-depth market analysis with personalized guidance, helping you navigate the complexities of the Dubai real estate landscape with confidence.</p>
                    <p class="text-justify">Explore our extensive portfolio of properties across prime locations in Dubai, meticulously curated to meet diverse investment objectives. Whether you're a seasoned investor or a first-time buyer, Aurega Real Estate is committed to delivering tailored solutions that align with your financial goals and aspirations.</p>
                    <p class="text-justify">Benefit from our proactive market insights and proactive investment strategies designed to maximize returns while mitigating risks. Discover the Aurega difference today and embark on your journey towards successful property investments in Dubai.</p>
                    <div class="inner">
                        <h3><a href="{{ route('contact') }}">Sell Your Property</a></h3>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris eget ornare.</p>-->
                        <a href="{{ route('property') }}" class="sell-btn">
                            <img src="{{ asset('/web/assets/images/sell/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sell Area -->

<!-- Start Rent Area -->
<div class="rent-area">
    <div class="container-fluid">
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-lg-5 col-md-12">
                <div class="rent-content">
                    <span class="sub">Unlocking Dubai's Property Potential Together</span>
                    <h2>Mission</h2>
                    <p class="text-justify">Our mission is to provide unparalleled real estate advisory services,
                        leveraging our deep market knowledge and personalized approach to empower clients in making informed property investment decisions. We strive to exceed expectations through professionalism, transparency, and tailored solutions that drive success and satisfaction.</p>
                    <h2 class="mt-3">Vision</h2>
                    <p class="text-justify">To be the leading real estate advisory firm in Dubai, renowned for our integrity, innovation, and commitment to delivering exceptional investment outcomes for our clients.</p>
                    <div class="inner">
                        <h3><a href="{{ route('contact') }}">Rent A Property</a></h3>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et mauris eget ornare.</p>-->
                        <a href="{{ route('property') }}" class="rent-btn">
                            <img src="{{ asset('/web/assets/images/rent/arrow.svg') }}" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="rent-image"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Rent Area -->
<!-- Start Why Choose Area -->
<div class="why-choose-area pt-120">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-content">
                    <span class="sub">Bricks And Clicks</span>
                    <h2>Why Choose Aurega?</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Decades of Experience</h3>
                    <p>With over 20 years in the Dubai market, our expertise and insights are unmatched. We have a proven track record of helping clients make successful property investments.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Comprehensive Services</h3>
                    <p>From property leasing and mortgages to brokerage, we offer a full range of services to meet your needs. Our integrated approach ensures that all aspects of your property investment are handled seamlessly.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Market Knowledge</h3>
                    <p>Our deep understanding of the UAE property market ensures you receive the best investment advice. We stay up-to-date with the latest market trends and developments, enabling us to provide you with accurate and relevant information.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Personalized Approach</h3>
                    <p>We provide tailored solutions that align with your unique investment goals and preferences. Our team takes the time to understand your needs and offers customized strategies to help you achieve your objectives.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Trusted Advisors</h3>
                    <p>Our commitment to integrity and professionalism has earned us the trust of countless clients. We prioritize transparency and honesty in all our dealings, ensuring that you can rely on us for sound advice.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Exceptional Support</h3>
                    <p>We offer ongoing support and guidance, ensuring your property investments are successful and stress-free. From initial consultation to post-purchase assistance, we are with you every step of the way.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Proven Track Record</h3>
                    <p>Our successful history and numerous satisfied clients are a testament to our dedication and expertise. We have a long list of success stories that demonstrate our ability to deliver outstanding results.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Area -->
<!-- Start Fun Facts Area -->
<div class="fun-facts-area pt-120 pb-95">
    <div class="container">
        <div class="row justify-content-center fun-facts-with-five-columns" data-cues="slideInUp">
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">12</h3>
                        <h3 class="text">K</h3>
                    </div>
                    <p>Our Happy Customers</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">98</h3>
                        <h3 class="text">%</h3>
                    </div>
                    <p>Clients Satisfaction Rate</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">6</h3>
                        <h3 class="text">+</h3>
                    </div>
                    <p>Our Office Locations</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">20</h3>
                        <h3 class="text">K</h3>
                    </div>
                    <p>Total Property Sale</p>
                </div>
            </div>
            <div class="col">
                <div class="fun-facts-card">
                    <div class="d-flex align-items-center">
                        <h3 class="counter">85</h3>
                        <h3 class="text">+</h3>
                    </div>
                    <p>Real Estate Agents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Facts Area -->

<!-- Start Properties Area -->
<div class="properties-area pb-95">
    <div class="container">
        <div class="section-title text-center" data-cues="slideInUp">
            <h2>Fetured Properties</h2>
            <p>"Empowering Your Property Investment Journey"</p>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-xl-4 col-md-6">
                <div class="properties-item">
                    <div class="properties-image">
                        <a href="{{ route('property') }}">
                            <img src="{{ asset('/web/assets/images/properties/properties2.jpg') }}" alt="image">
                        </a>
                        <ul class="action">
                            <li>
                                <a href="" class="featured-btn">Featured</a>
                            </li>
                            <li>
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="link-list">
                            <li>
                                <a href="{{ route('property') }}" class="link-btn">Apartment</a>
                            </li>
                            <li>
                                <a href="{{ route('property') }}" class="link-btn">For Sale</a>
                            </li>
                        </ul>
                        <ul class="info-list">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/bed.svg') }}" alt="bed">
                                </div>
                                <span>6</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/bathroom.svg') }}" alt="bathroom">
                                </div>
                                <span>4</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/parking.svg') }}" alt="parking">
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/area.svg') }}" alt="area">
                                </div>
                                <span>3250</span>
                            </li>
                        </ul>
                    </div>
                    <div class="properties-content">
                        <div class="top">
                            <div class="title">
                                <h3>
                                    <a href="{{ route('property') }}">Heritage Buildings</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <div class="price"></div>
                        </div>
                        <div class="bottom">
                            <div class="user">
                                <img src="{{ asset('/web/assets/images/user/user1.png') }}" alt="image">
                                <a href="agent-profile.html">Thomas Klarck</a>
                            </div>
                            <ul class="group-info">
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-share-line"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/" target="_blank">
                                                    <i class="ri-twitter-x-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class="ri-instagram-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bd.linkedin.com/" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <i class="ri-arrow-left-right-line"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="properties-item">
                    <div class="properties-image">
                        <a href="{{ route('property') }}">
                            <img src="{{ asset('/web/assets/images/properties/properties3.jpg') }}" alt="image">
                        </a>
                        <ul class="action">
                            <li>
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="link-list">
                            <li>
                                <a href="{{ route('property') }}" class="link-btn">Apartment</a>
                            </li>
                            <li>
                                <a href="{{ route('property') }}" class="link-btn">For Sale</a>
                            </li>
                        </ul>
                        <ul class="info-list">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/bed.svg') }}" alt="bed">
                                </div>
                                <span>6</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/bathroom.svg') }}" alt="bathroom">
                                </div>
                                <span>4</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/parking.svg') }}" alt="parking">
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/area.svg') }}" alt="area">
                                </div>
                                <span>3250</span>
                            </li>
                        </ul>
                    </div>
                    <div class="properties-content">
                        <div class="top">
                            <div class="title">
                                <h3>
                                    <a href="{{ route('property') }}">Beachfront Properties</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <div class="price"></div>
                        </div>
                        <div class="bottom">
                            <div class="user">
                                <img src="{{ asset('/web/assets/images/user/user2.png') }}" alt="image">
                                <a href="agent-profile.html">Walter White</a>
                            </div>
                            <ul class="group-info">
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-share-line"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/" target="_blank">
                                                    <i class="ri-twitter-x-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class="ri-instagram-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bd.linkedin.com/" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <i class="ri-arrow-left-right-line"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="properties-item">
                    <div class="properties-image">
                        <a href="{{ route('property') }}">
                            <img src="{{ asset('/web/assets/images/properties/properties1.jpg') }}" alt="image">
                        </a>
                        <ul class="action">
                            <li>
                                <a href="{{ route('property') }}" class="featured-btn">Featured</a>
                            </li>
                            <li>
                                <div class="media">
                                    <span><i class="ri-vidicon-fill"></i></span>
                                    <span><i class="ri-image-line"></i>5</span>
                                </div>
                            </li>
                        </ul>
                        <ul class="link-list">
                            <li>
                                <a href="{{ route('property') }}" class="link-btn">Apartment</a>
                            </li>
                            <li>
                                <a href="{{ route('property') }}" class="link-btn">For Sale</a>
                            </li>
                        </ul>
                        <ul class="info-list">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/bed.svg') }}" alt="bed">
                                </div>
                                <span>6</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/bathroom.svg') }}" alt="bathroom">
                                </div>
                                <span>4</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/parking.svg') }}" alt="parking">
                                </div>
                                <span>1</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('/web/assets/images/properties/area.svg') }}" alt="area">
                                </div>
                                <span>3250</span>
                            </li>
                        </ul>
                    </div>
                    <div class="properties-content">
                        <div class="top">
                            <div class="title">
                                <h3>
                                    <a href="{{ route('property') }}">Luxury Apartments</a>
                                </h3>
                                <span>194 Mercer Street, NY 10012, USA</span>
                            </div>
                            <div class="price"></div>
                        </div>
                        <div class="bottom">
                            <div class="user">
                                <img src="{{ asset('/web/assets/images/user/user3.png') }}" alt="image">
                                <a href="agent-profile.html">Jane Ronan</a>
                            </div>
                            <ul class="group-info">
                                <li>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-share-line"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <i class="ri-facebook-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/" target="_blank">
                                                    <i class="ri-twitter-x-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <i class="ri-instagram-fill"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://bd.linkedin.com/" target="_blank">
                                                    <i class="ri-linkedin-fill"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Favorites">
                                        <i class="ri-heart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                        <i class="ri-arrow-left-right-line"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Properties Area -->

<!-- Start Information Area -->
<div class="information-area">
    <div class="container">
        <div class="information-inner-area">
            <div class="row justify-content-center align-items-center" data-cues="slideInUp">
                <div class="col-xl-6 col-md-12">
                    <div class="information-content">
                        <span class="sub">
                            Navigating Your Path to Premier Property Investments
                        </span>
                        <h2>Looking to invest into a Property?</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <ul class="information-list">
                        <li>
                            <div class="phone-info">
                                <div class="icon">
                                    <i class="ri-phone-line"></i>
                                </div>
                                <a href="tel:+971506258760">+971 50 625 8760</a>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" class="default-btn">Find Premium Property</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Information Area -->

<!-- Start Testimonial Area -->
<div class="testimonial-area pt-120 pb-120">
    <div class="container-fluid" data-cues="slideInUp">
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user2.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Arjun Patel, India</h3>
                                <span>Investor</span>
                            </div>
                        </div>
                        <p>“I had a fantastic experience with Aurega Real Estate. Their team helped me find the perfect property in Dubai, and their investment advice was spot-on.”</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li class="gray"><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user3.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Fatima Al-Mansouri, UAE</h3>
                                <span>Investor</span>
                            </div>
                        </div>
                        <p>"Aurega Real Estate's expertise in the Dubai market is unparalleled. Their guidance was invaluable in securing a lucrative property investment."</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user2.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Rajesh Kumar, India</h3>
                                <span>Buyer</span>
                            </div>
                        </div>
                        <p>"I highly recommend Aurega Real Estate. They provided exceptional service and made the entire property leasing process seamless."</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li class="gray"><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user2.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Ahmed Hassan, UAE</h3>
                                <span>Investor</span>
                            </div>
                        </div>
                        <p>"Thanks to Aurega Real Estate, I was able to secure a great mortgage rate for my property investment in Dubai."</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li class="gray"><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user3.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Priya Nair, India</h3>
                                <span>Investor</span>
                            </div>
                        </div>
                        <p>"The team at Aurega Real Estate is knowledgeable, professional, and incredibly helpful. They made my property investment journey smooth and stress-free."</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user2.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Saeed Al-Farsi, UAE</h3>
                                <span>Investor</span>
                            </div>
                        </div>
                        <p>"Aurega Real Estate's personalized approach and market insights were instrumental in helping me make informed investment decisions."</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li class="gray"><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="info">
                            <div class="image">
                                <img src="{{ asset('/web/assets/images/user/user3.png') }}" alt="image">
                            </div>
                            <div class="title">
                                <h3>Anjali Sharma, India</h3>
                                <span>Seller</span>
                            </div>
                        </div>
                        <p>"I am thoroughly impressed with Aurega Real Estate's commitment to excellence. They truly go above and beyond for their clients."</p>
                        <ul class="rating">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li class="gray"><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="testimonial-pagination"></div>
        </div>
    </div>
</div>
<!-- End Testimonial Area -->
@endsection("content")