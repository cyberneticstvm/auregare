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
                        <a class="active" href="{{ route('team') }}">Team</a>
                    </div>
                    <div class="bottom-title">
                        <h1 class="title">Team Members</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bread croumba rea end -->
<div class="rts-team-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="title-style-center">
                    <h2 class="title">Meet Our Talented Team</h2>
                    <p class="disc">
                        we are proud to have a dedicated and skilled team of professionals <br>
                        who are passionate about property investments.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team single main area start -->
<div class="single-team-about-area rts-section-gap bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="thumbnail-left-team-about">
                    <img src="{{ asset('/web/assets/images/team/ashraf.jpg') }}" alt="team">
                </div>
            </div>
            <div class="col-lg-9 pl--60 pl_md--15 pl_sm--15 mt_sm--50 mt_md--50">
                <div class="team-about-right-araea">
                    <div class="title-style-left">
                        <div class="pre-title-area">
                            <img src="{{ asset('/web/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">CEO</span>
                        </div>
                        <h5 class="title">Mr. Ashraf M. Rahman </h5>
                    </div>
                    <p class="disc text-justify">
                        Mr. Ashraf M. Rahman brings over two decades of experience to the real estate industry. Beginning his career in 1998 and managing $90.7 million in investment portfolios for high-net-worth individuals, he has honed his expertise in strategic financial leadership.<br />
                        Mr. Rahman holds an International Business Honors Degree from the University of Lincoln, UK and an MBA in Marketing & Finance. His deep understanding of Middle Eastern business culture and active involvement in networks like BNI, BBG, and CEO Clubs since 2009 highlight his strategic leadership and networking prowess.<br />
                        Recognized with multiple BNI awards and World Bank Certificates of Appreciation, Mr. Rahman currently serves as Chairman of Aurega Group. His strategic vision and international business expertise drive the company's success in the competitive real estate market. Under his leadership, Aurega Real Estate L.L.C. focuses on strategic direction and growth initiatives, ensuring top-tier services in providing mortgage solutions, leasing, buying & selling properties in U.A.E. and Canada.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="thumbnail-left-team-about">
                    <img src="{{ asset('/web/assets/images/team/raais.png') }}" alt="team">
                </div>
            </div>
            <div class="col-lg-9 pl--60 pl_md--15 pl_sm--15 mt_sm--50 mt_md--50">
                <div class="team-about-right-araea">
                    <div class="title-style-left">
                        <div class="pre-title-area">
                            <img src="{{ asset('/web/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Director</span>
                        </div>
                        <h5 class="title">Mr. Raais Khan </h5>
                    </div>
                    <p class="disc text-justify">
                        Mr. Raais Khan is a seasoned real estate professional with over 30 years of experience, including senior roles in investment banking at Lloyds Bank and Nikko Securities. He has a proven track record in real estate and business consultancy across the Middle East.<br />
                        Renowned for his strategic leadership and operational excellence, Mr. Khan has successfully set up and managed ventures in Dubai and the broader region. His deep understanding of the regional market, coupled with his expertise in business and real estate investments, positions him as a key figure in the industry.<br />
                        Mr. Khan's skill set includes strategic planning, team building, talent development, and performance analytics. His ability to navigate complexities and deliver robust solutions has consistently propelled businesses toward growth and market dominance.<br />
                        As a trusted advisor, Mr. Khan is committed to excellence, making him an invaluable asset to Aurega Real Estate L.L.C aiming to thrive in the dynamic and competitive markets of the Middle East & Canada.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team single main area end -->
@endsection("content")