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
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('web_asset/categories/aluminum-folding-door_1.webp') }}" alt="">
                        </div>
                        <h4>Aluminum Folding Door</h4>
                        <p>Emirate Slide carries to Dubai the square-dynamic phenomenon of aluminum folding doors. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('web_asset/categories/sliding-door.webp') }}" style="width: 240px;height: 110px" alt="">
                        </div>
                        <h4>Aluminum Sliding Door</h4>
                        <p>The aluminum sliding doors from Emirate Slide are a cool blend of modern style and easy use. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-sliding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('web_asset/categories/slim-folding-door.webp') }}" alt="">
                        </div>
                        <h4>Slim Folding Door</h4>
                        <p>You were thinking of making your home view more adorable, right? Well, look at slim sliding doors. </p>
                        <a class="button_style" href="{{ url('/category/slim-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('web_asset/categories/pergola-for-restaurant-1.webp') }}" alt="">
                        </div>
                        <h4>Pergola For Restaurant</h4>
                        <p>Plan an attractive and inviting atmosphere for your restaurant with our designed.</p>
                        <a class="button_style" href="{{ url('category/pergola-for-restaurant') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('web_asset/categories/portable-pergola.webp') }}" alt="">
                        </div>
                        <h4>Portable Pergola</h4>
                        <p>Have an understanding of the freedom of outdoor living with our portable pergolas. </p>
                        
                        <a class="button_style" href="{{ url('/category/portable-pergola') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" style="width: 240px;height: 110px" src="{{ asset('web_asset/categories/residential-pergola.webp') }}" alt="residential-pergola">
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

    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
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