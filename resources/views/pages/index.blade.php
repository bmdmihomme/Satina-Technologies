@extends('layouts.app', ['title'=>'Home'])

@section('content')

        @if(session()->has('message'))
            <div class="alert alert-success text text-center">
                {{ session()->get('message') }}
            </div>
        @endif
         <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/slider-01.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span class="theme_color">EASILY</span> CREATE ONLINE</h3>
                                        <br>
                                        <h4>CV AND PROFESSIONAL<br>RESUME IN MINUTES</h4>
                                        <br>
                                        <p>Showcase your Profile to the world
                                            <br>using online CV builder and Get Hired Faster</p>
                                        <a class="contact_bt" href="#">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/slider-01.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span class="theme_color">EASILY</span> CREATE ONLINE</h3>
                                        <br>
                                        <h4>CV AND PROFESSIONAL<br>RESUME IN MINUTES</h4>
                                        <br>
                                        <p>Showcase your Profile to the world
                                            <br>using online CV builder and Get Hired Faster</p>
                                        <a class="contact_bt" href="#">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color">WE CAN</span> HELP YOUR CAREER GROW</h2>
                            <p class="large">Get your CV Resume in 4 easy steps</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section -->
    <div class="section layout_padding theme_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text_align_center">
                    <div class="full">
                        <img class="img-responsive" src="images/resume_img.png" alt="#" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                    <h3 class="small_heading">EVERYTHING YOU NEED IN ONE SOLUTION</h3>
                    <p>HELP YOUR NEXT CAREER MOVE MORE SMOOTHER AND MORE EFFICIENT</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                    <a href="#" class="hvr-radial-out button-theme">Get Started ></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="full center margin-bottom_30">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color">CHOOSE A</span> PROFESSIONAL DESIGN</h2>
                            <p class="large">Resume</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img1.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img2.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img3.png" alt="#" />
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <img class="img-responsive" src="images/img4.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                <div class="col-lg-12">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their</p>
                </div>

                <div class="col-lg-12">
                    <div class="full center">
                        <a href="about.html" class="hvr-radial-out button-theme">See More ></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding theme_bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 white_fonts">
                    <h3 class="small_heading">CREATE PERSONALISED CV </h3>
                    <p>HELP YOUR NEXT CAREER MOVE MORE SMOOTHER AND MORE EFFICIENT</p>
                    <p>ss normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in theirss normal distribution of letters, as opposed to using 'Content here, content here', making it look like../p>
                        <p><a href="about.html" class="hvr-radial-out button-theme">Read more ></a></p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 text_align_center">
                    <div class="full">
                        <img class="img-responsive" src="images/resume_img2.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <div class="center">
                            <img src="{{asset('images/icon1.png')}}" alt="#" />
                        </div>
                        <div class="center">
                            <h4>Responsive CV Templates</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <div class="center">
                            <img src="{{asset('images/icon2.png')}}" alt="#" />
                        </div>
                        <div class="center">
                            <h4>Designed for Professionals</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="full">
                        <div class="center">
                            <img src="{{asset('images/icon3.png')}}" alt="#" />
                        </div>
                        <div class="center">
                            <h4>Faster. interview calls</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1 margin-top_30">
                    <div class="full text_align_center">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the scrambled it to make a type specimen book. It has survived not only fiv</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
