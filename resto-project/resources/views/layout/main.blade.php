<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cafe Dreamy</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS
        ================================================ -->
        <!-- Owl Carousel -->
		<link rel="stylesheet" href="{{ url('css/owl.carousel.css')}}">
        <!-- bootstrap.min css -->
		<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
        <!-- Font-awesome.min css -->
		<link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{ url('css/animate.min.css')}}">

		<link rel="stylesheet" href="{{ url('css/main.css')}}">
        <!-- Responsive Stylesheet -->
		<link rel="stylesheet" href="{{ url('css/responsive.css')}}">
		<!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="{{ url('js/jquery.nav.js')}}"></script>
    <script src="{{ url('js/jquery.sticky.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/plugins.js')}}"></script>
    <script src="{{ url('js/wow.min.js')}}"></script>
    <script src="{{ url('js/main.js')}}"></script>
	</head>
	<body>
	<!--
	header-img start 
	============================== -->
    <section id="hero-area">
        <img class "{{ url('img-responsive')}}" src="{{url('')}}" alt="">
    </section>
	<!--
    Header start 
	============================== -->
	<nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                                  <a class="navbar-brand" href="#">
                                    <img src="{{ url('images/logo.png')}}" alt="Logo">
                                  </a>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="nav navbar-nav navbar-right" >
                                    <li>
                                        <a class="nav-link" href="{{url('dashboard')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Home</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('menu')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Menu</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('order')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Order</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('reservasi')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Reservation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('delivery')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Delivery</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('event')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Event</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('contact')}}">
                                            <i class="n"></i>
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                    </li>                        
                                    <li class="class="nav navbar-nav navbar-right"">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                        
                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                </div>
                          </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
	</nav><!-- header close -->

    
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Today <span>Menu</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-1.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-3.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-4.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-1.')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-2.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-3.jpg')}}" alt="">
                            </div>
                            <div>
                                <img class="{{ url('img-responsive')}}" src="{{ url('images/slider/slider-img-4.jpg')}}" alt="">
                            </div>
                        
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    @yield('content')


