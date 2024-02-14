@extends('layouts.web_include')

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
                    <div class="single_blog_inner">
                        <div class="s_blog_main">
                            <div class="blog_img">
                                <img class="img-fluid" src="{{ asset('web_asset/our_images/blogs/blog-2.jpg') }}" alt="">
                                <div class="blog_date">
                                    <h4>25</h4>
                                    <h5>December, 2023</h5>
                                </div>
                            </div>
                            <div class="blog_text">
                                <a href="#"><h4>You Home Is Best For Sliding Doors</h4></a>
                                <div class="blog_author">
                                    <a href="#">By Lore Papp-Dinea</a>
                                    <a href="#">Design</a>
                                </div>
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio ves-tibul. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. </p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu. Aliquam elit nibh, finibus eget mauris non, pretium vehicula ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean metus metus, porttitor ac bibendum sit amet, mattis non erat. Duis libero eros, vehicula sit amet velit id, mattis venenatis massa.</p>
                                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque laoreet vel risus et luctus. Fusce eleifend purus vel eros cursus imperdiet. Aliquam lacinia dolor sollicitudin pretium interdum. Nam velit dolor, eleifend eget felis ac, finibus accumsan dui. Fusce quis magna urna. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Blog Main Area =================-->

@endsection