@extends('layouts.web_include')

@section('title', 'Interactive Pergola in Dubai UAE | Emirate Slide LLC')
@section("meta_title","Interactive Pergola in Dubai UAE | Emirate Slide LLC")
@section("meta_desctipiton","Emirate Slide’s Interactive Pergolas are made from the finest material which is budget-friendly, making them unavoidable to buy.")

@section('category-active', 'active')

@section('view-area')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h3>Interactive Pergola</h3>
                <p>See what we do best</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                    <div class="content_area text-justify p-3">
                        <h4>
                            <b>Interactive Pergola </b>
                        </h4>
                        <p id="para_spacing_alm_sli">
                            Have an understanding of the freedom of outdoor living with our interactive pergolas. These
                            bendable designs give a flexible way of creating shade in different settings. Easy to assemble
                            and disassemble, our interactive pergolas offer the best comfort for the viewers. Most customers
                            can’t get the best view of nature but with the help of our <a href="{{ url('category/interactive-pergola') }}">Interactive Pergolas</a>, you will have the
                            most refreshing view. Whether at the beach, park, or backyard, take your shade with you and
                            enjoy the outdoors effortlessly.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                    <div class="image_area">
                        <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola-1.webp') }}"
                            alt="portable-pergola">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                    <div class="image_area">
                        <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola-2.webp') }}"
                            alt="portable-pergola">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 p-3">
                    <div class="image_area">
                        <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola.webp') }}"
                            alt="portable-pergola">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
