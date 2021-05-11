<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vicenza Express</title>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/frontEnd/assets/images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/frontEnd/assets/images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/frontEnd/assets/images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('public/frontEnd/assets/images/favicons/site.webmanifest')}}">
    <!-- plugin styles -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/oapee-icons.css')}}">
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/assets/css/responsive.css')}}">
</head>

<body>

    <div class="preloader">
        <img src="{{asset('public/frontEnd/assets/images/loading.png')}}" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">


        <header class="site-header-one stricky site-header-one__fixed-top">
            <div class="container-fluid">
                <div class="site-header-one__logo">
                    <a href="index.html">
                        <img src="{{asset('public/frontEnd/assets/images/logowp.png')}}" width="136" alt="">
                    </a>
                    <span class="side-menu__toggler"><i class="fa fa-bars"></i></span><!-- /.side-menu__toggler -->
                </div><!-- /.site-header-one__logo -->
                <div class="main-nav__main-navigation one-page-scroll-menu">
                    <ul class="main-nav__navigation-box">
                        <li class="scrollToLink">
                            <a href="#home">Home</a>
                        </li>
                        <li class="scrollToLink"><a href="#features">Features</a></li>
                        {{-- <li class="scrollToLink"><a href="#pricing">Pricing</a></li> --}}
                        <li class="scrollToLink"><a href="#testimonials">Testimonials</a></li>
                        {{-- <li class="scrollToLink"><a href="#screens">Screens</a></li> --}}
                        {{-- <li class="dropdown scrollToLink">
                            <a href="#blog">News</a>
                            <ul>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-details.html">News Details</a></li>
                            </ul>
                        </li> --}}
                        <li class="scrollToLink"><a href="{{url('merchant')}}" class="thm-btn main-nav__btn" ><span>Merchant Login</span></a></li>
                    </ul><!-- /.main-nav__navigation-box -->
                </div><!-- /.main-nav__main-navigation -->
                {{-- <div class="main-nav__right">
                    <a href="tel:777-888-0000" class="main-nav__cta">
                        <img src="{{asset('public/frontEnd/assets/images/shapes/header-phone-1-1.png')}}" alt="">
                        <span>
                            <i>Call Anytime </i>
                            <b>777 888 0000</b>
                        </span>
                    </a><!-- /.main-nav__cta -->
                    <a href="#" class="thm-btn main-nav__btn"><span>Download App</span></a>
                </div><!-- /.main-nav__right --> --}}
            </div><!-- /.container-fluid -->
        </header><!-- /.site-header-one -->

        <section class="banner-one" id="home">

            <img src="{{asset('public/frontEnd/assets/images/shapes/banner-shape-1-1.png')}}" class="banner-one__bg-shape-1" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/banner-shape-1-2.png')}}" class="banner-one__bg-shape-2" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/banner-shape-1-3.png')}}" class="banner-one__bg-shape-3" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/banner-shape-1-4.png')}}" class="banner-one__bg-shape-4" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/banner-shape-1-5.png')}}" class="banner-one__bg-shape-5" alt="">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto">
                            <div class="banner-one__content">
                                <h3>Make Your<br>Transection <br> Smooth & Secure </h3>
                                <p>A Complete Solution For Make Your Life Easer.</p>
                                {{-- <a href="#" class="thm-btn banner-one__btn"><span>Discover More</span></a> --}}
                                <!-- /.thm-btn banner-one__btn -->
                            </div><!-- /.banner-one__content -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex justify-content-end wow fadeInUp" data-wow-duration="1500ms">
                        <div class="banner-one__image">
                            <img src="{{asset('public/frontEnd/assets/images/resources/Quick-money-transfer-4.png')}}" alt="">
                        </div><!-- /.banner-one__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->

        <section class="service-one" id="features">
            <div class="container">
                <div class="block-title text-center">
                    <h3>Vicenzaservice Providing You Best <span>Features</span></h3>
                    <p>A Complete Solution For Make Your Business Easer</p>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-xl-4 col-lg-8 col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="service-one__single">
                            <h3>Money Transfer</h3>
                            {{-- <p>Lorem ipsum is are many variations of pass.</p> --}}
                            <div class="service-one__icon">
                                <i class="oapee-icon-laptop"></i>
                            </div><!-- /.service-one__icon -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-xl-4 col-lg-8 col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="service-one__single">
                            <h3>Parcel Service</h3>
                            {{-- <p>Lorem ipsum is are many variations of pass.</p> --}}
                            <div class="service-one__icon">
                                <i class="oapee-icon-presentation"></i>
                            </div><!-- /.service-one__icon -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-xl-4 col-lg-8 col-md-8 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="service-one__single">
                            <h3>Air Ticket Booking</h3>
                            {{-- <p>Lorem ipsum is are many variations of pass.</p> --}}
                            <div class="service-one__icon">
                                <i class="oapee-icon-target"></i>
                            </div><!-- /.service-one__icon -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    {{-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="service-one__single">
                            <h3>Content Marketing <br> Strategy</h3>
                            <p>Lorem ipsum is are many variations of pass.</p>
                            <div class="service-one__icon">
                                <i class="oapee-icon-visualization"></i>
                            </div><!-- /.service-one__icon -->
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 --> --}}
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section class="cta-four">
            <img src="{{asset('public/frontEnd/assets/images/shapes/cta-4-dot-1-1.png')}}" class="cta-four__bg-shape-1" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/cta-4-shape-1-1.png')}}" class="cta-four__bg-shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-four__images">
                            {{-- <img src="{{asset('public/frontEnd/assets/images/resources/cta-4-moc-1-1.png')}}" class="wow fadeInUp"
                                data-wow-duration="1500ms" alt="">
                            <img src="{{asset('public/frontEnd/assets/images/resources/cta-4-moc-1-2.png')}}" class="wow fadeInUp"
                                data-wow-duration="1500ms" alt="">
                            <img src="{{asset('public/frontEnd/assets/images/resources/cta-4-moc-1-3.png')}}" class="wow fadeInUp"
                                data-wow-duration="1500ms" alt=""> --}}
                        </div><!-- /.cta-four__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="cta-four__content">
                            <div class="block-title">
                                <h3>Intreact with Customers on <br> Single <span>Application</span></h3>
                            </div><!-- /.block-title -->
                            <div class="cta-four__text">
                                <p>This is an application based on BtoB Plateform. By this, a merchant can make their business more easy and sufficient</p>
                            </div><!-- /.cta-four__text -->
                            <ul class="list-unstyled cta-four__list">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Easy to use
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                   Secure Plateform
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                   Less Charges
                                </li>
                            </ul><!-- /.list-unstyled -->

                            {{-- <div class="cta-four__porgress__bar-wrap">
                                <div class="cta-four__porgress__bar">
                                    <div class="cta-four__porgress__bar-top">
                                        <h3>Marketing</h3>
                                        <p>75%</p>

                                    </div><!-- /.cta-four__porgress__bar-top -->
                                    <div class="cta-four__porgress__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms"
                                            style="width: 75%;"></span>
                                    </div><!-- /.cta-four__porgress__bar-line -->
                                </div><!-- /.cta-four__porgress__bar -->
                                <div class="cta-four__porgress__bar">
                                    <div class="cta-four__porgress__bar-top">
                                        <h3>SEO Optimization</h3>
                                        <p>87%</p>

                                    </div><!-- /.cta-four__porgress__bar-top -->
                                    <div class="cta-four__porgress__bar-line">
                                        <span class="wow slideInLeft" data-wow-duration="1500ms"
                                            style="width: 87%;"></span>
                                    </div><!-- /.cta-four__porgress__bar-line -->
                                </div><!-- /.cta-four__porgress__bar -->
                            </div><!-- /.cta-four__porgress__bar-wrap -->


                            <a href="#" class="thm-btn cta-four__btn"><span>Discover More</span></a> --}}
                            <!-- /.thm-btn cta-four__btn -->
                        </div><!-- /.cta-four__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-four -->

        {{-- <section class="brand-one">
            <div class="container">
                <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
                    data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 5, "dots": false, "nav": false, "margin": 100, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 30}, "480": {"items": 3, "margin": 30}, "991": {"items": 4, "margin": 50}, "1199": {"items": 5, "margin": 100}}}'>
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/resources/brand-1-1.png')}}" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-carousel thm__owl-carousel owl-theme -->
            </div><!-- /.container -->
        </section><!-- /.brand-one --> --}}

        {{-- <section class="cta-three">
            <img src="{{asset('public/frontEnd/assets/images/shapes/cta-3-shape-1-2.png')}}" class="cta-three__bg-shape-1" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/cta-3-shape-1-1.png')}}" class="cta-three__bg-shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-three__content">
                            <div class="block-title text-left">
                                <h3>Powerful SEO <span>Application</span><br> For Your Mobile</h3>
                            </div><!-- /.block-title text-left -->
                            <div class="cta-three__icon-wrap">
                                <div class="cta-three__icon-single">
                                    <div class="cta-three__icon">
                                        <i class="oapee-icon-app-development"></i>
                                    </div><!-- /.cta-three__icon -->
                                    <h3>Responsive <br> Design</h3>
                                </div><!-- /.cta-three__icon-single -->
                                <div class="cta-three__icon-single">
                                    <div class="cta-three__icon">
                                        <i class="oapee-icon-computer-graphic"></i>
                                    </div><!-- /.cta-three__icon -->
                                    <h3>Online <br> Marketing</h3>
                                </div><!-- /.cta-three__icon-single -->
                            </div><!-- /.cta-three__icon-wrap -->
                            <div class="cta-three__text">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur. Lorem Ipsum is simply dummy text of the printing laborum
                                    perspiciatis unde.</p>
                            </div><!-- /.cta-three__text -->
                            <a href="#" class="thm-btn cta-three__btn"><span>Discover More</span></a>
                            <!-- /.thm-btn cta-three__btn -->
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="cta-three__image">
                            <img src="{{asset('public/frontEnd/assets/images/resources/cta-3-1.png')}}" alt="">
                        </div><!-- /.cta-three__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three --> --}}

        {{-- <section class="cta-two">
            <img src="{{asset('public/frontEnd/assets/images/shapes/cta-2-shape-1.png')}}" alt="" class="cta-two__bg-shape-1">
            <img src="{{asset('public/frontEnd/assets/images/shapes/cta-2-dot-1.png')}}" class="cta-two__bg-shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('public/frontEnd/assets/images/resources/cta-2-1.png')}}" class="cta-two__content-image" alt="">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="cta-two__content">
                            <div class="block-title text-left">
                                <h3>Discover Tools for Your <br> Repeat <span>Customers</span></h3>
                            </div><!-- /.block-title text-center -->
                            <p>Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry when an
                                unknown printer took a galley of <br> type and scrambled it to make. Lorem ipsum dolor
                                sit amet, <br> consectetur adipisicing elit.</p>
                            <a href="#" class="thm-btn cta-two__btn"><span>Discover More</span></a>
                            <!-- /.thm-btn cta-two__btn -->
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two --> --}}

        {{-- <section class="video-one">
            <div class="container">
                <div class="video-one__box wow fadeInUp" data-wow-duration="1500ms"
                    style="background-image: url(assets/images/backgrounds/video-bg-1-1.jpg);">
                    <div class="video-one__content">
                        <a href="https://www.youtube.com/watch?v=aitb---aDYM" class="video-popup"><i
                                class="fa fa-play"></i></a>
                        <h3>Watch Our Video</h3>
                    </div><!-- /.video-one__content -->
                </div><!-- /.video-one__box -->
            </div><!-- /.container -->
        </section><!-- /.video-one --> --}}

        {{-- <section class="pricing-one" id="pricing">
            <div class="container">
                <div class="block-title text-center">
                    <h3>Choose Pricing <span>Plans</span> Suits You</h3>
                    <p>Lorem ipsum is are many variations of pass of majority.</p>
                </div><!-- /.block-title text-center -->
                <ul class="list-inline text-center switch-toggler-list" role="tablist" id="switch-toggle-tab">
                    <li class="month active"><a href="#">Monthly</a></li>
                    <li>
                        <!-- Rounded switch -->
                        <label class="switch on">
                            <span class="slider round"></span>
                        </label>
                    </li>
                    <li class="year"><a href="#">Annualy</a></li>
                </ul><!-- /.list-inline -->

                <div class="tabed-content">
                    <div id="month">
                        <div class="row">
                            <div class="col-lg-4 animated fadeInLeft">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <i class="oapee-icon-send"></i>
                                        <p>Basic Pack</p>
                                        <h3>$20.00</h3>
                                        <ul class="list-unstyled pricing-one__list">
                                            <li><i class="fa fa-check"></i>Extra features</li>
                                            <li><i class="fa fa-check"></i>Lifetime free support</li>
                                            <li><i class="fa fa-check"></i>Upgrate options</li>
                                            <li><i class="fa fa-check"></i>Full access</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                        <!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 animated fadeInUp">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <i class="oapee-icon-shuttle"></i>
                                        <p>Standard Pack</p>
                                        <h3>$30.00</h3>
                                        <ul class="list-unstyled pricing-one__list">
                                            <li><i class="fa fa-check"></i>Extra features</li>
                                            <li><i class="fa fa-check"></i>Lifetime free support</li>
                                            <li><i class="fa fa-check"></i>Upgrate options</li>
                                            <li><i class="fa fa-check"></i>Full access</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                        <!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 animated fadeInRight">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <i class="oapee-icon-send"></i>
                                        <p>Ultimate Pack</p>
                                        <h3>$49.00</h3>
                                        <ul class="list-unstyled pricing-one__list">
                                            <li><i class="fa fa-check"></i>Extra features</li>
                                            <li><i class="fa fa-check"></i>Lifetime free support</li>
                                            <li><i class="fa fa-check"></i>Upgrate options</li>
                                            <li><i class="fa fa-check"></i>Full access</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                        <!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /#month -->
                    <div id="year">
                        <div class="row">
                            <div class="col-lg-4 animated fadeInLeft">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <i class="oapee-icon-send"></i>
                                        <p>Basic Pack</p>
                                        <h3>$59.00</h3>
                                        <ul class="list-unstyled pricing-one__list">
                                            <li><i class="fa fa-check"></i>Extra features</li>
                                            <li><i class="fa fa-check"></i>Lifetime free support</li>
                                            <li><i class="fa fa-check"></i>Upgrate options</li>
                                            <li><i class="fa fa-check"></i>Full access</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                        <!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 animated fadeInUp">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <i class="oapee-icon-shuttle"></i>
                                        <p>Standard Pack</p>
                                        <h3>$79.00</h3>
                                        <ul class="list-unstyled pricing-one__list">
                                            <li><i class="fa fa-check"></i>Extra features</li>
                                            <li><i class="fa fa-check"></i>Lifetime free support</li>
                                            <li><i class="fa fa-check"></i>Upgrate options</li>
                                            <li><i class="fa fa-check"></i>Full access</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                        <!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                            <div class="col-lg-4 animated fadeInRight">
                                <div class="pricing-one__single">
                                    <div class="pricing-one__inner">
                                        <i class="oapee-icon-send"></i>
                                        <p>Ultimate Pack</p>
                                        <h3>$99.00</h3>
                                        <ul class="list-unstyled pricing-one__list">
                                            <li><i class="fa fa-check"></i>Extra features</li>
                                            <li><i class="fa fa-check"></i>Lifetime free support</li>
                                            <li><i class="fa fa-check"></i>Upgrate options</li>
                                            <li><i class="fa fa-check"></i>Full access</li>
                                        </ul><!-- /.list-unstyled pricing-one__list -->
                                        <a href="#" class="thm-btn pricing-one__btn"><span>Choose Plan</span></a>
                                        <!-- /.thm-btn -->
                                    </div><!-- /.pricing-one__inner -->
                                </div><!-- /.pricing-one__single -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div><!-- /#year -->
                </div><!-- /.tabed-content -->

            </div><!-- /.container -->
        </section><!-- /.pricing-one --> --}}

        <section class="testimonials-one" id="testimonials">
            <img src="{{asset('public/frontEnd/assets/images/shapes/testi-line-1-1.png')}}" alt="Awesome Image"
                class="testimonials-one__bg-shape-2" />

            <div class="container">
                <img src="{{asset('public/frontEnd/assets/images/shapes/testi-map-1-1.png')}}" alt="Awesome Image"
                    class="testimonials-one__bg-shape-1" />
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto">
                            <div id="testimonials-slider-pager">
                                <div class="testimonials-slider-pager-one">
                                    <a href="#" class="pager-item active" data-slide-index="0"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-transfer.png')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="1"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-transfer (1).png')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="2"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-transaction.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="3"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-transfer.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="4"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-exchange.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="5"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/bank-transfer.svg')}}" alt="Awesome Image" /></a>
                                </div><!-- /.testimonials-slider-pager-one -->
                                <div class="testimonials-slider-pager-two">
                                    <a href="#" class="pager-item active" data-slide-index="0"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/analytics.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="1"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-transfer.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="2"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-exchange.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="3"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/money-transfer.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="4"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/bank-transfer.svg')}}" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="5"><img
                                            src="{{asset('public/frontEnd/assets/images/testimonials/analytics.svg')}}" alt="Awesome Image" /></a>
                                </div><!-- /.testimonials-slider-pager-two -->
                            </div><!-- /#testimonials-slider-pager -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="block-title text-left">
                            <h3>What Our Customers Are <br>Talking <span>About Us</span></h3>
                        </div><!-- /.block-title text-center -->

                        <ul class="slider testimonials-slider">
                            <li class="slide-item">
                                <div class="testimonials-one__single">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h3>Delila Rayam</h3>
                                    <span>CEO - Layerdrops</span>
                                </div><!-- /.testimonials-one__single -->
                            </li>
                            <li class="slide-item">
                                <div class="testimonials-one__single">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h3>Terrilyn Werme</h3>
                                    <span>CEO - Layerdrops</span>
                                </div><!-- /.testimonials-one__single -->
                            </li>
                            <li class="slide-item">
                                <div class="testimonials-one__single">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h3>Kyle Demayo</h3>
                                    <span>CEO - Layerdrops</span>
                                </div><!-- /.testimonials-one__single -->
                            </li>
                            <li class="slide-item">
                                <div class="testimonials-one__single">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h3>Minta Hadad</h3>
                                    <span>CEO - Layerdrops</span>
                                </div><!-- /.testimonials-one__single -->
                            </li>
                            <li class="slide-item">
                                <div class="testimonials-one__single">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h3>Sherman Cibrian</h3>
                                    <span>CEO - Layerdrops</span>
                                </div><!-- /.testimonials-one__single -->
                            </li>
                            <li class="slide-item">
                                <div class="testimonials-one__single">
                                    <p>This is due to their excellent service, competitive pricing and customer support.
                                        It’s throughly refresing to get such a personal touch. Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    </p>
                                    <h3>Adrianne Hagans</h3>
                                    <span>CEO - Layerdrops</span>
                                </div><!-- /.testimonials-one__single -->
                            </li>
                        </ul>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        <section class="funfact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="funfact-one__single">
                            <h3 class="counter">50</h3><!-- /.counter -->
                            <p>Merchant</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="funfact-one__single">
                            <h3 class="counter">100</h3><!-- /.counter -->
                            <p>Customers</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="funfact-one__single">
                            <h3 class="counter">500</h3><!-- /.counter -->
                            <p>Transection</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="funfact-one__single">
                            <h3 class="counter">100</h3><!-- /.counter -->
                            <p>5 Star Rating</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        {{-- <section class="app-shot-one" id="screens">
            <div class="container-fluid">
                <div class="block-title text-center">
                    <h3>Checkout Our App <span>Interface</span> Look</h3>
                    <p>Lorem ipsum is are many variations of pass of majority.</p>
                </div><!-- /.block-title text-center -->


                <div class="app-shot-one__carousel owl-theme owl-carousel thm__owl-carousel" data-options='{ "loop": true, "margin": 30, "nav": false, "dots": true, "autoWidth": false, "autoplay": true, "smartSpeed": 700, "autoplayTimeout": 5000, "autoplayHoverPause": true, "slideBy": 5, "responsive": {
                    "0": { "items": 1 },
                    "480": { "items": 2 },
                    "600": { "items": 3 },
                    "991": { "items": 4 },
                    "1000": { "items": 5 },
                    "1200": { "items": 5 }
                }}'>

                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-1.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-2.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-3.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-4.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-5.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->

                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-1.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-2.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-3.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-4.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-5.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-1.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-2.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-3.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-4.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="{{asset('public/frontEnd/assets/images/app-shots/app-shot-n-1-5.png')}}" alt="Awesome Image" />
                    </div><!-- /.item -->
                </div><!-- /.app-shot-one__carousel owl-theme owl-carousel -->
            </div><!-- /.container-fluid -->
        </section><!-- /.app-shot-one --> --}}


        {{-- <section class="faq-one">
            <div class="container">
                <div class="block-title text-center">
                    <h3>Frequently Asked <span>Questions</span></h3>
                    <p>Lorem ipsum is are many variations of pass of majority.</p>
                </div><!-- /.block-title text-center -->
                <div class="nav nav-tabs faq-one__post-filter">
                    <a href="#general" class="nav-link active thm-btn" data-toggle="tab"><span>General</span></a>
                    <a href="#web" class="nav-link  thm-btn" data-toggle="tab"><span>Web and Desktop</span></a>
                    <a href="#windows" class="nav-link  thm-btn" data-toggle="tab"><span>Windows Phone</span></a>
                    <a href="#android" class="nav-link  thm-btn" data-toggle="tab"><span>Andriod</span></a>
                </div><!-- /.nav nav-tabs faq-one__post-filter -->
                <div class="tab-content">
                    <div class="tab-pane fade show active animated fadeInUp" id="general">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-1">
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-2">
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade show active animated fadeInUp -->
                    <div class="tab-pane fade  animated fadeInUp" id="web">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-3">
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-4">
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade show active animated fadeInUp -->
                    <div class="tab-pane fade  animated fadeInUp" id="windows">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-6">
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-7">
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade show active animated fadeInUp -->
                    <div class="tab-pane fade  animated fadeInUp" id="android">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-8">
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="accrodion-grp " data-grp-name="faq-accrodion-9">
                                    <div class="accrodion  ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Pre and post launch mobile app</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion active ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to connect with support</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>How to update application new features</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                    <div class="accrodion ">
                                        <div class="accrodion-inner">
                                            <div class="accrodion-title">
                                                <h4>Boostup your application traffic now</h4>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <p>There are many variations of passages of available but majority
                                                        have
                                                        alteration in some by inject humour or random words. Lorem ipsum
                                                        dolor
                                                        sit amet.</p>
                                                </div><!-- /.inner -->
                                            </div>
                                        </div><!-- /.accrodion-inner -->
                                    </div>
                                </div>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.tab-pane fade show active animated fadeInUp -->
                </div><!-- /.tab-content -->
            </div><!-- /.container -->
        </section><!-- /.faq-one --> --}}

        {{-- <section class="blog-one" id="blog">
            <img src="{{asset('public/frontEnd/assets/images/shapes/blog-shape-1-1.png')}}" class="blog-one__bg-shape-1" alt="">
            <img src="{{asset('public/frontEnd/assets/images/shapes/blog-shape-1-2.png')}}" class="blog-one__bg-shape-2" alt="">
            <div class="container">
                <div class="block-title text-center">
                    <h3>Latest From the <span>Blog Posts</span></h3>
                    <p>Lorem ipsum is are many variations of pass of majority.</p>
                </div><!-- /.block-title text-center -->
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{asset('public/frontEnd/assets/images/blog/blog-1-1.jpg')}}" alt="">
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <a href="#"><i class="far fa-clock"></i> 20 Feb</a>
                                    <a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-one__meta -->
                                <h3><a href="blog-details.html">Leverage agile frame works to provide a synopsis</a>
                                </h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 ">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{asset('public/frontEnd/assets/images/blog/blog-1-2.jpg')}}" alt="">
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <a href="#"><i class="far fa-clock"></i> 20 Feb</a>
                                    <a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-one__meta -->
                                <h3><a href="blog-details.html">Launch New Mobile App Marketing Pitfalls To Avoid</a>
                                </h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-4 ">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="{{asset('public/frontEnd/assets/images/blog/blog-1-3.jpg')}}" alt="">
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <div class="blog-one__meta">
                                    <a href="#"><i class="far fa-clock"></i> 20 Feb</a>
                                    <a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                </div><!-- /.blog-one__meta -->
                                <h3><a href="blog-details.html">Bring to the table win-win survival strategies.</a></h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one --> --}}

        {{-- <section class="cta-one" style="background-image: url(assets/images/backgrounds/cta-1-bg-1.jpg);">
            <div class="container">
                <img src="{{asset('public/frontEnd/assets/images/shapes/cta-shape-1-1.png')}}" class="cta-one__bg-shape-1" alt="">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cta-one__content">
                            <h3>Download Our App Today & <br> Experience Endless Possibilities </h3>
                            <p>and get started with a free 1 month trial for your business</p>
                        </div><!-- /.cta-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-4 d-flex ">
                        <div class="my-auto d-flex justify-content-end">
                            <a href="#" class="thm-btn cta-one__btn"><span>Download App Now</span></a>
                            <!-- /.thm-btn cta-one__btn -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-one --> --}}

        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="footer-widget footer-widget__about">
                                <a href="index.html" class="logo">
                                    <img src="{{asset('public/frontEnd/assets/images/logowp.png')}}" width="136" alt="">
                                </a>
                                <p>This is an application based on BtoB Plateform.<br>By this, a merchant can make their business
                                    <br> more easy and sufficient.</p>
                                {{-- <a href="#" class="thm-btn"><span>Download App</span></a><!-- /.thm-btn --> --}}
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-4 -->
                        <div class="col-xl-2 col-lg-6">
                            <div class="footer-widget footer-widget__links">
                                {{-- <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Services</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links-list --> --}}
                            </div><!-- /.footer-widget footer-widget__links -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-xl-2 col-lg-6">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__contact-list list-unstyled">
                                    <li>
                                        <i class="fa fa-phone-square"></i>
                                        <a href="tel:777-888-0000">+39 351 205 0885</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:hkvicenza208@gmail.com">hkvicenza208@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Vicenza, Italy
                                    </li>
                                </ul><!-- /.footer-widget__contact-list list-unstyled -->
                            </div><!-- /.footer-widget footer-widget__contact -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-xl-4 col-lg-6">
                            <div class="footer-widget footer-widget__newsletter">
                                <h3 class="footer-widget__title">Contact With Us</h3>
                                <form action="#" class="footer-widget__newsletter-form">
                                    <input type="text" placeholder="Email address" name="email">
                                    <input type="text" placeholder="Mobile Number" name="email">
                                    <button type="submit"><i class="fa fa-envelope"></i></button>
                                </form><!-- /.footer-widget__newsletter-form -->
                                <p>Feel free to contact us ...</p>
                            </div><!-- /.footer-widget footer-widget__newsletter -->
                        </div><!-- /.col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container">
                        <p>© copyright 2021 by Vicenzaservice</p>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div><!-- /.footer-social -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="{{asset('public/frontEnd/assets/images/shapes/close-1-1.png')}}" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p>Lorem Ipsum is simply dummy text the printing and setting industry. Lorm Ipsum has been the
                    industry's stanard dummy text ever. </p>
                <p><a href="mailto:needhelp@oapee.com">needhelp@oapee.com</a> <br> <a href="tel:888-999-0000">888 999
                        0000</a></p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!-- Plugin scripts -->
    <script src="{{asset('public/frontEnd/assets/js/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/isotope.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/wow.js')}}"></script>
    <script src="{{asset('public/frontEnd/assets/js/theme.js')}}"></script>
</body>

</html>
