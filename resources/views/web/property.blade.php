@extends("web.base")
@section("content")
<!-- Start Page Banner Area -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Property</h2>
            <ul class="list">
                <li>
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li>Property</li>
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
                        <h2>Coming Soon..</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Agent Profile Area -->
@endsection("content")