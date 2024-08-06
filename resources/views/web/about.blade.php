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
                        <a class="active" href="{{ route('about') }}">About</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bread croumba rea end -->
<!-- about  page top histoory information  -->
<div class="about-top-history-information rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="title-style-left">
                    <div class="pre-title-area">
                        <img src="{{ asset('/web/assets/images/about/02.png') }}" alt="about">
                        <span class="pre-title">Aurega Real Estate LLC</span>
                    </div>
                    <h2 class="title">Our Story</h2>
                </div>
                <div class="about-left-history pl--50 pt--30">
                    <img src="{{ asset('/web/assets/images/about/12.png') }}" alt="about">
                </div>
                <div class="history-image-left mt--55 rts-reveal-one">
                    <img class="rts-reveal-image-one" src="{{ asset('/web/assets/images/about/13.jpg') }}" alt="about">
                </div>
            </div>
            <div class="col-lg-8 col-md-8 mt_sm--50">
                <div class="history-right-area-inner">
                    <p class="disc rts-slide-up">
                        Aurega Real Estate is a premier real estate firm in Dubai, renowned for its extensive experience and deep understanding of the UAE property market. With over two decades ago, we have earned a reputation for excellence through our steadfast commitment to delivering superior client outcomes.
                    </p>
                    <p class="disc rts-slide-up">
                        Our mission is to provide exceptional real estate advisory services that empower our clients to make informed investment decisions with confidence and clarity. We pride ourselves on our integrity, professionalism, and dedication to exceeding client expectations. At Aurega Real Estate, every client relationship is built on trust, transparency, and a deep-seated commitment to achieving exceptional results.
                    </p>
                    <p class="disc rts-slide-up">
                        As industry leaders, we leverage our profound market knowledge and strategic insights to navigate the complexities of the Dubai property market successfully. Whether you're seeking expert guidance on property leasing, financing solutions through mortgages, or strategic property investments, our specialized team is equipped to provide tailored solutions that align with your unique investment goals.
                    </p>
                    <p class="disc rts-slide-up">
                        At Aurega Real Estate, we believe in forging enduring partnerships based on mutual trust and shared success. Our client-centric approach ensures personalized attention at every stage of your property journey, from initial consultation to post-purchase support. Experience the difference with Aurega Real Estate and unlock unparalleled opportunities in Dubai's thriving real estate market.
                    </p>
                    <div class="history-right-img mt--80 rts-reveal-one">
                        <img class="rts-reveal-image-one" src="{{ asset('/web/assets/images/about/14.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about  page top histoory information end -->
<div class="faqs-page-wrapper-area mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 pl--50 pl_sm--10 pt_sm--50">
                <div class="faq-style-two">
                    <div class="left-accordion-faq rts-slide-up">
                        <div class="title-faq-area-2">
                            <div class="title-area-style-six-left">
                                <h2 class="title">FAQs</h2>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Why should I choose Aurega Real Estate?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        At Aurega Real Estate, we prioritize transparency, reliability, and a client-centric approach. With a proven record of successful transactions and satisfied clients, we strive to build trust through our unwavering commitment to excellence and ethical business practices.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can non-residents own property in Dubai?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely! Dubai welcomes international investors, allowing non-residents to own property. Aurega Real Estate specializes in assisting investors throughout the entire process, making property ownership in Dubai a seamless experience.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Is joint property investment possible?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, Aurega Real Estate facilitates joint investments. Whether you are pooling resources with family, friends, or business partners, we can guide you through the process of collective property ownership in Dubai.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Can I invest in Dubai real estate remotely?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Certainly! Aurega Real Estate understands the global nature of real estate investments. Our team is equipped to assist you remotely, providing virtual property viewings, online consultations, and seamless transaction management from anywhere in the world.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What are the fees associated with property transactions in Dubai?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The Dubai Land Department (DLD) fees vary depending on the property value and type. Our team will provide you with a comprehensive breakdown of all applicable fees, ensuring transparency and clarity in every transaction.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What types of properties are available for investment in Dubai?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dubai offers a diverse range of properties, including residential, commercial, and industrial options. Aurega Real Estate can help you identify the right type of property based on your investment goals and preferences.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        How does the rental market in Dubai work?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The rental market in Dubai is robust and offers lucrative opportunities for investors. Our team can assist you in understanding market trends, rental yields, and managing rental properties effectively.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        What financing options are available for property investment in Dubai?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Various financing options are available, including mortgages from local and international banks. Aurega Real Estate can connect you with trusted financial institutions and help you navigate the financing process.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        How does Aurega Real Estate support first-time buyers?
                                    </button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We provide comprehensive support to first-time buyers, from initial consultations to property selection and transaction management. Our goal is to make your first property investment in Dubai as smooth and stress-free as possible.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        What after-sales services does Aurega Real Estate offer?
                                    </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our commitment to clients extends beyond the transaction. We offer after-sales services, including property management, rental assistance, and maintenance support, ensuring your investment remains in top condition.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")