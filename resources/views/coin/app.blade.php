<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="{{asset('landing/images/bookmark.png')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('landing/images/favicon.ico')}}" type="image/x-icon" />
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <!-- Website Title -->
    <title>Coin De Oro</title>
    <!-- Stylesheets Start -->
    <link rel="stylesheet" href="{{asset('landing/css/fontawesome.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('landing/css/animate.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('landing/style.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('landing/css/responsive.css')}}" type="text/css"/>

    {{-- CHART ASSET --}}
    {!! Charts::assets() !!}
     <!-- Stylesheets End -->
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


    {{-- progressbar --}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/loading-bar.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.lineProgressbar.css')}}"/>

</head>
<body>
    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
        <!--Header Start -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 logo">
                        <a href="cp-gold.html" title="Cp Gold">
                            <img class="light" src="{{asset('landing/images/logowhite.png')}}"height="50" alt=" ">
                            <img class="dark" src="{{asset('landing/images/logodark.png')}}"height="60" alt="Cp Gold">
                        </a>
                    </div>
                    <div class="col-sm-8 main-menu">
                        <div class="menu-icon">
                          <span class="top"></span>
                          <span class="middle"></span>
                          <span class="bottom"></span>
                        </div>
                        <nav>
                            <ul>
                                <li class="active"><a href="#top">Home</a></li>
                                <li><a href="#about">About ico</a></li>
                                <li><a href="#token">token</a></li>
                                <li><a href="#roadmap">roadmap</a></li>
                                <li><a href="#team">team</a></li>
                                <li><a href="#press">press</a></li>
                                <li class="nav-btn"><a href="http://secure.coindeoro.com">Sign In</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->
        @foreach($graphdetails as $graphs)
        <!-- Content Section Start -->
        <div class="midd-container">
            <!-- Hero Section Start -->
            <div class="hero-main layout-3 white-sec" style="background-image:url('landing/images/banner.jpg');">
                <div id="gold-tech-bg"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 hero-caption wow fadeIn text-center">
                            <div class="sec-title text-center">
                                <h1>Coin De Oro <span>Pre-sale Token</span> of Your ICO That Change <span>Your Life</span></h1>
                            </div>
                            <!--<p class="lead"><h1>Invest. <span>Fundraise.</span> Transfer.</span></h1></p>-->
                        </div>
                        <div class="col-sm-10 wow fadeIn" data-wow-delay="0.5s">
                            <div class="pre-sale-timer-outer">
                                <div class="pre-sale-timer style-2">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <h3>Pre-Sale <span>will end in</span></h3>
                                            <div id="clock"></div>
                                            <div class="hero-right-btn"><a class="btn btn4" href="#">Register & Buy Tokens Now</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rang-slider-main">
                                                <div class="rang-slider-toltip">
                                                    <span><strong>Token Sales Progress</strong></span>
                                                    <br>
                                                    <span>Total Token <strong>{{ number_format($graphs->total_tokens) }}  ORO</strong></span>
                                                </div>
                                                <div class="rang-slider">
                                                    <div id="demoprogressbar8" data-progress-color="#f1c40f"></div>
                                                </div>
                                                <div class="rang-slider-total">
                                                <span>Raised Amount <strong>{{ number_format($graphs->sales_token)}}  ORO</strong></span>
                                                <div id="pers" class="rangTotal"></div><h4>%</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="we-accept-section">

                                <ul>
                                <br><br>
                                <a href=""><img src="{{asset('landing/images/appstore.png')}} " width="280" height="80" alt="" style='padding-left : 10px' ></a>

                                <a href=""> <img src="{{asset('landing/images/playstore.png')}}" width="280" height="80" alt="" style='padding-left : 10px' ></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Hero Section End -->
            <!--About Start -->
            <div class="about-section style-2 p-tb" id="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-6 about-left">
                             <div class="sec-title"><h1>About</h1><h3>Why to choose Coin De Oro?</h3></div>
                             <h5 class="accent-color">COINDEORO is a cutting edge exchange which makes investing and payments easy and safe worldwide. We are bringing trading and banking to a new generation of blockchain to automate transactions processing and save billions of work hours per year. </h5>

                             <a class="btn" href="#">Download White paper</a>

                        </div>
                        <div class="col-sm-6 about-right order-first order-md-last">
                            <img src="{{asset('landing/images/about-img.png')}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
            <!--About end -->
            <!-- Benefits Start -->
            <div class="benefits p-tb white-sec">
                <div class="container">
                    <div class="sec-title text-center"><h3>Key Features</h3></div>
                    <div class="sub-txt text-center">
                        <p>Decentralized Financial System. </p>
                    </div>
                </div>
                <div class="container">
                    <div class="benefits-boxes row">
                        <div class="col-md-6">
                            <div class="item wow fadeInUp">
                                <div class="bf-image">
                                    <img src="{{asset('landing/images/icon-1.png')}}" alt="Read Time Update">
                                </div>
                                <div class="bf-details">
                                    <h3>We'll Guide You</h3>
                                    <p>For those willing to invest in the Filipino revolution but lack the technical know how, our in-house 24/7 tech support will assist you in securing your Coin De Oro.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp">
                                <div class="bf-image">
                                <img src="{{asset('landing/images/icon-2.png')}}" alt="Cloud Based">
                                </div>
                                <div class="bf-details">
                                    <h3>Cloud Based</h3>
                                    <p>99.5% of our users' funds are kept in a cold storage with multi-signature technology</p>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bf-image">
                                    <img src="{{asset('landing/images/icon-3.png')}}" alt="No transaction fees">
                                </div>
                                <div class="bf-details">
                                    <h3>GLOBAL Investment</h3>
                                    <p>Philippines has turned to the international community and believers in the Filipino movement to fund the development of a better country.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="bf-image">
                                    <img src="{{asset('landing/images/icon-4.png')}}" alt="Instant operations">
                                </div>
                                <div class="bf-details">
                                    <h3>DDOS Protection</h3>
                                    <p>Advanced distributed system architecture built to protect against DDoS to ensure that trading cannot be halted by outside attacks</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{asset('landing/images/icon-5.png')}}" alt="Strong teams & Advisors">
                                </div>
                                <div class="bf-details">
                                    <h3>Backed by the Filipino people</h3>
                                    <p>Thousands of Filipino are actively involved in the Coin De Oro project one way or the other.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="bf-image">
                                    <img src="{{asset('landing/images/icon-6.png')}}" alt="Protects the identity">
                                </div>
                                <div class="bf-details">
                                    <h3>Protects the identity</h3>
                                    <p>All data from website is transmitted using encrypted Transport Layer Security (TLS) connections (i.e., HTTPS)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Benefits End -->
            <!-- Token Sale start -->
            <div class="token-sale p-tb" id="token">
                <div class="container">
                    <div class="sec-title text-center"><h3>Token Sale</h3></div>
                    <div class="sub-txt text-center">
                        <p>Join our fundraising events for the Investors and IEO projects.</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="token-sale-box">
                                <ul>
                                    <li>
                                        <span>Cost of 1 token ORO:</span>
                                        <p>0.0001 BTC</p>
                                    </li>
                                    <li>
                                        <span>Term of token sale:</span>
                                        <p>900 days with the possibility of an automatic early completion in pursuing the final goals of ICO</p>
                                    </li>
                                    <li>
                                        <span>Expanded goals after start of ICO:</span>
                                        <p>Impossible</p>
                                    </li>
                                    <li>
                                        <span>Technical limitation of tokens:</span>
                                        <p>37,000,000</p>
                                    </li>
                                    <li>
                                        <span>Adjustable emission:</span>
                                        <p>All unsold and unallocated tokens will bе destroyed and additional release оf tokens will not be possible</p>
                                    </li>
                                    <li>
                                        <span>Secured ways to purchase tokens:</span>
                                        <p>Bitcoin (BTC), Ethereum (ETH), fiat payments</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-7">
                                @yield('graph')

                            <div class="we-accept-this">

                                <h6><span>ACCEPTANCE:</span> BTC, ETH, BCH, LTC, DASH</h6>
                                <img src="{{asset('landing/images/accept-icon.png')}}" alt="BTC, ETH, BCH, LTC, DASH">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="empty-45"></div>
                            <div class="sec-title text-center">
                                <h3>Distribution of Tokens</h3>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn">
                            <div class="sale-chart-view">
                                <div class="doughnut">
                                    <div class="doughnutChartContainer">
                                        <canvas id="doughnutChart" height="270"></canvas>
                                    </div>
                                    <div id="legend" class="chart-legend"></div>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn">
                            <div class="sale-chart-view">
                                <div class="doughnut">
                                    <div class="doughnutChartContainer">
                                        <canvas id="layout2doughnutChart1" height="270"></canvas>
                                    </div>
                                    <div id="layout2legend1" class="chart-legend"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Token Sale end -->
            <!-- The Roadmap  start-->
            @yield('road')
            <!-- The Roadmap end-->
            <!-- Team sec start-->
            <div class="team-section style-2 p-tb" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <div class="sec-title"><h3>The Next Airline Urban Mobility</h3></div>
                            <div class="expert-slider owl-carousel">
                                <div class="item">
                                    <div class=" ">
                                        <img src="{{asset('landing/images/team-bg1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class=" ">
                                        <img src="{{asset('landing/images/team-medium.jpg')}}" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team sec end-->
            <!-- FAQ Section start-->
            <div class="faq-section p-tb" id="faq">
                <div class="container">
                    <div class="sec-title text-center"><h3>Frequently Asked Questions</h3></div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingOne1">
                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                            <h5 class="mb-0">
                                                When would I be able to see my token balance? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingTwo2">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            <h5 class="mb-0">
                                                Is it possible for the citizens or residents of the US to participate in the Token Sale? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingThree3">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                            <h5 class="mb-0">
                                                Is there a KYC process involved? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingFour4">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour4" aria-expanded="false" aria-controls="collapseFour4">
                                            <h5 class="mb-0">
                                                What will happen to the unsold tokens? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingFive5">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                                            <h5 class="mb-0">
                                                Which cryptocurrencies can I use to participate in the Token Sale? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingSix6">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix6" aria-expanded="false" aria-controls="collapseSix6">
                                            <h5 class="mb-0">
                                                Are there any restrictions that involve a minimum or a maximum transaction limit? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->
                                <!-- Accordion card -->
                                <div class="card">
                                    <!-- Card header -->
                                    <div class="card-header" role="tab" id="headingSeven7">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSeven7" aria-expanded="false" aria-controls="collapseSeven7">
                                            <h5 class="mb-0">
                                                Where is the company registered? Where is the Coinpool office located? <i class="fas fa-caret-down rotate-icon"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <!-- Card body -->
                                    <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7" data-parent="#accordionEx">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices. Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique.  Ut quis blandit dolor. Ut laoreet sagittis arcu eu tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt ultrices.
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion card -->

                            </div>
                            <!-- Accordion wrapper -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQ Section end-->
            <!-- blog section -->
