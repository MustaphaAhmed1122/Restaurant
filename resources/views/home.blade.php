<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
      {{--    fontawesome--}}
    <script src="https://kit.fontawesome.com/c0e7f2dc3c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="assets/images/cutlery.png">
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/home') }}" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>


                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> --}}
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="#offers">Offers</a></li>

                        <div class="navbar align-self-center d-flex">
                            @auth()
                            <a class="nav-icon position-relative text-decoration-none" href="{{ url('/showcart',Auth::user()->id) }}">
                                <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                                    {{ $counter }}
                                </span>
                            </a>
                            @endauth
                            @guest()
                                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">
                                    cart[0]
                                </span>
                            @endguest
                        </div>

{{--                            <li class="scroll-to-section">--}}
{{--                                @auth()--}}
{{--                                <a href="{{ url('/showcart',Auth::user()->id) }}">--}}
{{--                                    Cart[{{ $counter }}]--}}
{{--                                </a>--}}
{{--                                @endauth--}}
{{--                                    @guest()--}}
{{--                                        cart[0]--}}
{{--                                    @endguest--}}
{{--                                </li>--}}

                            <li>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                                   <li>
                                    <x-app-layout>

                                    </x-app-layout>
                                    </li>
                        @else
                                <li>
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                                </li>
                        @if (Route::has('register'))
                                    <li>
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    </li>
                        @endif
                        @endauth
                            </div>
                        @endif
                        </li>
                        </ul>
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    @include('about')
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
@include('menu')
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
   @include('reservation')
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Offer Area Starts ***** -->
    @include('offer')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.

                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>


{{--    fontawesome--}}
    <script src="https://kit.fontawesome.com/c0e7f2dc3c.js" crossorigin="anonymous"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>
  </body>
</html>
