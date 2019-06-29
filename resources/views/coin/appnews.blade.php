<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
<meta charset="UTF-8">
<!-- Responsive Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- favicon & bookmark -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"  href="images/bookmark.png" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<!-- Font Family -->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
<!-- Website Title -->
{{-- <title>{{$data->title}}</title> --}}
<!-- Stylesheets Start -->
<link rel="stylesheet" href="{{asset('landing/css/fontawesome.min.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('landing/css/bootstrap.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('landing/css/animate.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('landing/css/owl.carousel.min.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('landing/style.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('landing/css/responsive.css')}}" type="text/css"/>
</head>
<body class="single-post">
<!--Main Wrapper Start-->
<div class="wrapper" id="top">
  <!--Header Start -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 logo"> <a href="/coindeoro.com" title="Cp Aluminium"> <img class="light" src="{{asset('landing/images/logowhite.png')}}" alt="Cp Aluminium"> <img class="dark" src="{{asset('landing/images/logodark.png')}}" alt="Cp GoAluminiumld"> </a> </div>
        <div class="col-sm-8 main-menu">
          <div class="menu-icon"> <span class="top"></span> <span class="middle"></span> <span class="bottom"></span> </div>
          <nav>
            <ul>
              <li><a href="/coin">Home</a></li>
              <li><a href="/coin#about">About ico</a></li>
              <li><a href="/coin#token">token</a></li>
              <li><a href="/coin#roadmap">roadmap</a></li>
              <li><a href="/coin#team">team</a></li>
              <li><a href="/coin#press">press</a></li>
              <li class="nav-btn"><a href="">Sign In</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--Header End-->

  <!-- Content Section Start -->
  @yield('content')
  <!-- Content Section End -->
  <div class="clear"></div>
  <!--footer Start-->
  <footer class="footer-1">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box-1">
          <div class="footer-logo"> <a href="#" title=""><img src="{{asset('landing/images/logo.png')}}" height="250" alt="Cp Silver"></a> </div>

        </div>
        <div class="col-md-4 footer-box-2">
          <div class="sec-title">
            <h4 class="widget-title">Pages</h4>
          </div>
          <ul class="footer-menu">
            <li><a href="#about">About ICO</a></li>
            <li><a href="#token">Token</a></li>
            <li><a href="#roadmap">Roadmap</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#press">Press</a></li>
            <li><a href="#">Sign In</a></li>
          </ul>
        </div>
        <div class="col-md-4 footer-box-3">
          <div class="sec-title">
            <h4 class="widget-title">Newsletter</h4>
          </div>
          <p>Keep up to date with our progress.<br/>
            Subscribe for e-mail updates.</p>
          <div class="newsletter">
            <form>
              <div class="input">
                <input type="email" name="Email" placeholder="Your email address">
              </div>
              <div class="submit">
                <input type="submit" name="subscribe" value="subscribe">
              </div>
            </form>
          </div>
          <div class="socials">
            <ul>
              <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i> facebook</a></li>
              <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i> Twitter</a></li>
              <li><a href="https://plus.google.com/"><i class="fab fa-google-plus-g"></i> Google +</a></li>
              <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="copyrights style-1"> © 2018 Coindeoro. Design & Developed by <a href="#">Cir Developers Inc.</a> </div>
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
</body>
</html>
