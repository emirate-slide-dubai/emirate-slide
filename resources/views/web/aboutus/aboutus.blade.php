@extends('layouts.web_include')

@section('title', 'About Us Our Goals | Emirate Slide LLC')
@section("meta_title","About Us Our Goals | Emirate Slide LLC")
@section("meta_desctipiton","Our vision is to make your life luxurious and finest. See about our company’s adventure, and how we achieve our goal through teamwork.")

@section('aboutus-active', 'active')

@section('view-area')

<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h3>About Us</h3>
            <p>Get to know us</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Challange Area =================-->
<section class="challange_area p_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="w-100" style="text-align: justify">
                    <div class="" style="padding-bottom: 15px">
                        <h4 class="aboutus_heading"><b>Our Companies Adventure </b></h4>
                    </div>
                    <p>  Let us take you back from where we started. We are Emirate Slide LLC and we looking to make an office where you can be glad of engaging in and the Villas that you can proud. We observe what actually you need and what is suitable for you, after analyzing it. We build the best area for you where you can take comfort.
                        We do have different variety of doors, such as doors that can be fold and doors that can be slide, these doors make your property superior and closer to the nature. 
                        <br><br>
                        {{-- ----------------------}}
                        <div class="video-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/PyoS0jgWzTw?si=twu4o6T-Z8R9Zhw-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                         </div>
                          
                          
                        {{-- ----------------------}}
                        <br> We do all the things by ourselves, from forming to installing, so you can count on our quality and maintenance.
                        We want to share our love with you. And really love what we are doing. Contact us today and let us know you dream so we can fulfill it.
                        At the <a href="{{ url('/') }}"> Emirate Slide </a>, we are devoted to providing top quality bi-folding doors, aluminum Sliding door, aluminum folding door, slim sliding door, pergola etc. All of our products are made by us and install by our own installation squad. So whether you want a luxury look on your house, office or restaurant folding doors will be the greatest option for you.                        
                        </p>
                        <br>
                        <h5><b>Vision</b></h5>
                        <p>Our doors are not just formal bi-folding glass doors – they are part of a wholestructure of movable walls. This structure gives our customers more advance and traditional choices; it gives more original results that crack the normal radius </p>    
                        <br>
                        <h5><b>Passion</b></h5>
                        <p>We will promise you to take on any kind of challenges you have. And we will try our very best to do whole things perfect. Our achievement is situated on how much happy you are with what we have done for you.</p>
                        <br>
                        <h5><b>Reliability</b></h5>
                        <p>After facing so many years of hardship we have gained the trust of this industry. Our finest and improving skill with the help of our skillful workers make us decent. Our fast and accurate engineering, through analysis, and fine materials impact in a beneficial ownership experience.</p>
                        <br>
                        <h5><b>Vision</b></h5>
                        <p>Our doors are not just formal bi-folding glass doors – they are part of a whole structure of movable walls. This structure gives our customers more advance and traditional choices; it gives more original results that crack the normal radius.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Challange Area =================-->

<!--================End We Are Company Area =================-->
<section class="talk_area">
    <div class="container">
        <div class="talk_text">
            <h4>Are you ready to talk?</h4>
            <a href="tel:+971 52 422 7221"> +971 52 422 7221</a><br>
            <a href="mailto:info@emirateslide.com">info@emirateslide.com</a>
        </div>
    </div>
</section>
<!--================End We Are Company Area =================-->
@endsection