<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="" >
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                    <a href="{{ url('/') }}" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
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
<div id="top">
    <table align="center" bgcolor="yellow">
        <tr>
            <th style="padding: 30px;">Food Name</th>
            <th style="padding: 30px;">Price</th>
            <th style="padding: 30px;">Quantity</th>
            <th style="padding: 30px;">Action</th>
        </tr>

        <form action="{{ url('/orderconfirm') }}" method="post" enctype="multipart/form-data">
            @csrf

        @foreach($data as $show)
            <tr align="center">
                <td><input type="text" name="foodname[]" value="{{ $show->name }}" hidden>{{ $show->name }}</td>
                <td><input type="text" name="price[]" value="{{ $show->price }}" hidden>{{ $show->price }}</td>
                <td><input type="text" name="quantity[]" value="{{ $show->quantity }}" hidden>{{ $show->quantity }}</td>
            </tr>
        @endforeach
        @foreach($data2 as $data2)
            <tr style="position: relative; top: -100px; right: -360px;">
                <td> <a class="btn btn-outline-danger" href="{{ url('/removefood',$data2->id) }}">Remove</a></td>
            </tr>
        @endforeach
    </table>
    <div align="center" style="padding: 10px;">
        <button class="btn btn-outline-primary" id="order" type="button">Order Now</button>
    </div>
    <div id="appear" align="center" style="padding: 10px; display: none;">
        <div style="padding: 10px;">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div style="padding: 10px;">
            <label>Phone</label>
            <input type="number" name="phone" placeholder="Enter your phone">
        </div>
        <div style="padding: 10px;">
            <label>Address</label>
            <input type="text" name="address" placeholder="address">
        </div>
        <div style="padding: 10px;">
            <input type="submit" class="btn btn-success" value="Order Confirm">
            <button id="close" class="btn btn-danger" type="button">Close</button>
        </div>
    </div>
</div>
</form>
<script type="text/javascript">
    $("#order").click(
        function () {
        $("#appear").show();
        }
    );
    $("#close").click(
        function () {
            $("#appear").hide();
        }
    );
</script>



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
