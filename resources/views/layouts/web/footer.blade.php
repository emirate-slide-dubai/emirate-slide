<!--================Footer Area =================-->
<footer class="footr_area mt-3">
    <div class="footer_widget_area">
        <div class="container">
            <div class="row footer_widget_inner">
                <div class="col-lg-4 col-sm-6">
                    <aside class="f_widget f_about_widget">
                        <img src="{{ asset('public/web_asset/logos/main_logo__.webp') }}" alt="img-fluid" style="height: 90px">
                        <p style="color: black">In Dubai, Emirate Slide has these effortless aluminum doors with a unique appearance. Whether you want an area-preserving door, a great sight, or a silky design, Emirate Slide has a good one for you.</p>
                    </aside>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <aside class="">
                        <div class="useful_links">
                            <h3>Useful Links</h3>
                    </div>
                        <ul style="list-style: disc;">
                             <li><a class="colour" href="{{ url('/terms-condition') }}">Terms & Condition</a></li> 
                             <li><a class="colour" href="{{ url('/#FAQS') }}">FAQS</a></li>   
                        </ul>
                        <hr>
                        <h6> <b>Our Popular Categories</b></h6>
                        <ul class="mt-3" style="list-style: disc;">
                            <li><a style="color: black;" href="{{ url('/category/aluminum-folding-door')  }}">Aluminum Folding Door</a></li>
                            <li><a style="color: black;" href="{{ url('/category/aluminum-sliding-door')  }}">Aluminum Sliding Door</a></li>
                            <li><a style="color: black;" href="{{ url('/category/slim-folding-door')      }}">Slim Folding Door</a></li>
                            <li><a style="color: black;" href="{{ url('category/pergola-for-restaurant')  }}">Pergola For Restaurant</a></li>
                            <li><a style="color: black;" href="{{ url('/category/portable-pergola')       }}">Portable Pergola</a></li>
                            <li><a style="color: black;" href="{{ url('/category/residential-pergola')    }}">Residential Pergola</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <aside class="f_widget f_subs_widget">
                        <div class="useful_links">
                            <h3>Social Media</h3>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <ul style="display: inline-flex">
                                    <li><a class="position_links" href="https://www.facebook.com/Emirateslide?mibextid=2JQ9oc"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="position_links" href="https://www.instagram.com/emirateslidellc?igsh=bWNqMHlwemZyd3A0"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="position_links" href="https://youtube.com/@EmirateSlide?si=miWOJYG9qMLzB1I7"><i class="fa fa-youtube"></i></a></li>
                                    <li><a class="position_links" href="https://pin.it/3KVynthFF"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <ul style="display: inline-flex">
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid" src="{{ asset('public/web_asset/logos/mastercard.webp') }}" alt=""></li>
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid" src="{{ asset('public/web_asset/logos/paytabs.webp') }}" alt=""></li>
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid" src="{{ asset('public/web_asset/logos/telr.webp') }}" alt=""></li>
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid" src="{{ asset('public/web_asset/logos/visa.webp') }}" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="float-sm-left">
                <h5 style="color: white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | emirateslide.com
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </h5>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

{{-- ====================================================== */ --}}


{{-- ================================================================== --}}

{{-- Whatsapp Code Starts here  --}}

<script>
    var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?6894';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
    "enabled":true,
    "chatButtonSetting":{
        "backgroundColor":"#00e785",
        "ctaText":"Chat with us",
        "borderRadius":"25",
        "marginLeft": "0",
        "marginRight": "20",
        "marginBottom": "20",
        "ctaIconWATI":false,
        "position":"right"
    },
    "brandSetting":{
        "brandName":"Emirate Slide",
        "brandSubTitle":"undefined",
        "brandImg":"https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
        "welcomeText":"Hi there!\nHow can I help you?",
        "messageText":"Hello, %0A I have a question!",
        "backgroundColor":"#00e785",
        "ctaText":"Chat with us",
        "borderRadius":"25",
        "autoShow":false,
        "phoneNumber":"971524227221"
    }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
{{-- Whatsapp Code ends here  --}}


{{-- ================ --}}

<script>
Window.dataLayer = window.dataLayer || [];
  Function gtag(){dataLayer.push(arguments);}
Gtag(‘js’, new Date());

Gtag(‘config’, ‘G-B77ZFZ5GK6’);
</script>




{{-- ================================================================== --}}



{{--  text animation on page scroll starts here  */ --}}
{{-- ====================================================== */ --}}

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('web_asset/js/jquery-3.2.1.min.js') }}"></script>
{{-- // <!-- Include all compiled plugins (below), or include individual files as needed --> --}}
<script src="{{ asset('web_asset/js/popper.min.js') }}"></script>
<script src="{{ asset('web_asset/js/bootstrap.min.js') }}"></script>
{{-- // <!-- Rev slider js --> --}}
<script src="{{ asset('web_asset/vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
<script src="{{ asset('web_asset/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script src="{{ asset('web_asset/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
</script>
<script src="{{ asset('web_asset/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
{{-- // <!-- Extra plugin css --> --}}
<script src="{{ asset('web_asset/vendors/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/counterup/apear.js') }}"></script>
<script src="{{ asset('web_asset/vendors/counterup/countto.js') }}"></script>
<script src="{{ asset('web_asset/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web_asset/vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
{{-- <script src="{{ asset('web_asset/js/smoothscroll.js') }}"></script> --}}
<script src="{{ asset('web_asset/js/theme.js') }}"></script>
<script src="{{ asset('web_asset/js/jquery.slim.min.js') }}"></script>
<script src="{{ asset('web_asset/js/bootstrap.bundle.min.js') }}"></script>