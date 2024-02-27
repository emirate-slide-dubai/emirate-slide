@extends('layouts.web_include')

@section('title', 'Automatic Vertical Sliding Doors | Emirate Slide LLC')
@section('meta_title', 'Automatic Vertical Sliding Doors | Emirate Slide LLC')
@section('meta_desctipiton',
    'Emirate Slide brings to you Automatic Vertical Sliding Doors in Dubai. This is easy to use
    without much effort.')


@section('category-active', 'active')

@section('view-area')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h3>Automatic Vertical Sliding Doors</h3>
                <p>See what we do best</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="content_area text-justify ">
                        <h4 style="font-size:1.2rem">

                            Emirate Slide <b> Automatic Vertical Sliding Doors:</b>
                        </h4>
                        <p id="para_spacing_alm_sli">

                            In Dubai, Emirate Slide LL provides <a href="{{ url('category/automatic-vertical-sliding-doors') }}"> Automatic Vertical Sliding</a> Doors, giving both ease &
                            elegance to individual spaces across the city. These doors are intended to open and close
                            vertically, which not only saves area but also gives the taste of modern houses, offices, and
                            commercial buildings. Moreover, they’re designed to work smoothly and they’re good enough for
                            the rough environment. With customization, customers can modify them according to their zone and
                            preferences, whether it’s for a tiny room or a stylish residential setting.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="image_area">
                        <img class="img-fluid" src="{{ asset('public/web_asset/categories/automatic-vertical-sliding-door-3.webp') }}"
                            alt="automatic-vertical-sliding-door">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                    <div class="image_area">
                        <img class="img-fluid" src="{{ asset('public/web_asset/categories/automatic-vertical-sliding-door.webp') }}"
                            alt="automatic-vertical-sliding-door">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                    <div class="image_area">
                        <img class="img-fluid" src="{{ asset('public/web_asset/categories/automatic-vertical-sliding-door-1.webp') }}"
                            alt="automatic-vertical-sliding-door">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                    <div class="content_area text-justify ">
                        <h4 style="font-size:1.2rem" class="mt-3">
                            <b>
                                Smoothness & Elegance </b>
                        </h4>
                        <p id="para_spacing_alm_sli">

                            With <a href="{{ url('/') }}"> Emirate Slide</a>, users in Dubai can feel the smoothness & elegance of automated vertical
                            sliding doors, which are manufactured from high-quality materials. Whether it’s for luxury
                            villas or for improving your office view. It will work smoothly and give you the best experience
                            ever!.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
