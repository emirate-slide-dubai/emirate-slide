@extends('layouts.web_include')

@section('title', 'Contact')

@section('contact-active','active')

@section('view-area')


<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h2>Contact</h2>
            <p>Get in touch</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

       <!--================Get in Touch Area =================-->
       <section class="get_in_touch_area p_100">
        <div class="container">
            <div class="row get_touch_inner">
                <div class="col-lg-6">
                    <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                        </div>
                        <div class="form-group col-lg-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="touch_details">
                        <div class="l_title">
                            <img src="{{ asset('web_asset/img/icon/title-icon.png') }}" alt="">
                            <h6>Say hello</h6>
                            <h2>Get in touch, send us an e-mail or call us</h2>
                        </div>
                        <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                        <a href="tel:+45237395593232"><h5>Call us now</h5></a>
                        <a href="tel:+45237395593232"><h4>+452373 95593 232</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Get in Touch Area =================-->
    
    <!--================Map Area =================-->
    <section class="contact_map_area">
        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.0215943318326!2d74.34432787469659!3d31.5235668469857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905ba90cc9631%3A0xaeb19bbf2ee3b191!2sMain%20Market%20Gulberg!5e0!3m2!1sen!2s!4v1701805023499!5m2!1sen!2s" width="800" height="600" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="map_location_box">
            <div class="container">
                <div class="map_l_box_inner">
                    <div class="bd-callout">
                        <h3>Gibraltar Office</h3>
                        <p>Casemates Square, no253 <br /> United kingdom</p>
                        <h4><a href="#">+453678 9283 559</a> <a href="#">contact@template.com</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Map Area =================-->
    

@endsection