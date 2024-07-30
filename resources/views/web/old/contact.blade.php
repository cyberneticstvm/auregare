@extends("web.base")
@section("content")
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Contact Us</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->
<!-- Start Why Choose Area -->
<div class="why-choose-area pt-120 pb-95">
    <div class="container">
        <div class="row justify-content-center" data-cues="slideInUp">
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-content">
                    <span class="sub">Contact Us</span>
                    <h2>Get in Touch with Aurega Real Estate</h2>
                    <p class="text-justify">We'd love to hear from you! Whether you have a question about our services, need property investment advice, or want to explore our property listings, our team is here to assist you.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Office Address</h3>
                    <p>#106, Bay Square 11, Business Bay, Dubai, UAE</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Email</h3>
                    <p><a href="mailto:are@auregagroup.com">are@auregagroup.com</a></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-choose-card">
                    <h3>Phone</h3>
                    <p><a href="tel:+971506258760">+971 50 625 8760</a><br /><a href="tel:+971043494444">+971 04 349 4444</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Area -->
@endsection("content")