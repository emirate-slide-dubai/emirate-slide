@extends('layouts.web_include')

@section('title', 'Contact | UAE Largest Company | Emirate Slide LLC')
@section("meta_title","Custom Boxes UK | Custom Packaging at Wholesale | Best ")
@section("meta_desctipiton","Address: Alquoz Industrial Area 4, Behind Emirates Glass, Warehouse # 6. UAE | Contact Us: +971 52 422 7221 | Email: info@emirateslide.com")

@section('contact-active','active')

@section('view-area')


<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h3>Contact</h3>
            <p>Get in touch</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

       <!--================Get in Touch Area =================-->
       <section class="get_in_touch_area p_100">
        <div class="container">
            <div class="row get_touch_inner">
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
                                                <select class="form-control" name="category_name" required="">
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
                                                <input type="number" class="form-control" placeholder="Your phone #"
                                                    name="phone" required="" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="subject" required=""
                                                    value="" required="" placeholder="Subject*">
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
                                                    <button type="submit"
                                                        class="submit_btn_style" style="color: black">Send</button>
                                                </center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12">
                    <div class="touch_details">
                        <div class="l_title">
                            <img src="{{ asset('public/web_asset/img/icon/title-icon.png') }}" alt="">
                            <h6>Say hello</h6>
                            <h2>Get in touch, send us an message or call us</h2>
                        </div>
                        <a href="tel:+971524227221"><h5>Call us now</h5></a>
                        <a href="tel:+971524227221"><h4>+971 52 422 7221</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Get in Touch Area =================-->
    
    <!--================Map Area =================-->
    <section class="contact_map_area mb-3">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7225.252821066968!2d55.218548339061485!3d25.114504675640354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6be21cd7e01d%3A0x8b4e52dca3a461f5!2sEmirates%20Glass%20LLC!5e0!3m2!1sen!2s!4v1705776583681!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map_location_box">
            <div class="container">
                <div class="map_l_box_inner">
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
                    </div>
                </div>
            </div>
        </div>
    <!--================End Map Area =================-->
    

@endsection