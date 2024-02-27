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
                            <img src="{{ asset('web_asset/categories/category-logos/slimline-sliding-door-logo.webp') }}" alt="slimline-sliding-door-logo">
                        </div>
                        <h4>Aluminum Slimline Sliding Door</h4>
                        <p>The aluminum slimline sliding doors from Emirate Slide are a cool blend.. </p>
                        <a class="button_style" href="{{ url('/category/slimline-sliding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid category_img" src="{{ asset('web_asset/categories/aluminum-folding-door-3.webp') }}" alt="aluminum-folding-door-logo">
                        </div>
                        <h4>Aluminum Folding Door</h4>
                        <p>Emirate Slide carries to Dubai the square-dynamic phenomenon of aluminum folding doors. </p>
                        <a class="button_style" href="{{ url('/category/aluminum-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid category_img" src="{{ asset('web_asset/categories/slim-folding-door-2.webp') }}" alt="slim-folding-door-logo">
                        </div>
                        <h4>Slim Folding Door</h4>
                        <p>You were thinking of making your home view more adorable, right? Well, look at slim sliding doors. </p>
                        <a class="button_style" href="{{ url('/category/slim-folding-door') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid category_img" src="{{ asset('web_asset/categories/pergola-for-restaurant.webp') }}" alt="pergola-restaurant-logo">
                        </div>
                        <h4>Pergola For Restaurant</h4>
                        <p>Plan an attractive and inviting atmosphere for your restaurant with our designed.</p>
                        <a class="button_style" href="{{ url('category/pergola-for-restaurant') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" src="{{ asset('web_asset/categories/category-logos/interactive-pergola-logo.webp') }}" alt="interactive-pergola-logo">
                        </div>
                        <h4>Interactive Pergola</h4>
                        <p>Have an understanding of the freedom of outdoor living with our portable pergolas. </p>
                        
                        <a class="button_style" href="{{ url('/category/interactive-pergola') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid category_img" src="{{ asset('web_asset/categories/residential-pergola.webp') }}" alt="residential-pergola">
                        </div>
                        <h4>Residential Pergola</h4>
                        <p>Convert your home’s outside area into a luxury zone with our residential pergolas.</p>
                        <a class="button_style" href="{{ url('/category/residential-pergola') }}">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img class="img-fluid" src="{{ asset('web_asset/categories/category-logos/automatic-vertical-door-logo.webp') }}" alt="residential-pergola">
                        </div>
                        <h4>Automatic Vertical Sliding Doors</h4>
                        <p>Convert your home’s outside area into a luxury zone with our residential pergolas.</p>
                        <a class="button_style" href="{{ url('/category/automatic-vertical-sliding-doors') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================End Feature Area =================-->

    <!--================Circle Chart Area =================-->

    <section class="p-5">
        <div class="container">
            <div class="row" style="text-align: center">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="chart-container" id="chart-container-1">
                        <svg class="chart" id="chart-1" width="100" height="100">
                            <circle class="outer" cx="50" cy="50" r="40"></circle>
                            <circle class="inner" cx="50" cy="50" r="40"></circle>
                            <text class="progress-text" x="50" y="50" text-anchor="middle" dominant-baseline="middle">0%
                                <tspan x="50" dy="1.2em">Hard Work</tspan></text>
                        </svg>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="chart-container" id="chart-container-2">
                        <svg class="chart" id="chart-2" width="100" height="100">
                            <circle class="outer" cx="50" cy="50" r="40"></circle>
                            <circle class="inner" cx="50" cy="50" r="40"></circle>
                            <text class="progress-text" x="50" y="50" text-anchor="middle" dominant-baseline="middle">0%
                                <tspan x="50" dy="1.2em">Creativity</tspan></text>
                        </svg>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="chart-container" id="chart-container-3">
                        <svg class="chart" id="chart-3" width="100" height="100">
                            <circle class="outer" cx="50" cy="50" r="40"></circle>
                            <circle class="inner" cx="50" cy="50" r="40"></circle>
                            <text class="progress-text" x="50" y="50" text-anchor="middle" dominant-baseline="middle">0%
                                <tspan x="50" dy="1.2em">Good Luck</tspan></text>
                        </svg>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="chart-container" id="chart-container-4">
                        <svg class="chart" id="chart-4" width="100" height="100">
                            <circle class="outer" cx="50" cy="50" r="40"></circle>
                            <circle class="inner" cx="50" cy="50" r="40"></circle>
                            <text class="progress-text" x="50" y="50" text-anchor="middle" dominant-baseline="middle">0%
                                <tspan x="50" dy="1.2em">Satisfaction</tspan></text>
                        </svg>
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