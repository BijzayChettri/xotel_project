<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Xotel') }}</title> -->
    <title>Xotel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- --------------------------------------------xotel------------------------ -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="user-scalable=no, width=device-width">
    <link rel="dns-prefetch" href="https://maps.googleapis.com/">
    <link rel="dns-prefetch" href="https://maps.gstatic.com/">
    <link rel="dns-prefetch" href="https://mts0.googleapis.com/">
    <link rel="dns-prefetch" href="https://mts1.googleapis.com/">
    <!-- Metas For sharing property in social media -->
    <meta property="og:url" content="https://demowpthemes.com/buy2rental" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="{{ asset('front/images/banners/banner_1639745343.jpg') }}" />

    <link rel="shortcut icon" href="{{ asset('front/images/logos/1628150085_favicon.png') }}">
    <meta property="og:image" content="">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- <meta name="csrf-token" content="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr"> -->

    <!-- CSS  new version start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/daterangepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/glyphicon.css') }}" />

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- ------------------------------------------end---------------------- -->
</head>

<body>
    <!--================ Header Menu Area start =================-->
    <style>
    :root {
        --primary-color: #ed3615;
    }
    </style>
    <!-- <script src="../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<script>
setInterval(function(){
const timeString = moment.utc(moment().endOf('hour').diff()).format('HH:mm:ss')
document.getElementById('timer').innerHTML = timeString;
}, 1000);
</script> -->
    <style>
    .svrestore {
        background: #fff;
        color: red;
        font-size: 13px !important;
        padding: 0px 7px;
    }

    .sv_demo_mode {
        background: #ff0000;
        color: #fff;
        text-align: center;
        width: 100%;
        height: 28px;
    }

    .header_area {
        top: 28px;
    }

    .sv_demo_mode span {
        font-size: 14px;
        font-weight: 600;
    }
    </style>
    <div id="app">
        <header class="header_area  animated fadeIn homenav">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid container-fluid-90">
                        <a class="navbar-brand logo_h d-none dark_logo" aria-label="logo"
                            href="{{route('home')}}"><img
                                src="{{ asset('front/images/logos/xotel2.jpeg') }}" alt="logo"
                                class="img-130x32"></a>

                        <a class="navbar-brand logo_h light_logo" aria-label="logo"
                            href="{{route('home')}}"><img
                                src="{{ asset('front/images/logos/xotel2.jpeg') }}" alt="logo"
                                class="img-130x32"></a>

                        <a class="navbar-brand logo_h d-block" aria-label="logo"
						href="{{route('home')}}"><img
                                src="{{ asset('front/images/logos/1628150085_favicon.png') }}" alt="logo"
                                class="mob-logo"></a>
                        <a href="#" onclick="goBack()" class="mob-back-btn d-block d-sm-none"><i
                                class="fas fa-chevron-left"></i></a>
                        <!-- Trigger Button -->
                        <a href="#" aria-label="navbar" class="navbar-toggler" data-toggle="modal"
                            data-target="#left_modal">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!--<h4 class="sv_header_text mt-3">Make Your Reservation</h4>-->


                        <!--<p class="sv_start_your_search text-14 p-2 pl-4 min-w-250 hide">Start Your Search
				    <button type="submit" class="btn vbtn-default p-2 ml-5 text-14"><i class="fa fa-search"></i> </button>
				</p>-->


                        <form id="front-search-form1" method="post" action="https://demowpthemes.com/buy2rental/search"
                            class="mob-search mt-3 mb-3 p-2">
                            <input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
                            <div class="row">
                                <input autocomplete="off" class="form-control p-3 text-14 ml-3 m-0"
                                    id="front-search-field1" placeholder="Where are you going?" name="location"
                                    type="text" value="" required>

                                <button type="submit" class="btn vbtn-default p-2 ml-5 text-14"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </form>


                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <div class="nav navbar-nav menu_nav justify-content-end">

                                <!--                                <div class="nav-item">
                                    <a class="nav-link p-2 mt-3" href="https://demowpthemes.com/buy2rental/property/create" aria-label="property-create">
                                        <button class="btn button vbtn-default text-14 p-0 mt-2 pl-4 pr-4 br-50">
                                            <p class="p-3 mb-0">  Add your Space</p>
                                        </button>
                                    </a>
                                </div>
                            -->
                                <div class="nav-item">
                                    <a class="nav-link p-2 mt-3" href="{{ route('register') }}" aria-label="property-create">
                                        <button class="btn button vbtn-default text-14 p-0 mt-2 pl-4 pr-4 br-50" >
                                            <p class="p-3 mb-0"> Add your Space</p>
                                        </button>
                                    </a>
                                </div>

                                <!--<div class="nav-item">
                            <a class="nav-link" href="#" aria-label="signup">Become a Host</a>
                        </div>-->

                                <!-- <div class="nav-item">
                                    <a class="nav-link globe" href="#" aria-label="modalLanguge" data-toggle="modal"
                                        data-target="#languageModalCenter"> <i class="fa fa-globe text-18"></i> </a>
                                </div>

                                <div class="nav-item">
                                    <div class="dropdown sv_user_login">
                                        <button class="dropdown-toggle" type="button" data-toggle="dropdown"><i
                                                class="fa fa-bars" aria-hidden="true"></i>
                                            <img src="{{ asset('images/profile.jpg') }}" class="head_avatar" alt="">
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li><a aria-label="" data-toggle="modal" data-target="#registermodel"
                                                    href="#">Sign Up</a></li>

                                            <li><a aria-label="" data-toggle="modal" data-target="#loginmodel"
                                                    href="#">Log In</a></li>

                                            <hr>
                                            <li><a href="help.html">Help</a></li>
                                        </ul>
                                    </div>

                                </div> -->

                            </div>
                        </div>
                    </div>
                </nav>


            </div>


        </header>
        <!-- Modal Window -->
        <div class="modal right fade" id="left_modal" tabindex="-1" role="dialog" aria-labelledby="left_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0 secondary-bg">

                        <button type="button" class="close text-28" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body p-0">
                        <ul class="mobile-side">
                            <li><a href="https://demowpthemes.com/buy2rental">Home</a></li>
                            <li><a href="become-host.html">Become Host</a></li>
                            <li><a href="help.html">Help</a></li>
                            <li><a href="signup.html">Sign Up</a></li>
                            <li><a href="login.html">Log In</a></li>
                            <li>
                                <a href="#" aria-label="modalLanguge" data-toggle="modal"
                                    data-target="#languageModalCenter"> <i class="fa fa-globe"></i> <u>English </u></a>
                                <a href="#" aria-label="modalCurrency" data-toggle="modal"
                                    data-target="#currencyModalCenter"> <span class="ml-4">&#36; - <u>USD</u>
                                    </span></a>
                            </li>
                            <a class="mt-3" href="login.html">
                                <button class="btn vbtn-outline-success text-14 font-weight-700 pl-5 pr-5 pt-3 pb-3">
                                    Add your Space
                                </button>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--================Header Menu Area =================-->

        <script>
        function goBack() {
            window.history.back();
        }
        </script>


        <!-- login model -->

        <!-- <div class="modal fade" id="loginmodel" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="text-center">Login</h3>
                        <button type="button" class="close closeLight position-relative" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center p-5">
                            <div class=" mb-5">


                                <form id="login_form" method="post"
                                    action="https://demowpthemes.com/buy2rental/authenticate" accept-charset='UTF-8'>
                                    <input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
                                    <div class="form-group col-sm-12 p-0">
                                        <input type="email" class="form-control text-14" value="" name="email"
                                            placeholder="Email">
                                    </div>

                                    <div class="form-group col-sm-12 p-0">
                                        <input type="password" class="form-control text-14" value="" name="password"
                                            placeholder="Password">
                                    </div>


                                    <div class="form-group col-sm-12 p-0 mt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="m-3 text-14">
                                                <input type="checkbox" class='remember_me' id="remember_me2"
                                                    name="remember_me" value="1">
                                                Remember me
                                            </div>

                                            <div class="m-3 text-14">
                                                <a href="#" class="forgot-password text-right" aria-label=""
                                                    data-toggle="modal" data-target="#forgotmodel"
                                                    data-dismiss="modal">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12 p-0">
                                        <button type='submit' id=""
                                            class="btn pb-3 pt-3  button-reactangular text-15 vbtn-success w-100 rounded">
                                            <i class="spinner fa fa-spinner fa-spin d-none"></i>
                                            <span id="btn_next-text" class="font-weight-700">Login</span>
                                        </button>
                                    </div>
                                </form>


                                <div id="sv_phone_div" class="hide">

                                    <form class="" id="otp_form" method="post"
                                        action="https://demowpthemes.com/buy2rental/sendotp" accept-charset='UTF-8'>
                                        <input type="hidden" name="_token"
                                            value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">

                                        <div class="form-group col-sm-12 p-0" id="svpno">
                                            <label class="font-weight-600">Phone</label>
                                            <input type="tel" class="form-control text-14" id="pno" name="pno" required
                                                value="">
                                        </div>
                                        <input type="hidden" name="default_country" id="defaultcountry"
                                            class="form-control">
                                        <input type="hidden" name="carrier_code1" id="carrier_code1"
                                            class="form-control">
                                        <input type="hidden" name="formatted_phone" id="formattedphone"
                                            class="form-control">

                                        <div class="form-input svotp" style="display:none">
                                            <input type="text" class="form-control" id="otp" name="otp"
                                                placeholder="Enter OTP">
                                            <i class="icofont-phone"></i>
                                        </div>

                                        <button type='' id="svsendotp"
                                            class="btn pb-3 mt-3 pt-3 text-15 rounded-3 vbtn-success w-100 rounded"> <i
                                                class="spinner fa fa-spinner fa-spin d-none"></i>
                                            <span id="btn_next-text">Login </span>
                                        </button>
                                    </form>

                                </div>


                                <div class="mt-3 text-14">
                                    Don’t have an account?
                                    <a class="text-danger" id="svregmodal" aria-label="" data-toggle="modal"
                                        data-target="#registermodel" data-dismiss="modal" href="#">
                                        Register
                                    </a>
                                </div>



                                <button class="btn-success btn border-0 pt-3 pb-3 text-16 w-100 mt-3 emailbutt hide">
                                    <span><i class="fa fa-envelope  mr-2 text-16"></i> Sign up with Email </span>
                                </button>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div> -->



        <!-- Register modal -->
        <!-- <div class="modal fade" id="registermodel" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="text-center"> Register</h3>
                        <button type="button" class="close closeLight position-relative" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="d-flex justify-content-center">

                            <div class="p-5 mb-5">
                                <form id="signup_form" name="signup_form" method="post"
                                    action="https://demowpthemes.com/buy2rental/create" class='signup-form login-form'
                                    accept-charset='UTF-8' onsubmit="return ageValidate();">
                                    <input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
                                    <div class="row text-16">
                                        <input type="hidden" name='email_signup' id='form'>
                                        <input type="hidden" name="default_country" id="default_country"
                                            class="form-control">
                                        <input type="hidden" name="carrier_code" id="carrier_code" class="form-control">
                                        <input type="hidden" name="formatted_phone" id="formatted_phone"
                                            class="form-control">
                                        <div class="form-group col-sm-12 p-0">
                                            <input type="text" class='form-control text-14 p-2' value=""
                                                name='first_name' id='first_name' placeholder='First Name'>
                                        </div>

                                        <div class="form-group col-sm-12 p-0">
                                            <input type="text" class='form-control text-14 p-2' value=""
                                                name='last_name' id='last_name' placeholder='Last Name'>
                                        </div>

                                        <div class="form-group col-sm-12 p-0">
                                            <input type="text" class='form-control text-14 p-2' value="" name='email'
                                                id='email' placeholder='Email'>
                                            <div id="emailError"></div>
                                        </div>

                                        <div class="form-group col-sm-12 p-0">
                                            <input type="tel" class="form-control text-14 p-2" id="phone" name="phone"
                                                placeholder="111-111-1111">
                                            <span id="tel-error" class="text-13 text-danger"></span>
                                            <span id="phone-error" class="text-13 text-danger"></span>
                                        </div>

                                        <div class="form-group col-sm-12 p-0">
                                            <input type="password" class='form-control text-14 p-2' name='password'
                                                id='password' placeholder='Password'>
                                        </div>


                                        <button type='submit' id="btn"
                                            class="btn pb-3 pt-3 text-15 button-reactangular vbtn-success w-100 ml-0 mr-0 mb-3">
                                            <i class="spinner fa fa-spinner fa-spin d-none"></i>
                                            <span id="btn_next-text" class="font-weight-700">Sign Up</span>
                                        </button>
                                    </div>
                                </form>
                                <div class="text-14">
                                    Already an Buy2Rental member?
                                    <a href="#" aria-label="" data-toggle="modal" data-target="#loginmodel"
                                        id="svloginmodal" data-dismiss="modal">
                                        Log In
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div> -->
    </div>
    </div>



    <!-- <div class="modal fade" id="forgotmodel" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="text-center">Reset Password</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="mt-5">
                        <div class="col-md-12">
                            <form id="forgot_password_form" method="post"
                                action="https://demowpthemes.com/buy2rental/forgot_password"
                                class='signup-form login-form mt-3' accept-charset='UTF-8'>
                                <input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
                                <div class="form-group col-sm-12 p-0 mt-3">
                                    <label class="font-weight-600">Please enter your email address </label>
                                    <input type="text" id="email" class="form-control" name="email" placeholder="">
                                </div>

                                <div class="form-group col-sm-12 p-0 mt-5">
                                    <button id="reset_btn"
                                        class="btn pb-3 pt-3 text-15 button-reactangular vbtn-success w-100 rounded"
                                        type="submit"> <i class="spinner fa fa-spinner fa-spin d-none"></i>
                                        <span id="btn_next-text" class="font-weight-700">Reset Your Password</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div> -->
    <main class="py-4">
        @yield('content')
    </main>
    </div>
</body>

</html>