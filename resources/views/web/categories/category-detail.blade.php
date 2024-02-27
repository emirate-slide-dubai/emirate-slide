@extends('layouts.web_include')

@section('title', 'Category')
@section("meta_title","Custom Boxes UK | Custom Packaging at Wholesale | Best ")
@section("meta_desctipiton","Best Custom Boxes UK manufacture and supply almost all kinds of custom packaging boxes services your business may require. Get Your Quote now")

@section('service-active', 'active')

@section('view-area')
    
     <!--================Banner Area =================-->
     <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h2>Categories</h2>
                <p>See what we do best</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    
     <!--================Feature Area =================-->
     <section class="feature_area">
        <div class="container">
            <div class="c_title">

                <h2>we are here to provide</h2>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/img/icon/f-icon-1.png') }}" alt="icon-1">
                        </div>
                        <h4>Aluminum Folding Door</h4>
                        <p>Emirate Slide carries to Dubai the square-dynamic phenomenon of aluminum folding doors. </p>
                        <a class="button_style" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/img/icon/f-icon-2.png') }}" alt="">
                        </div>
                        <h4>Aluminum Sliding Door</h4>
                        <p>The aluminum sliding doors from Emirate Slide are a cool blend of modern style and easy use. </p>
                        <a class="button_style" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/img/icon/f-icon-3.png') }}" alt="">
                        </div>
                        <h4>Slim Folding Door</h4>
                        <p>You were thinking of making your home view more adorable, right? Well, look at stylish slim sliding doors!( SMALL SIDES ). </p>
                        <a class="button_style" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row feature_inner mt-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/img/icon/f-icon-3.png') }}" alt="">
                        </div>
                        <h4>Pergola For Restaurant</h4>
                        <p>Plan an attractive and inviting atmosphere for your restaurant with our designed.</p>
                        <a class="button_style" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/img/icon/f-icon-3.png') }}" alt="">
                        </div>
                        <h4>Portable Pergola</h4>
                        <p>Have an understanding of the freedom of outdoor living with our portable pergolas. </p>
                        <a class="button_style" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item custom_feature_item">
                        <div class="f_icon">
                            <img src="{{ asset('public/web_asset/img/icon/f-icon-3.png') }}" alt="">
                        </div>
                        <h4>Residential Pergola</h4>
                        <p>Convert your home’s outside area into a luxury zone with our residential pergolas.</p>
                        <a class="button_style" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Feature Area =================-->

   
@endsection