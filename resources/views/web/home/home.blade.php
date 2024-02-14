@extends('layouts.web_include')

@section('title', 'Custom Boxes UK | Custom Packaging at Wholesale | Best')
@section("meta_title","Custom Boxes UK | Custom Packaging at Wholesale | Best ")
@section("meta_desctipiton","Best Custom Boxes UK manufacture and supply almost all kinds of custom packaging boxes services your business may require. Get Your Quote now")
@section('home-active', 'active')

@section('view-area')


    <!--================Slider Area =================-->
    <div id="demo" class="carousel main__header slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="6"></li>
            <li data-target="#demo" data-slide-to="7"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('public/web_asset/categories/sliding-door.webp') }}" alt="Los Angeles" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-1.webp') }}" alt="Chicago" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-2.webp') }}" alt="New York" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-3.webp') }}" alt="New York" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-4.webp') }}" alt="New York" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-5.webp') }}" alt="New York" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-6.webp') }}" alt="New York" width="1100"
                    height="500">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('public/web_asset/categories/sliding-door-7.webp') }}" alt="New York" width="1100"
                    height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!--================End Slider Area =================-->

    <!--================Feature Area =================-->
    <section class="feature_area">
        <div class="container">
            <div class="c_title">
                <h2 style="font-family: Wardrum"><b>We are here to provide</b></h2>
            </div>
            <div class="row feature_inner">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px"
                                src="{{ asset('public/web_asset/categories/aluminum-folding-door_1.webp') }}" alt="">
                        </div>
                        <h4>Aluminum Folding Door</h4>
                        <p> Emirate Slide carries to Dubai the square-dynamic phenomenon of aluminum folding doors. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px"
                                src="{{ asset('public/web_asset/categories/sliding-door.webp') }}" alt="">
                        </div>
                        <h4>Aluminum Sliding Door</h4>
                        <p>The aluminum sliding doors from Emirate Slide are a cool blend of modern style and easy use. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-sliding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px"
                                src="{{ asset('public/web_asset/categories/slim-folding-door-1.webp') }}" alt="">
                        </div>
                        <h4>Slim Folding Door</h4>
                        <p>Emirate Slide’s slim folding doors are all about simple luxury. Their thin frames... </p>
                        <a class="button_style" href="{{ url('category/slim-folding-door') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->

    <!--================The best slider Area =================-->
    <section class="best_3d_area">
        <div class="left_3d">
            <div class="shap_slider_inner owl-carousel">
                <div class="item">
                    <h4>“They are the great”</h4>
                    <p class="text-justify m-1">Thank God we choose Emirate Slide for our project! They beat expectations
                        with great service and new solutions. The work was smooth, and the outcome is wonderful. Highly
                        recommend their expertise!.</p>
                    <div class="media">
                        {{-- <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt=""> --}}
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
                        {{-- <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt=""> --}}
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
                        {{-- <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt=""> --}}
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
                        {{-- <img src="{{ asset('public/web_asset/img/team/people/people-5.jpg') }}" alt=""> --}}
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
                        things great. Our refreshing products show our commitment. The Doors of <a href="{{ url('/') }}">Emirate Slide</a> is super
                        stable, displaying our smart work. The Aluminum Sliding Door is both fashionable and strong, giving
                        the look that we care about good design. The Slim Folding Door is deluxe and saves space – that’s
                        our brilliant side! We have great Pergolas, like the one for restaurants that make places look
                        charming. Our Portable Pergola is bendable, and the Residential Pergola provides a style-like home.
                        We take on challenges with courage, making sure our doors not only meet but also go above what
                        people think in the world of cool buildings. </p>
                </div>
            </div>
        </div>
    </section>
    <!--================End The best slider Area =================-->