@yield('content')

            <!-- blog section end -->
            <!-- Brand logo slider -->
            <div class="brand-logo-slider">
                <div class="container">
                    <div class="brand-logos owl-carousel">
                        <div class="item"><img src="{{asset('landing/images/brand-logo1.png')}}"height="50" alt="Brand Logo 1" /></div>
                        <div class="item"><img src="{{asset('landing/images/brand-logo2.png')}}"height="30" alt="Brand Logo 2" /></div>
                        <div class="item"><img src="{{asset('landing/images/brand-logo3.png')}}"height="40" alt="Brand Logo 5" /></div>
                        <div class="item"><img src="{{asset('landing/images/brand-logo4.png')}}"height="40" alt="Brand Logo 1" /></div>


                    </div>
                </div>
            </div>
                <!--footer Start-->
                <footer class="footer-2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="footer-block">
                                <div class="sec-title text-center">
                                    <h4 class="widget-title">Get specials offers - Subscribe for more informations!</h4>
                                </div>
                                <p>We are building the future of capital markets and money.</p>
                                <div class="newsletter">
                                    <form>
                                        <div class="input"><input type="email" name="Email" placeholder="Your email address"></div>
                                        <div class="submit"><input type="submit" name="subscribe" value="subscribe"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="socials">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>


                                        <li><a class="bitcoin" href="#"><i class="fab fa-btc"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a class="medium" href="#"><i class="fab fa-medium-m"></i></a></li>
                                    </ul>
                                </div>
                                <div class="copyrights">
                                    © 2019 Coin De Oro. All rights reserved
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--footer end-->
            </div>
            <!--Main Wrapper End-->
            <script src="{{asset('landing/js/jquery.min.js')}}"></script>
            <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('landing/js/onpagescroll.js')}}"></script>
            <script src="{{asset('landing/js/wow.min.js')}}"></script>
            <script src="{{asset('landing/js/jquery.countdown.js')}}"></script>
            <script src="{{asset('landing/js/owl.carousel.js')}}"></script>
            <script src="{{asset('landing/js/Chart.js')}}"></script>
            <script src="{{asset('landing/js/script.js')}}"></script>
            <script src="{{asset('landing/js/particles.js')}}"></script>
            <script src="{{asset('landing/js/gold-app.js')}}"></script>

            {{-- progressbar --}}
            <script type="text/javascript" src="{{asset('js/loading-bar.js')}}"></script>

            <script type="text/javascript" src="{{asset('js/jquery.lineProgressbar.js')}}"></script>

            {{-- FORMULA PERCENT --}}
            <script>
                var result = Math.floor(( {{$graphs->sales_token}} / {{$graphs->total_tokens}}) * 100);
                document.getElementById("pers").innerHTML = result ;
                // console.log(result);
            </script>

            <script>
                $('#demoprogressbar8').LineProgressbar({
	            percentage: {{$graphs->sales_token}} / {{$graphs->total_tokens}} * 100,
	            fillBackgroundColor: '#f1c40f'
                });
            </script>

</body>
</html>
