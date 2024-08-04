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
                        <h1 class="title">{{ $blog->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bread croumba rea end -->
<div class="blog-list-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- single blog list area start -->
                <div class="single-blog-list-style-one mb--60">
                    <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}" class="thumbnail">
                        <img src="{{ asset($blog->featured_image) }}" alt="blog-area">
                    </a>
                    <div class="blog-body">
                        <div class="top">
                            <div class="single">
                                <i class="fa-light fa-circle-user"></i>
                                <span>by Aurega Real Estate</span>
                            </div>
                            <div class="single">
                                <i class="fa-light fa-clock"></i>
                                <span>{{ $blog->created_at->format('d, M Y') }}</span>
                            </div>
                            <div class="single">
                                <i class="far fa-tags"></i>
                                <span>{{ $blog->hashtags }}</span>
                            </div>
                        </div>
                        <div class="inner">
                            <a href="{{ route('blog.detail', ['slug' => '1']) }}">
                                <h4 class="title">{{ $blog->title }}</h4>
                            </a>
                            {!! $blog->content !!}
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
                        @forelse($latest as $key => $item)
                        <div class="wized-body">
                            <div class="recent-post-single">
                                <div class="thumbnail">
                                    <a href="{{ route('blog.detail', ['slug' => $item->slug]) }}"><img src="{{ asset('/web/assets/images/blog/19.jpg') }}" style="height:10%" alt="Blog_post"></a>
                                </div>
                                <div class="content-area text-start">
                                    <div class="user">
                                        <i class="fal fa-clock"></i>
                                        <span>{{ $item->created_at->format('d, M Y') }}</span>
                                    </div>
                                    <a class="post-title" href="{{ route('blog.detail', ['slug' => $item->slug]) }}">
                                        <h6 class="title">{{ $item->title }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <!-- service left side bar area end -->
            </div>
        </div>
    </div>
</div>
@endsection("content")