<section class="container mt-5" style="margin-top: 7rem">
    <div class="row">
        <div class="right_text col-12">
         <div class="right_text_inner">
                <div class="l_title text-center pb-3">
                    <h2>Carry Nature in Your Zone</h2>
                </div>
                <p class="text-justify" style="color: #7c8d93">Take the grace of the garden to your neighborhood for a sunny and welcoming air. With the <a href="https://emirateslide.com/category/aluminum-sliding-door"> sliding doors</a>, you can experience natural and fresh air, natural brightness, and passion whenever you charm. A folding door can fit any spot in your house and bring a happy mood through natural light and fresh air. Install a shelter or screen to oversight sunlight or carry insects at the loch, and establish an enjoyable setting. </p>
        </div>
    </div>

    </div>
</section>
    <!--================Team People Area =================-->
    <section class="team_people_area mt-3 mb-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="team_people_text">
                        <div class="l_title pb-3">
                            <h6>Discover the features</h6>
                            <h2>We build a great team of strong people.</h2>
                        </div>
                        <p class="text-justify">At Emirate Slide, we take dignity in combining a powerful and brilliant
                            team of individuals. Our team is comprised of exceptional people who can bring the idea to
                            reality. We work fine to attain our goal and we trip success for the company. The Emirate Slide
                            team is our main heart because their contributing ideas for the company lead us to make better
                            decisions. We believe combining strength and a team of great people we can build a world where
                            you can live the life you've thought of, surrounded by the luxury you've aspired to.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="row" style="text-align: center;">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                                <div class="team_img_item">
                                    <a href="{{ url('about-us') }}">
                                        <img style="height:286px"
                                        class="img-fluid"
                                            src="{{ asset('public/web_asset/categories/slim-folding-door-2.webp') }}" alt="blog-2-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Team People Area =================-->

    <!--================New Form Code start here =================-->
    <section class="process-form p-3" style="background-image: linear-gradient(to right, #6fbcfe 0%, #998dff 51%, #6fbcfe 100%) !important;">
    {{-- <section class="process-form p-3" id="our_process_bg"> --}}
        <div class="container">
            <div class="row mb-3 mt-3" style="justify-content: center">
                <div class="section-heading">
                    <h4 class="section-title"> <b>OUR PROCESS</b></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 mt-3">
                    <div class="timeline">
                        <div class="container1 right">
                            <div class="content">
                                <h6 style="font-size: 13px">1. Online Support</h6>
                                <p class="steps_p">We offer free online support, for all the arrangements and our expert
                                    agent will help you to provide with what you are looking for.</p>
                            </div>
                        </div>
                        <div class="container1 right">
                            <div class="content">
                                <h6 style="font-size: 13px">2. Free Estimation </h6>
                                <p class="steps_p">We offer Free Online Estimation on all the arrangements, so if you wish
                                    to proceed with the project, we will design your whole project from start and get your
                                    approval on it to proceed further.</p>
                            </div>
                        </div>
                        <div class="container1 right">
                            <div class="content">
                                <h6 style="font-size: 13px">3. Payment Process</h6>
                                <p class="steps_p">We only demand customer to proceed with the project. Once the amount is
                                    final and you are sure in what you were looking for. We just need your approval to
                                    proceed. If you wish to change anything we will do accordingly.</p>
                            </div>
                        </div>
                        <div class="container1 right">
                            <div class="content">
                                <h6 style="font-size: 13px">4. Installing</h6>
                                <p class="steps_p">After having your approval on all the things and the project amount is
                                    refined, we proceed further to the next step of installing the doors where our expert
                                    and skillful team take care of customer’s requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 justify-content-center mb-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="form__wrapper mt-3">
                                    <div class="form__banner">
                                        <h3 style="color: black;text-align: center;margin-top: 5px;">
                                            <p style="font-size: 22px" class="text-center">GET A FREE QUOTE</p>
                                        </h3>
                                    </div>
                                    <form class="form-horizontal" method="POST" style="margin-top:3pc"
                                        id="ProductQuote" action="{{ url('/store-contact') }}">
                                        @csrf
                                        <br>
                                        <div class="form-group">
                                            @if (Session::has('success'))
                                                <div class="alert alert-success alert-dismissible fade show"
                                                    role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            <div class="col-sm-12">
                                                <select class="form-control" name="category_name" required>
                                                    <option hidden>--select category--</option>
                                                    <option value="Aluminum Folding Door">Aluminum Folding Door</option>
                                                    <option value="Aluminum Sliding Door">Aluminum Sliding Door</option>
                                                    <option value="Slim Folding Door">Slim Folding Door</option>
                                                    <option value="Pergola For Restaurant">Pergola For Restaurant</option>
                                                    <option value="Portable Pergola">Portable Pergola</option>
                                                    <option value="Residential Pergola">Residential Pergola</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Your Name"
                                                    name="name" id="your_name" required="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="email" class="form-control" placeholder="Enter Email"
                                                    name="email" id="your_email" required="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" placeholder="Your Contact #"
                                                    name="phone" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="subject" required=""
                                                    value="" placeholder="Subject*">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <center>
                                                    <button class="submit_btn_style" style="color: black" type="submit">Send</button>
                                                </center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================New Form Code ends here =================-->




 <!--================Service Solution Area =================-->
 <section class="service_solution_area p_100" id="FAQS">
    <div class="container">
        <div class="row s_solution_inner">
            <div class="col-md-12 col-lg-12">
                <div class="s_solution_item">
                    <div class="l_title pb-0">
                        <img src="img/icon/title-icon.png" alt="">
                        <h6 id="faq_p">Discover the features</h6>
                        <h2 id="faq_h">Frequently Asked Questions</h2>
                    </div>
                    <div id="accordion" role="tablist" class="solution_collaps">
                        <div class="row">
                            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 m-1">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            DO YOU SELL WINDOWS SALES?
                                        <i class="minus">-</i>
                                        <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
    
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>  We don't sell windows personally. Still, we can attempt doors with windows according to your needs. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 m-1">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            DO YOU SELL INTERIOR DOORS?DO YOU SELL INTERIOR DOORS?
                                        <i class="minus">-</i>
                                        <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Yes, we offer interior doors, in design like Folding Doors and Sliding Doors.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 m-1">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            DO I NEED TO VISIT THE STUDIO BEFORE I RECEIVE A QUOTE?
                                        <i class="minus">-</i>
                                        <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>No need to visit the studio for a quote. Just email us, send a quote, or call us at +971 52 422 7221. Our professional agent will contact you promptly. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 m-1">
                                <div class="card-header" role="tab" id="headingfour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            DO I NEED TO BRING MEASUREMENTS AND PHOTOS?
                                        <i class="minus">-</i>
                                        <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> Giving measurements and photos is optional. You can share all details at once or choose a design you want to install from our website, and we'll handle the preparations accordingly. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 m-1">
                                <div class="card-header" role="tab" id="headingfive">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            DO I NEED TO HIRE AN ENGINEER?
                                        <i class="minus">-</i>
                                        <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>No need to hire an engineer. Our skilled workers will handle. Just give us a call to let us know you want to install the sliding door. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-xs-12 col-sm-12 col-md-6 col-lg-6 p-0 m-1">
                                <div class="card-header" role="tab" id="headingsix">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            FOLDING DOOR TIMELINE?
                                        <i class="minus">-</i>
                                        <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>  Installing a bi-fold door commonly takes a full working day, however the period may fluctuate based on multiplicity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Service Solution Area =================--> 




    <!--================Map Area =================-->
    <section class="world_map_area p_100">
        <div class="container">
            <div class="world_map_inner">
                <img class="img-fluid" src="{{ asset('web_asset/img/world-map.webp') }}" alt="">
                <div class="bd-callout">
                    <h3>Dubai Office</h3>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-3">
                            <b>Address</b>
                            <ul style="list-style-type: disc">
                                <li>Alquoz industrial area 4,<br> Behind emirates glass,<br> Warehouse # 6. <br /> United
                                    Arab Emirates</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 p-3">
                            <b>Contact Us</b>
                            <ul style="list-style-type: disc">
                                <li>
                                    <a style="color: black" href="tel:+971 52 422 7221">+971 52 422 7221</a>
                                </li>
                                <li>
                                    <a style="color: black" href="mailto:info@emirateslide.com">info@emirateslide.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!--================End Map Area =================-->


@endsection
