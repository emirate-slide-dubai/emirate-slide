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
                        <h2 style="font-size: 1.6rem">Our Companies Adventure </h2>
                    </div>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Let us take you back from where we started. We are Emirate Slide LLC and we looking to make an office where you can be glad of engaging in and the Villas that you can proud. We observe what actually you need and what is suitable for you, after analyzing it. We build the best area for you where you can take comfort.
                        We do have different variety of doors, such as doors that can be fold and doors that can be slide, these doors make your property superior and closer to the nature. 
                        <br><br>
                        {{-- ----------------------}}
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/Yj2iELI6OeI?controls=0&autoplay=1&mute=1&playsinline=1&loop=1&playlist=Yj2iELI6OeI"></iframe>
                          </div>
                          
                          
                        {{-- ----------------------}}
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We do all the things by ourselves, from forming to installing, so you can count on our quality and maintenance.
                        We want to share our love with you. And really love what we are doing. Contact us today and let us know you dream so we can fulfill it.
                        At the <a href="{{ url('/') }}"> Emirate Slide </a>, we are devoted to providing top quality bi-folding doors, aluminum Sliding door, aluminum folding door, slim sliding door, pergola etc. All of our products are made by us and install by our own installation squad. So whether you want a luxury look on your house, office or restaurant folding doors will be the greatest option for you.                        
                        </p>
                        <br>
                       <b> <h5>Vision</h5></b>
                        <p>Our doors are not just formal bi-folding glass doors – they are part of a wholestructure of movable walls. This structure gives our customers more advance and traditional choices; it gives more original results that crack the normal radius </p>    
                        <br>
                       <b> <h5>Passion</h5></b>
                        <p>We will promise you to take on any kind of challenges you have. And we will try our very best to do whole things perfect. Our achievement is situated on how much happy you are with what we have done for you.</p>
                        <br>
                       <b> <h5>Reliability</h5></b>
                        <p>After facing so many years of hardship we have gained the trust of this industry. Our finest and improving skill with the help of our skillful workers make us decent. Our fast and accurate engineering, through analysis, and fine materials impact in a beneficial ownership experience.</p>
                        <br>
                       <b> <h5>Vision</h5></b>
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

 <!--================The best slider Area =================-->
 <section class="best_3d_area">
    <div class="left_3d">
        <div class="shap_slider_inner owl-carousel">
            <div class="item">
                <h4>“They are the great”</h4>
                <p class="text-justify m-1">They beat expectations
                    with great service and new solutions. The work was smooth, and the outcome is wonderful. Highly
                    recommend their expertise!.</p>
                <div class="media">
                    <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt="">
                    <div class="media-body">
                        <h5>Saad Bin Khalid</h5>
                        <h6>CEO Enterprise</h6>
                    </div>
                </div>
            </div>
            <div class="item">
                <h4>“The service was great”</h4>
                <p class="text-justify m-1">The service was great from beginning to end. The windows and doors were budget-friendly and they don't compromise on the quality.</p>
                <div class="media">
                    <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt="">
                    <div class="media-body">
                        <h5>Stuart Finali</h5>
                        <h6>HOD of Real Estate</h6>
                    </div>
                </div>
            </div>
            <div class="item">
                {{-- <h4>“They are the great”</h4> --}}
                <p class="text-justify m-1"> لقد قام هؤلاء الرجال بعمل ممتاز دون تقديم أي أعذار. كان العمل جيدًا ومنعشًا</p>

                <div class="media">
                    <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt="">
                    <div class="media-body">
                        <h5>عبدالله بن عمير</h5>
                        <h6> مدير المطعم </h6>
                    </div>
                </div>
            </div>
            <div class="item">
                {{-- <h4>“They are the great”</h4> --}}
                <p class="text-justify m-1">كان العمال على درجة عالية من المهارة والأخلاق. وهم يعرفون كيفية التعامل مع العملاء. علاوة على ذلك، كان المشروع رائعًا. ينصح به بشده.</p>

                <div class="media">
                    <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt="">
                    <div class="media-body">
                        <h5>يوسف بن سيف</h5>
                        <h6>صاحب جمعية الإسكان</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="right_text">
        <div class="right_text_inner">
            <div class="text_3d pt-5">
                <div class="l_title pb-3">
                    <h6>Discover the features</h6>
                    <h2>Winning Challenges with New Ways</h2>
                </div>
                <p class="text-justify">At Emirate Slide, we like challenges and work hard to make
                    things great. Our refreshing products show our commitment. The Doors of Emirate Slide is super
                    stable, displaying our smart work. The Aluminum Sliding Door is both fashionable and strong, giving
                    the look that we care about good design. The <a href="https://emirateslide.com/category/slim-folding-door"> Slim Folding Door</a> is deluxe and saves space – that’s
                    our brilliant side! We have great Pergolas, like the one for restaurants that make places look
                    charming. Our Portable Pergola is bendable, and the Residential Pergola provides a style-like home.
                    We take on challenges with courage, making sure our doors not only meet but also go above what
                    people think in the world of cool buildings. </p>
            </div>
            {{-- <div class="shap_mobile">
                <img src="{{ asset('public/web_asset/banner_images/banner-3.jpg') }}" alt="">
            </div> --}}
        </div>
    </div>
</section>
<!--================End The best slider Area =================-->
    
@endsection