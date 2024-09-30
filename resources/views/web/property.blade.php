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
        <div class="row g-5 mt--30 rts-slide-up">
            @forelse($properties as $key => $property)
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="title">{{ $property->title }}</h6>
                        <div id="carouselExampleControls_{{$key}}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset($property->featured_image) }}" class="d-block w-100" alt="{{ $property->title }}">
                                </div>
                                @foreach($property->images as $key1 => $image)
                                <div class="carousel-item">
                                    <img src="{{ asset($image->name) }}" class="d-block w-100" alt="{{ $property->title }}">
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls_{{$key}}" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls_{{$key}}" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-dark p-3">{{ $property->description }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <i class="fa fa-bed"></i>
                                {{ $property->bed_rooms ?? 0 }}
                            </div>
                            <div class="col text-end">
                                <i class="fa fa-bath"></i>
                                {{ $property->bath_rooms ?? 0 }}
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col">
                                Area:
                                <span class="text-dark"> {{ $property->area ?? 0 }} SqFt.</span>
                            </div>
                            <div class="col text-end">
                                For <span class="text-dark">{{ $property->type }}</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                From AED <span class="text-dark">{{ $property->price }}</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('contact') }}" class="arrow-btn-read-more">Contact Us<i class="fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
        {!! $properties->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
</div>
@endsection("content")