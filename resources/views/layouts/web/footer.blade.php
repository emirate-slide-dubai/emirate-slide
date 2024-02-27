<!--================Footer Area =================-->
<footer class="footr_area mt-3">
    <div class="footer_widget_area">
        <div class="container">
            <div class="row footer_widget_inner">
                <div class="col-lg-4 col-sm-6">
                    <aside class="f_widget f_about_widget">
                        <img src="{{ asset('web_asset/logos/main_logo__.webp') }}" alt="img-fluid" style="height: 90px">
                        <p style="color: black">In Dubai, Emirate Slide has these effortless aluminum doors with a unique
                            appearance. Whether you want an area-preserving door, a great sight, or a silky design,
                            Emirate Slide has a good one for you.</p>
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
                            <li><a style="color: black;" href="{{ url('/category/slimline-sliding-door') }}">Aluminum
                                    Slimline
                                    Sliding Door</a></li>
                            <li><a style="color: black;" href="{{ url('/category/aluminum-folding-door') }}">Aluminum
                                    Folding Door</a></li>
                            <li><a style="color: black;" href="{{ url('/category/slim-folding-door') }}">Slim Folding
                                    Door</a></li>
                            <li><a style="color: black;" href="{{ url('category/pergola-for-restaurant') }}">Pergola For
                                    Restaurant</a></li>
                            <li><a style="color: black;" href="{{ url('/category/interactive-pergola') }}">Interactive
                                    Pergola</a></li>
                            <li><a style="color: black;" href="{{ url('/category/residential-pergola') }}">Residential
                                    Pergola</a></li>
                            <li><a style="color: black;"
                                    href="{{ url('/category/automatic-vertical-sliding-doors') }}">Automatic Vertical
                                    Sliding Doors</a></li>
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
                                    <li><a class="position_links"
                                            href="https://www.facebook.com/profile.php?id=61556153202011&mibextid=ZbWKwL"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a class="position_links"
                                            href="https://www.instagram.com/emirateslidellc?igsh=bWNqMHlwemZyd3A0"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a class="position_links"
                                            href="https://youtube.com/@EmirateSlide?si=miWOJYG9qMLzB1I7"><i
                                                class="fa fa-youtube"></i></a></li>
                                    <li><a class="position_links" href="https://pin.it/3KVynthFF"><i
                                                class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-12">
                                <ul style="display: inline-flex">
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid"
                                            src="{{ asset('web_asset/logos/mastercard.webp') }}" alt=""></li>
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid"
                                            src="{{ asset('web_asset/logos/paytabs.webp') }}" alt=""></li>
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid"
                                            src="{{ asset('web_asset/logos/telr.webp') }}" alt=""></li>
                                    <li><img style="width: 50px; margin-right:10px;" class="img-fluid"
                                            src="{{ asset('web_asset/logos/visa.webp') }}" alt=""></li>
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
                <h5 style="color: white">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
{{-- Touch swwipe starts here --}}
{{-- ================================================================== --}}
{{-- ---------------------- --}}
{{-- ================================================================== --}}
{{-- Loader content starts here --}}

<script>
    // Show loader

    // Hide loader after 1.5 seconds
    setTimeout(function() {
        $('#loading').hide();
        $('#content').show();

    }, 1100);
</script>
{{-- ================================================================== --}}

{{-- Whatsapp Code Starts here  --}}

<script>
    var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?44644';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#00e785",
            "ctaText": "Chat with us",
            "borderRadius": "25",
            "marginLeft": "0",
            "marginRight": "20",
            "marginBottom": "20",
            "ctaIconWATI": false,
            "position": "right"
        },
        "brandSetting": {
            "brandName": "Emirate Slide",
            "brandSubTitle": "undefined",
            "brandImg": "https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
            "welcomeText": "Hey there, \nI want to install doors?",
            "messageText": "Hey there, %0AI want to install doors?",
            "backgroundColor": "#00e785",
            "ctaText": "Chat with us",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "971524227221"
        }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
{{-- Whatsapp Code ends here  --}}

{{-- progress circle code strts here  --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // When the document is fully loaded
        var innerCircles = document.querySelectorAll('.inner');
        var chartContainers = document.querySelectorAll('.chart-container');

        // Set progress percentages and texts for each chart
        var progressData = [{
                percentage: 75,
                text: 'Hard Work'
            },
            {
                percentage: 83,
                text: 'Creativity'
            },
            {
                percentage: 63,
                text: 'Good Luck'
            },
            {
                percentage: 95,
                text: 'Satisfaction'
            }
        ];

        // Iterate over each chart container
        chartContainers.forEach(function(chartContainer, index) {
            var progressPercentage = progressData[index].percentage;
            var progressText = progressData[index].text;
            var innerCircle = innerCircles[index];

            // Calculate the circumference of the circle
            var radius = innerCircle.r.baseVal.value;
            var circumference = 2 * Math.PI * radius;

            // Function to animate the circle progress
            function animateProgress() {
                // Calculate the length of the dash (progress)
                var dashLength = circumference * (progressPercentage / 100);

                // Animate the circle progress
                innerCircle.style.strokeDasharray = dashLength + ' ' + circumference;
            }

            // Function to add text inside the circle
            function addText() {
                var textElement = chartContainer.querySelector('.progress-text');
                textElement.textContent = progressPercentage + '%';
                var tspans = textElement.getElementsByTagName('tspan');
                if (tspans.length > 0) {
                    tspans[0].textContent = progressPercentage + '%';
                    tspans[1].textContent = progressText;
                } else {
                    var tspan = document.createElementNS('http://www.w3.org/2000/svg', 'tspan');
                    tspan.setAttribute('x', '50');
                    tspan.setAttribute('dy', '1.2em');
                    tspan.textContent = progressText;
                    textElement.appendChild(tspan);
                }
            }

            // Function to check if element is in viewport
            function isInViewport(element) {
                var rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // Event listener to trigger animation when chart container is in viewport
            function checkViewport() {
                if (isInViewport(chartContainer)) {
                    animateProgress();
                    addText();
                    window.removeEventListener('scroll',
                        checkViewport); // Remove listener once animation is triggered
                }
            }

            window.addEventListener('scroll',
                checkViewport); // Listen for scroll events to check if chart container is in viewport
        });
    });
</script>
{{-- progress circle code ends here  --}}


{{-- ================ --}}

<script>
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-B77ZFZ5GK6');

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


{{-- touch swipe --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touch-carousel/1.2.10/js/bootstrap-touch-carousel.min.js">
</script>
