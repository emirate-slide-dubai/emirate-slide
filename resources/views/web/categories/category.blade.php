@extends('layouts.web_include')

@section('title', 'Categories | Emirate Slide LLC')
@section("meta_title","Categories | Emirate Slide LLC")
@section("meta_desctipiton","Our Popular Category: Slim Sliding Doors| Slim Folding Doors | Portable Pergola | Pergola for Restaurant | Residential Pergola")

@section('category-active', 'active')

@section('view-area')
    
     <!--================Banner Area =================-->
     <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h3>Categories</h3>
                <p>See what we do best</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    
     <!--================Feature Area =================-->
     <section class="feature_area">
        <div class="container">
            <div class="c_title">
                <h2 style="font-family: Wardrum">We are here to provide</h2>
            </div>
            <div class="row feature_inner">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('public/web_asset/categories/aluminum-folding-door_1.webp') }}" alt="">
                        </div>
                        <h4>Aluminum Folding Door</h4>
                        <p>Emirate Slide carries to Dubai the square-dynamic phenomenon of aluminum folding doors. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/categories/sliding-door.webp') }}" style="width: 240px;height: 110px" alt="">
                        </div>
                        <h4>Aluminum Sliding Door</h4>
                        <p>The aluminum sliding doors from Emirate Slide are a cool blend of modern style and easy use. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-sliding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('public/web_asset/categories/slim-folding-door.webp') }}" alt="">
                        </div>
                        <h4>Slim Folding Door</h4>
                        <p>You were thinking of making your home view more adorable, right? Well, look at slim sliding doors. </p>
                        <a class="button_style" href="{{ url('/category/slim-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('public/web_asset/categories/pergola-for-restaurant-1.webp') }}" alt="">
                        </div>
                        <h4>Pergola For Restaurant</h4>
                        <p>Plan an attractive and inviting atmosphere for your restaurant with our designed.</p>
                        <a class="button_style" href="{{ url('category/pergola-for-restaurant') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('public/web_asset/categories/portable-pergola.webp') }}" alt="">
                        </div>
                        <h4>Portable Pergola</h4>
                        <p>Have an understanding of the freedom of outdoor living with our portable pergolas. </p>
                        
                        <a class="button_style" href="{{ url('/category/portable-pergola') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('public/web_asset/categories/residential-pergola.webp') }}" alt="residential-pergola">
                        </div>
                        <h4>Residential Pergola</h4>
                        <p>Convert your home’s outside area into a luxury zone with our residential pergolas.</p>
                        <a class="button_style" href="{{ url('/category/residential-pergola') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================End Feature Area =================-->

    <!--================Circle Chart Area =================-->

    <section class="circle_chart_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="circle_progress circular style-polygon" data-percentage="75" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                        <div class="circle_progress_inner"><canvas width="175" height="175"></canvas>
                            <strong>75<i>%</i></strong>
                            <h4>Hard work</h4>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="circle_progress circular style-polygon" data-percentage="83" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                        <div class="circle_progress_inner"><canvas width="175" height="175"></canvas>
                            <strong>83<i>%</i></strong>
                            <h4>Creativity</h4>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="circle_progress circular style-polygon" data-percentage="25" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                        <div class="circle_progress_inner"><canvas width="175" height="175"></canvas>
                            <strong>63<i>%</i></strong>
                            <h4>Good luck</h4>
                        </div> 
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="circle_progress circular style-polygon" data-percentage="95" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                        <div class="circle_progress_inner"><canvas width="175" height="175"></canvas>
                            <strong>95<i>%</i></strong>
                            <h4>Satisfaction</h4>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Circle Chart Area =================-->
    

    <!--================Service Solution Area =================-->
 <section class="service_solution_area p_100">
    <div class="container">
        <div class="row s_solution_inner">
            <div class="col-lg-6">
                <div class="s_solution_item">
                    <div class="l_title">
                        <h6 style="color: white">Discover the features</h6>
                        <h2 style="color: white">Frequently Asked Questions</h2>
                    </div>
                    <div id="accordion" role="tablist" class="solution_collaps">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How much space is needed for installing the sliding door?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p> Sliding Doors are the simple and easy option to preserve your time and space. These doors required only a decent space to adjust, so they can work smoothly without any obstructions. Moreover, they are made of fine material which is totally budget-friendly. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can I manage sliding doors, additionally are they easy to handle?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sliding Doors are more comfortable and easy to manage. The slim structure and fine windows shows the luxury look and the function of the door is so smooth. Lubrication between the rollers and jamb work without any obstructions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Do your doors can maintain high degree temperatures or they’re fire resistant?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No, they’re not fire resistant. As the melting point of an aluminum is 660.32° Celsius .</p>
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


@endsection