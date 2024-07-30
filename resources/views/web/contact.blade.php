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
                        <a class="active" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bread croumba rea end -->
<div class="contact-info-area-start rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top">
                    <h2 class="title">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row mt--0 g-5">
            <div class="col-lg-3 col-md-6">
                <div class="left-contact">
                    <p class="top mb--30">
                        Get in touch with us
                    </p>
                    <a href="tel:+971506258760">Hot Line: +971 50 625 8760</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pl--50 pl_md--15 pl_sm--15">
                <div class="contact-info-mid">
                    <p class="top-contact mb--20">Contact Details</p>
                    <div class="single-information mt--30">
                        <span>Address:</span>
                        <p class="address" style="text-decoration: underline;">
                            #106, Bay Square 11, Business Bay, <br>
                            Dubai, UAE
                        </p>
                    </div>
                    <div class="single-information">
                        <span>Phone:</span>
                        <a href="Tel:+971043494444">
                            +971 04 349 4444
                        </a>
                    </div>
                    <div class="single-information">
                        <span>Mail:</span>
                        <a href="mailto:are@auregagroup.com">
                            are@auregagroup.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <form action="#" class="contact-form-conatct-page">
                    <p class="top-contact mb--20">Contac Form</p>
                    <input type="text" placeholder="Your name" required>
                    <input type="text" placeholder="Phone Number">
                    <textarea placeholder="Your message"></textarea>
                    <button class="rts-btn btn-primary mt--30">Send Now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt--120">
        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14441.857782445455!2d55.2611684!3d25.1875552!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f693560ad9fe9%3A0xdb3b467956c16a9a!2sAurega%20Group!5e0!3m2!1sen!2sin!4v1676375849520!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection("content")