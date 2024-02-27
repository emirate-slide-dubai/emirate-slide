@extends('layouts.web_include')

@section('title', 'Our Portfolio | Emirate Slide LLC')
@section("meta_title","Our Portfolio | Emirate Slide LLC")
@section("meta_desctipiton","See Our Portfolio. How we did work professionally, and how we handle tough situation. Call us now! At +971 52 422 7221. For easy and fast work.")

@section('portfolio-active', 'active')

@section('view-area')

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h3>Portfolio</h3>
                <p>See our best work</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->


    <div class="container">
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link button_style active" id="tab_font_style" data-toggle="tab" href="#home">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button_style" id="tab_font_style" data-toggle="tab" href="#menu1">Slimline Sliding Door</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button_style" id="tab_font_style" data-toggle="tab" href="#menu2">Slim Folding Door</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button_style" id="tab_font_style" data-toggle="tab" href="#menu3">Aluminum Folding Door</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button_style" id="tab_font_style" data-toggle="tab" href="#menu4">Portable Pergola</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button_style" id="tab_font_style" data-toggle="tab" href="#menu5">Residential Pergola</a>
            </li>
            <li class="nav-item">
                <a class="nav-link button_style" id="tab_font_style" data-toggle="tab" href="#menu6">Pergola For Restaurant</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            {{-- ============================ --}}
            {{-- ALL --}}
            {{-- ============================ --}}

            <div id="home" class="container tab-pane active"><br>
                <h3>All</h3>
                <hr>
                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-1.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-2.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item  brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-3.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-4.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-5.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item design arc col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-6.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item design arc col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-7.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-1.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-2.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item  brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-3.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-4.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door_5.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door_1.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door_2.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door-3.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item  brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door-4.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola.webp') }}"
                                alt="portable-pergola">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola-1.webp') }}"
                                alt="portable-pergola">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola-2.webp') }}"
                                alt="portable-pergola">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/residential-pergola.webp') }}"
                                alt="residential-pergola">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/residential-pergola-1.webp') }}"
                                alt="residential-pergola">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/residential-pergola-2.webp') }}"
                                alt="residential-pergola">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/pergola-for-restaurant.webp') }}"
                                alt="pergola-for-restaurant">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/pergola-for-restaurant-1.webp') }}"
                                alt="pergola-for-restaurant">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->
            </div>

            {{-- ============================ --}}
            {{-- Aluminum Sliding Door --}}
            {{-- ============================ --}}
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>Slimline Sliding Door</h3>
                <hr>
                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-1.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-2.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item  brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-3.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-4.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-5.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item design arc col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-6.webp') }}"
                                alt="sliding-door">
                        </div>
                        <div class="ms_p_item design arc col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/sliding-door-7.webp') }}"
                                alt="sliding-door">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->

            </div>
            {{-- ============================ --}}
            {{-- Slim Sliding Door --}}
            {{-- ============================ --}}


            <div id="menu2" class="container tab-pane fade"><br>
                <h3>Slim Folding Door</h3>
                <hr>
                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-1.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-2.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item  brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-3.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door-4.webp') }}"
                                alt="slim-folding-door">
                        </div>
                        <div class="ms_p_item col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/slim-folding-door_5.webp') }}"
                                alt="slim-folding-door">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->

            </div>
            {{-- ============================ --}}
            {{-- Aluminum Folding Door --}}
            {{-- ============================ --}}


            <div id="menu3" class="container tab-pane fade"><br>
                <h3>Aluminum Folding Door</h3>
                <hr>
                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door_1.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door_2.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door-3.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                        <div class="ms_p_item  brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/aluminum-folding-door-4.webp') }}"
                                alt="aluminum-folding-door_1">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->
            </div>

            {{-- ============================ --}}
            {{-- Portable Pergola --}}
            {{-- ============================ --}}

            <div id="menu4" class="container tab-pane fade"><br>
                <h3>Portable Pergola</h3>
                <hr>
                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola.webp') }}"
                                alt="portable-pergola">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola-1.webp') }}"
                                alt="portable-pergola">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/portable-pergola-2.webp') }}"
                                alt="portable-pergola">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->
            </div>
            {{-- ============================ --}}
            {{-- Residential Pergola --}}
            {{-- ============================ --}}

            <div id="menu5" class="container tab-pane fade"><br>
                <h3>Residential Pergola</h3>
                <hr>

                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/residential-pergola.webp') }}"
                                alt="residential-pergola">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/residential-pergola-1.webp') }}"
                                alt="residential-pergola">
                        </div>
                        <div class="ms_p_item brand img-fluid col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/residential-pergola-2.webp') }}"
                                alt="residential-pergola">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->
            </div>

            {{-- ============================ --}}
            {{-- Pergola For Restaurant --}}
            {{-- ============================ --}}

            <div id="menu6" class="container tab-pane fade"><br>
                <h3>Pergola For Restaurant</h3>
                <hr>
                <!--================Portfolio Area =================-->
                <section class="portfolio_area">
                    <div class="ms_portfolio_inner row">
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/pergola-for-restaurant.webp') }}"
                                alt="pergola-for-restaurant">
                        </div>
                        <div class="ms_p_item brand arc photo col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img class="img-fluid" src="{{ asset('public/web_asset/categories/pergola-for-restaurant-1.webp') }}"
                                alt="pergola-for-restaurant">
                        </div>
                    </div>
                </section>
                <!--================End Portfolio Area =================-->
            </div>
        </div>
    </div>





@endsection
