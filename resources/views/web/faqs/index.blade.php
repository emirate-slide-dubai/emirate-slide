@extends('layouts.web_include')

@section('title', 'FAQS')
@section('view-area')


<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h2>FAQS</h2>
            <p>Get in touch</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

 <!--================Service Solution Area =================-->
 <section class="service_solution_area p_100">
    <div class="container">
        <div class="row s_solution_inner">
            <div class="col-lg-6">
                <div class="s_solution_item">
                    <div class="l_title">
                        <img src="img/icon/title-icon.png" alt="">
                        <h6>Discover the features</h6>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div id="accordion" role="tablist" class="solution_collaps">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        DO YOU SELL WINDOWS SALES?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>  We don't sell windows personally. Still, we can attempt doors with windows according to your needs. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        DO YOU SELL INTERIOR DOORS?DO YOU SELL INTERIOR DOORS?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we offer interior doors, in design like Folding Doors and Sliding Doors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        DO I NEED TO VISIT THE STUDIO BEFORE I RECEIVE A QUOTE?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No need to visit the studio for a quote. Just email us, send a quote, or call us at +971 52 422 7221. Our professional agent will contact you promptly. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingfour">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        DO I NEED TO BRING MEASUREMENTS AND PHOTOS?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p> Giving measurements and photos is optional. You can share all details at once or choose a design you want to install from our website, and we'll handle the preparations accordingly. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingfive">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        DO I NEED TO HIRE AN ENGINEER?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No need to hire an engineer. Our skilled workers will handle. Just give us a call to let us know you want to install the sliding door. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingsix">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        FOLDING DOOR TIMELINE?
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>  Installing a bi-fold door commonly takes a full working day, however the period may fluctuate based on multiplicity.</p>
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