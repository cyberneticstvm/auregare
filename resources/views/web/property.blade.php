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
                        <a class="active" href="{{ route('property') }}">Property List</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">Property List</h1>
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
                        <span class="pre-title">Property List</span>
                    </div>
                    <h2 class="title">Coming Soon...</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")