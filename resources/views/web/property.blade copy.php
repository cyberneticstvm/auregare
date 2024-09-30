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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- ingle srevice area start -->
                <div class="singe-serice-style-two">
                    <a href="javascript:void(0)" class="thumbnail">
                        <img src="{{ asset($property->featured_image) }}" alt="{{ $property->title }}">
                    </a>
                    <div class="body">
                        <div class="wrapper">
                            <div class="icon-area">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="47" viewBox="0 0 59 47" fill="none">
                                        <path d="M15.2265 40.2767C14.8531 40.2767 14.5598 39.9833 14.5598 39.61V17.1033C14.5598 16.89 14.6531 16.69 14.8265 16.57L32.8798 3.13C33.1198 2.95667 33.4398 2.95667 33.6798 3.13L51.7331 16.57C51.9065 16.69 51.9998 16.89 51.9998 17.1033V20.25C51.9998 20.6233 51.7065 20.9167 51.3331 20.9167C50.9598 20.9167 50.6665 20.6233 50.6665 20.25V17.4367L33.2798 4.49L15.8931 17.45V39.61C15.8931 39.9833 15.5998 40.2767 15.2265 40.2767Z" fill="#30373E" />
                                        <path d="M47.4931 11.65C47.1197 11.65 46.8264 11.3566 46.8264 10.9833V4.87663C46.8264 4.50329 47.1197 4.20996 47.4931 4.20996C47.8664 4.20996 48.1597 4.50329 48.1597 4.87663V10.9833C48.1597 11.3566 47.8664 11.65 47.4931 11.65Z" fill="#30373E" />
                                        <path d="M43.8932 9.03663C43.5199 9.03663 43.2266 8.7433 43.2266 8.36996V4.87663C43.2266 4.50329 43.5199 4.20996 43.8932 4.20996C44.2666 4.20996 44.5599 4.50329 44.5599 4.87663V8.36996C44.5599 8.72996 44.2532 9.03663 43.8932 9.03663Z" fill="#30373E" />
                                        <path d="M48.7864 5.52995H42.5998C42.2264 5.52995 41.9331 5.23661 41.9331 4.86328V2.52995C41.9331 2.15661 42.2264 1.86328 42.5998 1.86328H48.7864C49.1598 1.86328 49.4531 2.15661 49.4531 2.52995V4.86328C49.4531 5.23661 49.1464 5.52995 48.7864 5.52995ZM43.2664 4.19661H48.1198V3.19661H43.2664V4.19661Z" fill="#30373E" />
                                        <path d="M35.44 33.57C35.4 33.57 35.3467 33.57 35.3067 33.5567C35.2667 33.5433 35.2267 33.53 35.1867 33.5167C35.1467 33.5033 35.1067 33.4767 35.0667 33.45C35.0267 33.4233 35 33.3967 34.96 33.37C34.84 33.25 34.76 33.0767 34.76 32.9033C34.76 32.73 34.8267 32.5567 34.96 32.4367C34.9867 32.41 35.0267 32.3833 35.0667 32.3567C35.1067 32.33 35.1467 32.3167 35.1867 32.29C35.2267 32.2767 35.2667 32.2633 35.3067 32.25C35.3867 32.2367 35.48 32.2367 35.5733 32.25L35.6933 32.29C35.7333 32.3033 35.7733 32.33 35.8133 32.3567C35.8533 32.3833 35.88 32.41 35.92 32.4367C36.04 32.5567 36.12 32.73 36.12 32.9033C36.12 33.0767 36.0533 33.25 35.92 33.37C35.8933 33.3967 35.8533 33.4233 35.8133 33.45C35.7733 33.4767 35.7333 33.49 35.6933 33.5167C35.6533 33.53 35.6133 33.5433 35.5733 33.5567C35.5333 33.57 35.4933 33.57 35.44 33.57Z" fill="#30373E" />
                                        <path d="M28.9733 40.2767C28.6 40.2767 28.3066 39.9833 28.3066 39.61V26.21C28.3066 25.8367 28.6 25.5433 28.9733 25.5433H37.5733C37.9466 25.5433 38.24 25.8367 38.24 26.21V33.93C38.24 34.3033 37.9466 34.5967 37.5733 34.5967C37.2 34.5967 36.9066 34.3033 36.9066 33.93V26.8767H29.64V39.61C29.64 39.9833 29.3466 40.2767 28.9733 40.2767Z" fill="#30373E" />
                                        <path d="M55.9466 17.7833H51.3332C50.9599 17.7833 50.6665 17.49 50.6665 17.1167C50.6665 16.7433 50.9599 16.45 51.3332 16.45H53.8932L33.2799 1.49L12.6665 16.45H15.2265C15.5999 16.45 15.8932 16.7433 15.8932 17.1167C15.8932 17.49 15.5999 17.7833 15.2265 17.7833H10.6132C10.3199 17.7833 10.0665 17.5967 9.97321 17.3167C9.87988 17.0367 9.98655 16.7433 10.2132 16.57L32.8799 0.13C33.1199 -0.0433333 33.4265 -0.0433333 33.6665 0.13L56.3332 16.57C56.5732 16.7433 56.6665 17.0367 56.5732 17.3167C56.4799 17.5967 56.2399 17.7833 55.9466 17.7833Z" fill="#30373E" />
                                        <path d="M44.6799 24.4233H37.7865C37.4132 24.4233 37.1199 24.13 37.1199 23.7567V16.8633C37.1199 16.49 37.4132 16.1967 37.7865 16.1967H44.6799C45.0532 16.1967 45.3465 16.49 45.3465 16.8633V23.7567C45.3465 24.13 45.0532 24.4233 44.6799 24.4233ZM38.4532 23.09H44.0132V17.53H38.4532V23.09Z" fill="#30373E" />
                                        <path d="M41.2399 24.4233C40.8666 24.4233 40.5732 24.13 40.5732 23.7567V16.8633C40.5732 16.49 40.8666 16.1967 41.2399 16.1967C41.6132 16.1967 41.9066 16.49 41.9066 16.8633V23.7567C41.9066 24.13 41.5999 24.4233 41.2399 24.4233Z" fill="#30373E" />
                                        <path d="M28.76 24.4233H21.8666C21.4933 24.4233 21.2 24.13 21.2 23.7567V16.8633C21.2 16.49 21.4933 16.1967 21.8666 16.1967H28.76C29.1333 16.1967 29.4266 16.49 29.4266 16.8633V23.7567C29.4266 24.13 29.1333 24.4233 28.76 24.4233ZM22.5466 23.09H28.1066V17.53H22.5466V23.09Z" fill="#30373E" />
                                        <path d="M25.32 24.4233C24.9467 24.4233 24.6533 24.13 24.6533 23.7567V16.8633C24.6533 16.49 24.9467 16.1967 25.32 16.1967C25.6933 16.1967 25.9867 16.49 25.9867 16.8633V23.7567C25.9867 24.13 25.6933 24.4233 25.32 24.4233Z" fill="#30373E" />
                                        <path d="M28.76 20.9834H21.8666C21.4933 20.9834 21.2 20.69 21.2 20.3167C21.2 19.9434 21.4933 19.65 21.8666 19.65H28.76C29.1333 19.65 29.4266 19.9434 29.4266 20.3167C29.4266 20.69 29.1333 20.9834 28.76 20.9834Z" fill="#30373E" />
                                        <path d="M44.6799 20.9834H37.7865C37.4132 20.9834 37.1199 20.69 37.1199 20.3167C37.1199 19.9434 37.4132 19.65 37.7865 19.65H44.6799C45.0532 19.65 45.3465 19.9434 45.3465 20.3167C45.3465 20.69 45.0532 20.9834 44.6799 20.9834Z" fill="#30373E" />
                                        <path d="M33.2798 15.09C31.2398 15.09 29.5864 13.4367 29.5864 11.3967C29.5864 9.3567 31.2398 7.70337 33.2798 7.70337C35.3198 7.70337 36.9731 9.3567 36.9731 11.3967C36.9731 13.4234 35.3198 15.09 33.2798 15.09ZM33.2798 9.0367C31.9731 9.0367 30.9198 10.09 30.9198 11.3967C30.9198 12.7034 31.9731 13.7567 33.2798 13.7567C34.5864 13.7567 35.6398 12.7034 35.6398 11.3967C35.6398 10.09 34.5864 9.0367 33.2798 9.0367Z" fill="#30373E" />
                                        <path d="M31.9866 42.8367H13.5199C13.1466 42.8367 12.8533 42.5434 12.8533 42.17V39.61C12.8533 39.2367 13.1466 38.9434 13.5199 38.9434H33.3199C33.6933 38.9434 33.9866 39.2367 33.9866 39.61C33.9866 39.9834 33.6933 40.2767 33.3199 40.2767H14.1866V41.5034H31.9866C32.3599 41.5034 32.6533 41.7967 32.6533 42.17C32.6533 42.5434 32.3466 42.8367 31.9866 42.8367Z" fill="#30373E" />
                                        <path d="M58 46.9299H35.4533C35.1866 46.9299 34.9466 46.7699 34.84 46.5166C34.7333 46.2633 34.8 45.9833 34.9866 45.7966L57.5333 23.2499C57.72 23.0633 58.0133 22.9966 58.2533 23.1033C58.5066 23.2099 58.6666 23.4499 58.6666 23.7166V46.2633C58.6666 46.6233 58.3733 46.9299 58 46.9299ZM37.0666 45.5966H57.3333V25.3166L37.0666 45.5966Z" fill="#30373E" />
                                        <path d="M53.9066 42.8233H45.3466C45.0799 42.8233 44.8399 42.6633 44.7333 42.4099C44.6266 42.1566 44.6933 41.8766 44.8799 41.6899L53.4399 33.1299C53.6266 32.9433 53.9199 32.8766 54.1599 32.9833C54.4133 33.0899 54.5733 33.3299 54.5733 33.5966V42.1566C54.5733 42.5299 54.2666 42.8233 53.9066 42.8233ZM46.9466 41.4899H53.2266V35.2099L46.9466 41.4899Z" fill="#30373E" />
                                        <path d="M31.6932 43.37C31.5199 43.37 31.3466 43.3033 31.2266 43.17C31.0266 42.97 30.9732 42.65 31.1066 42.3833L34.3066 36.2766C34.3332 36.2233 34.3732 36.1566 34.4266 36.1166L50.4666 20.0766C51.5199 19.0233 53.2532 19.0233 54.3066 20.0766C55.3599 21.13 55.3599 22.8633 54.3066 23.9166L38.2799 39.97C38.2266 40.0233 38.1732 40.0633 38.1199 40.09L32.0132 43.29C31.9066 43.3433 31.7999 43.37 31.6932 43.37ZM35.4532 36.9966L33.2932 41.1166L37.4132 38.9566L53.3866 22.9833C53.9199 22.45 53.9199 21.57 53.3866 21.0233C52.8532 20.49 51.9732 20.49 51.4266 21.0233L35.4532 36.9966Z" fill="#30373E" />
                                        <path d="M37.7999 40.17C37.6266 40.17 37.4532 40.1033 37.3332 39.97L34.4266 37.0633C34.1599 36.7966 34.1599 36.3833 34.4266 36.1166C34.6932 35.85 35.1066 35.85 35.3732 36.1166L38.2799 39.0233C38.5466 39.29 38.5466 39.7033 38.2799 39.97C38.1466 40.1033 37.9732 40.17 37.7999 40.17Z" fill="#30373E" />
                                        <path d="M52.2664 25.7033C52.0931 25.7033 51.9198 25.6366 51.7998 25.5033L48.8931 22.5966C48.6264 22.33 48.6264 21.9166 48.8931 21.65C49.1598 21.3833 49.5731 21.3833 49.8398 21.65L52.7464 24.5566C53.0131 24.8233 53.0131 25.2366 52.7464 25.5033C52.5998 25.6366 52.4398 25.7033 52.2664 25.7033Z" fill="#30373E" />
                                        <path d="M8.88 42.6766H0.666667C0.293333 42.6766 0 42.3833 0 42.01V0.943278C0 0.569945 0.293333 0.276611 0.666667 0.276611H8.88C9.25333 0.276611 9.54667 0.569945 9.54667 0.943278V42.01C9.54667 42.3833 9.24 42.6766 8.88 42.6766ZM1.33333 41.3433H8.21333V1.60994H1.33333V41.3433Z" fill="#30373E" />
                                        <path d="M8.88006 5.10335H5.64006C5.26672 5.10335 4.97339 4.81002 4.97339 4.43669C4.97339 4.06335 5.26672 3.77002 5.64006 3.77002H8.88006C9.25339 3.77002 9.54672 4.06335 9.54672 4.43669C9.54672 4.81002 9.24006 5.10335 8.88006 5.10335Z" fill="#30373E" />
                                        <path d="M8.88 8.88997H7.25334C6.88 8.88997 6.58667 8.59664 6.58667 8.22331C6.58667 7.84997 6.88 7.55664 7.25334 7.55664H8.86667C9.24 7.55664 9.53334 7.84997 9.53334 8.22331C9.53334 8.59664 9.24 8.88997 8.88 8.88997Z" fill="#30373E" />
                                        <path d="M8.88006 12.6767H5.64006C5.26672 12.6767 4.97339 12.3834 4.97339 12.0101C4.97339 11.6367 5.26672 11.3434 5.64006 11.3434H8.88006C9.25339 11.3434 9.54672 11.6367 9.54672 12.0101C9.54672 12.3834 9.24006 12.6767 8.88006 12.6767Z" fill="#30373E" />
                                        <path d="M8.88 16.4633H7.25334C6.88 16.4633 6.58667 16.17 6.58667 15.7967C6.58667 15.4233 6.88 15.13 7.25334 15.13H8.86667C9.24 15.13 9.53334 15.4233 9.53334 15.7967C9.53334 16.17 9.24 16.4633 8.88 16.4633Z" fill="#30373E" />
                                        <path d="M8.88006 20.25H5.64006C5.26672 20.25 4.97339 19.9566 4.97339 19.5833C4.97339 19.21 5.26672 18.9166 5.64006 18.9166H8.88006C9.25339 18.9166 9.54672 19.21 9.54672 19.5833C9.54672 19.9566 9.24006 20.25 8.88006 20.25Z" fill="#30373E" />
                                        <path d="M8.88 24.0367H7.25334C6.88 24.0367 6.58667 23.7434 6.58667 23.37C6.58667 22.9967 6.88 22.7034 7.25334 22.7034H8.86667C9.24 22.7034 9.53334 22.9967 9.53334 23.37C9.54667 23.7434 9.24 24.0367 8.88 24.0367Z" fill="#30373E" />
                                        <path d="M8.88006 27.8233H5.64006C5.26672 27.8233 4.97339 27.53 4.97339 27.1567C4.97339 26.7833 5.26672 26.49 5.64006 26.49H8.88006C9.25339 26.49 9.54672 26.7833 9.54672 27.1567C9.54672 27.53 9.24006 27.8233 8.88006 27.8233Z" fill="#30373E" />
                                        <path d="M8.88 31.6101H7.25334C6.88 31.6101 6.58667 31.3167 6.58667 30.9434C6.58667 30.5701 6.88 30.2767 7.25334 30.2767H8.86667C9.24 30.2767 9.53334 30.5701 9.53334 30.9434C9.53334 31.3167 9.24 31.6101 8.88 31.6101Z" fill="#30373E" />
                                        <path d="M8.88006 35.41H5.64006C5.26672 35.41 4.97339 35.1167 4.97339 34.7433C4.97339 34.37 5.26672 34.0767 5.64006 34.0767H8.88006C9.25339 34.0767 9.54672 34.37 9.54672 34.7433C9.54672 35.1167 9.24006 35.41 8.88006 35.41Z" fill="#30373E" />
                                        <path d="M8.88 39.1967H7.25334C6.88 39.1967 6.58667 38.9034 6.58667 38.5301C6.58667 38.1567 6.88 37.8634 7.25334 37.8634H8.86667C9.24 37.8634 9.53334 38.1567 9.53334 38.5301C9.53334 38.9034 9.24 39.1967 8.88 39.1967Z" fill="#30373E" />
                                    </svg>
                                </div>
                                <span>{{ $key + 1 }}</span>
                            </div>
                            <div class="inner">
                                <a href="javascript:void(0)">
                                    <h6 class="title">{{ $property->title }}</h6>
                                </a>
                                <p class="disc">{{ $property->description }}</p>
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
                </div>
                <!-- ingle srevice area end -->
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection("content")