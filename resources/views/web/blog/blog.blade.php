@extends('layouts.web_include')

@section('title', 'Blog')
@section('blog-active', 'active')

@section('view-area')
     <!--================Banner Area =================-->
     <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h2>Blog</h2>
                <p>Read the news</p>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->
    
    <!--================Blog Main Area =================-->
    <section class="blog_main_area p_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_main_inner">
                        <div class="blog_main_item">
                            <div class="blog_img">
                                <img class="img-fluid" style="width: 800px;height:300px" src="{{ asset('web_asset/our_images/blogs/blog-2.jpg') }}" alt="">
                                <div class="blog_date">
                                    <h4>25</h4>
                                    <h5>December, 2023</h5>
                                </div>
                            </div>
                            <div class="blog_text">
                                <a href="{{ url('/let-us-introduce-you-the-best-apps') }}"><h4>You Home Is Best For Sliding Doors</h4></a>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                                <a class="button_style" href="{{ url('/let-us-introduce-you-the-best-apps') }}">Read More</a>
                            </div>
                        </div>
                        <div class="blog_main_item">
                            <div class="blog_img">
                                <img class="img-fluid" style="width: 800px;height:300px" src="{{ asset('web_asset/our_images/blogs/blog-1.webp') }}" alt="">
                                <div class="blog_date">
                                    <h4>25</h4>
                                    <h5>December, 2023</h5>
                                </div>
                            </div>
                            <div class="blog_text">
                                <a href="{{ url('/let-us-introduce-you-the-best-apps') }}"><h4>Let us introduce you our clean sliding doors</h4></a>
                                <div class="blog_author">
                                </div>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                                <a class="button_style" href="{{ url('/let-us-introduce-you-the-best-apps') }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="blog_right_sidebar">
                        <aside class="r_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </aside>
                        <aside class="r_widget categories_widget">
                            <div class="r_w_title">
                                <h3>Categories</h3>
                            </div>
                            <ul>
                                <li><a href="#">Vestibulum maximus</a></li>
                                <li><a href="#">Nisi eu lobortis pharetra</a></li>
                                <li><a href="#">Orci quam accumsan</a></li>
                                <li><a href="#">Auguen pharetra massa</a></li>
                                <li><a href="#">Tellus ut nulla</a></li>
                                <li><a href="#"> Etiam egestas viverra </a></li>
                            </ul>
                        </aside>
                        <aside class="r_widget insta_widget">
                            <div class="r_w_title">
                                <h3>Instagram</h3>
                            </div>
                            <ul>
                                <li><a href="https://www.instagram.com/?hl=en">
                                    <img class="img-fluid" src="{{ asset('web_asset/img/instagram/right-instagram/r-in-1.jpg') }}" alt="">
                                </a></li>
                                <li><a href="https://www.instagram.com/?hl=en">
                                    <img class="img-fluid" src="{{ asset('web_asset/img/instagram/right-instagram/r-in-2.jpg') }}" alt="">
                                </a></li>
                                <li><a href="https://www.instagram.com/?hl=en">
                                    <img class="img-fluid" src="{{ asset('web_asset/img/instagram/right-instagram/r-in-3.jpg') }}" alt="">
                                </a></li>
                                <li><a href="https://www.instagram.com/?hl=en">
                                    <img class="img-fluid" src="{{ asset('web_asset/img/instagram/right-instagram/r-in-4.jpg') }}" alt="">
                                </a></li>
                                <li><a href="https://www.instagram.com/?hl=en">
                                    <img class="img-fluid" src="{{ asset('web_asset/img/instagram/right-instagram/r-in-5.jpg') }}" alt="">
                                </a></li>
                                <li><a href="https://www.instagram.com/?hl=en">
                                    <img class="img-fluid" src="{{ asset('web_asset/img/instagram/right-instagram/r-in-6.jpg') }}" alt="">
                                </a></li>
                            </ul>
                        </aside>
                        <aside class="r_widget tag_widget">
                            <div class="r_w_title">
                                <h3>Tags</h3>
                            </div>
                            <ul>
                                <li><a href="#">branding</a></li>
                                <li><a href="#">identity</a></li>
                                <li><a href="#">design</a></li>
                                <li><a href="#">inspiration</a></li>
                                <li><a href="#">web design</a></li>
                                <li><a href="#">video</a></li>
                                <li><a href="#">photography</a></li>
                            </ul>
                        </aside>
                        <aside class="r_widget quote_widget">
                            <div class="r_w_title">
                                <h3>Quote</h3>
                            </div>
                            <img src="{{ asset('web_asset/img/icon/quote-icon.png') }}" alt="">
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volut pat. Donec fermen tum convallis.</p>
                        </aside>
                        <aside class="r_widget add_widget">
                            <div class="r_w_title">
                                <h3>Add</h3>
                            </div>
                            <img class="img-fluid" src="{{ asset('web_asset/img/add.jpg') }}" alt="">
                        </aside>
                    </div>
                </div> --}}
            </div>
            <nav aria-label="Page navigation example" class="pagination_area">
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                    <li class="page-item"><a class="page-link" href="#">02.</a></li>
                    <li class="page-item"><a class="page-link" href="#">03.</a></li>
                    <li class="page-item"><a class="page-link" href="#">04.</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!--================End Blog Main Area =================-->
    
@endsection