@extends('layouts.appUser')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<section class="hero-banner magic-ball home">
    <!--Desktop view-->

    <div class="main-banner">
        <div class="align-items-center text-center text-md-left svmobsearch desk-search-form container">

            <div class="row mt-3">
                <div class="col-lg-xl offset-xl-1 col-lg-10 offset-lg-1 mt-80">

                    <div class="main_formbg item animated zoomIn mob-form-bg">

                        <form id="front-search-form" method="post" action="https://demowpthemes.com/buy2rental/search">
                            <input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Location</label>
                                    <input class="form-control p-3 text-14" id="front-search-field"
                                        placeholder="Where are you going?" autocomplete="off" name="location"
                                        type="text" required>
                                </div>

                                <div class="col-md-4 nopadding ">
                                    <div class="row" id="daterange-btn">
                                        <div class="col-md-6 col-6 mt-4 mt-md-0 mob-pd-0">
                                            <label>Check In</label>
                                            <input class="form-control p-3  text-14 checkinout" name="checkin"
                                                id="startDate" type="text" placeholder="Add Dates" autocomplete="off"
                                                readonly="readonly" required>
                                        </div>
                                        <div class="col-md-6 col-6 mt-4 mt-md-0 mob-pd-0">
                                            <label>Check Out</label>
                                            <input class="form-control p-3 text-14 checkinout" name="checkout"
                                                id="endDate" placeholder="Add Dates" type="text" readonly="readonly"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 border-right-0 mt-4 mt-md-0">
                                    <label>Guest</label>
                                    <select id="front-search-guests" class="form-control  text-14">
                                        <option class="p-4 text-14" value="1">1 Guest</option>
                                        <option class="p-4 text-14" value="2"> 2 Guests </option>
                                        <option class="p-4 text-14" value="3"> 3 Guests </option>
                                        <option class="p-4 text-14" value="4"> 4 Guests </option>
                                        <option class="p-4 text-14" value="5"> 5 Guests </option>
                                        <option class="p-4 text-14" value="6"> 6 Guests </option>
                                        <option class="p-4 text-14" value="7"> 7 Guests </option>
                                        <option class="p-4 text-14" value="8"> 8 Guests </option>
                                        <option class="p-4 text-14" value="9"> 9 Guests </option>
                                        <option class="p-4 text-14" value="10"> 10 Guests </option>
                                        <option class="p-4 text-14" value="11"> 11 Guests </option>
                                        <option class="p-4 text-14" value="12"> 12 Guests </option>
                                        <option class="p-4 text-14" value="13"> 13 Guests </option>
                                        <option class="p-4 text-14" value="14"> 14 Guests </option>
                                        <option class="p-4 text-14" value="15"> 15 Guests </option>
                                        <option class="p-4 text-14" value="16"> 16+ Guest </option>
                                    </select>
                                </div>

                                <div class="col-md-1 front-search mt-2 border-right-0 d-none d-sm-block">
                                    <button type="submit" class="btn vbtn-default btn-block p-3 text-16"><i
                                            class="fa fa-search"></i></button>
                                </div>
                                <div class="col-12 d-block d-sm-none front-search mt-2">
                                    <button type="submit" class="btn vbtn-default btn-block p-3 text-16"><i
                                            class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('front/images/banners/banner_1640077336.jpg') }}"
                        alt="First slide">
                    <div class="carousel-caption ">
                        <div class="sv_home_subsec text-center">
                            <h2 class="banner-title"> Book Top Hill Tent </h2>
                            <h4 class="banner-title"> Experiences Local things to do, wherever you are. </h4>
                            <div align="center" class="flexible-btn mt-5">
                                <a class="btn pl-5 pr-5 text-16 btn vbtn-default br-50" onclick="getLocation()"
                                    href="#">I’m flexible</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="d-block w-100" src="{{ asset('front/images/banners/banner_1639745343.jpg') }}"
                        alt="First slide">
                    <div class="carousel-caption ">
                        <div class="sv_home_subsec text-center">
                            <h2 class="banner-title"> Get your Rental Home </h2>
                            <h4 class="banner-title"> Website packages of worldwide. </h4>
                            <div align="center" class="flexible-btn mt-5">
                                <a class="btn pl-5 pr-5 text-16 btn vbtn-default br-50" onclick="getLocation()"
                                    href="#">I’m flexible</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <!--Desktop view end-->



    <!--Mobile view-->
    <!--Mobile view end-->
</section>
<section class="recommandedbg bg-gray mt-4 magic-ball magic-ball-about pb-5">
    <div class="container-fluid container-fluid-90">
        <div class="row">
            <div class="recommandedhead col-md-12">
                <p class="item animated fadeIn text-30 font-weight-700 m-0">Recommended Home</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/single-room-in-chennai-1.html" aria-label="single room in Chennai">
                            <figure class="">
                                <img src="{{ asset('images/property/70/1636187496_1629728681_barce1.jpg') }} "
                                    class="room-image-container200" alt="single room in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist70">
                            <i class="icon icon-heart-alt b-login" id="wishlistid70"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/single-room-in-chennai-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> single room in Chennai
                                    </p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">0.5 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Chennai</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 5 / night </span>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis70(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist70").load(location.href + " .svwishlist70");
                        document.getElementById('wishlistid70').style.display = 'none';
                        document.getElementById('closedid70').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis70(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist70").load(location.href + " .svwishlist70");
                        document.getElementById('wishlistid70').style.display = 'block';
                        document.getElementById('closedid70').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/apartment-in-budapest-1.html" aria-label="Apartment in Budapest">
                            <figure class="">
                                <img src="{{ asset('images/property/55/1629730932_budapest1.jpg') }}"
                                    class="room-image-container200" alt="Apartment in Budapest" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist55">
                            <i class="icon icon-heart-alt b-login" id="wishlistid55"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/apartment-in-budapest-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Apartment in Budapest
                                    </p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">12 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">5 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">5 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Budapest</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 55 / night </span>
                            <i class="icon icon-instant-book yellow_color text-25" aria-hidden="true"></i>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis55(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist55").load(location.href + " .svwishlist55");
                        document.getElementById('wishlistid55').style.display = 'none';
                        document.getElementById('closedid55').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis55(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist55").load(location.href + " .svwishlist55");
                        document.getElementById('wishlistid55').style.display = 'block';
                        document.getElementById('closedid55').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/island-1.html" aria-label="Island">
                            <figure class="">
                                <img src="{{ asset('images/property/47/1629904717_13.jpg') }}"
                                    class="room-image-container200" alt="Island" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist47">
                            <i class="icon icon-heart-alt b-login" id="wishlistid47"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/island-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Island</p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">4 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> New York</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 50 / night </span>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis47(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist47").load(location.href + " .svwishlist47");
                        document.getElementById('wishlistid47').style.display = 'none';
                        document.getElementById('closedid47').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis47(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist47").load(location.href + " .svwishlist47");
                        document.getElementById('wishlistid47').style.display = 'block';
                        document.getElementById('closedid47').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/shared-room-in-new-york-1.html" aria-label="Shared room in New York">
                            <figure class="">
                                <img src="{{ asset('images/property/4/1625484861_img4.jpg') }}"
                                    class="room-image-container200" alt="Shared room in New York" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist4">
                            <i class="icon icon-heart-alt b-login" id="wishlistid4"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/shared-room-in-new-york-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Shared room in New York
                                    </p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">4 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">3 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> New York</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        5
                                        (2)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 35 / night </span>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis4(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist4").load(location.href + " .svwishlist4");
                        document.getElementById('wishlistid4').style.display = 'none';
                        document.getElementById('closedid4').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis4(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist4").load(location.href + " .svwishlist4");
                        document.getElementById('wishlistid4').style.display = 'block';
                        document.getElementById('closedid4').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/home-in-singapore.html" aria-label="Home in  Singapore">
                            <figure class="">
                                <img src="{{ asset('images/property/63/1629989324_new14.jpg') }}"
                                    class="room-image-container200" alt="Home in  Singapore" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist63">
                            <i class="icon icon-heart-alt b-login" id="wishlistid63"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/home-in-singapore.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Home in Singapore</p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">0.5 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Singapore
                                    </p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 25 / night </span>
                            <i class="icon icon-instant-book yellow_color text-25" aria-hidden="true"></i>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis63(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist63").load(location.href + " .svwishlist63");
                        document.getElementById('wishlistid63').style.display = 'none';
                        document.getElementById('closedid63').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis63(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist63").load(location.href + " .svwishlist63");
                        document.getElementById('wishlistid63').style.display = 'block';
                        document.getElementById('closedid63').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/tent-house-in-new-york.html" aria-label="Tent House in New York">
                            <figure class="">
                                <img src="{{ asset('images/property/46/1629724316_ny7.jpg') }}"
                                    class="room-image-container200" alt="Tent House in New York" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist46">
                            <i class="icon icon-heart-alt b-login" id="wishlistid46"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/tent-house-in-new-york.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Tent House in New York
                                    </p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> New York</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        5
                                        (1)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 24 / night </span>
                            <i class="icon icon-instant-book yellow_color text-25" aria-hidden="true"></i>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis46(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist46").load(location.href + " .svwishlist46");
                        document.getElementById('wishlistid46').style.display = 'none';
                        document.getElementById('closedid46').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis46(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist46").load(location.href + " .svwishlist46");
                        document.getElementById('wishlistid46').style.display = 'block';
                        document.getElementById('closedid46').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/private-house-in-paris.html" aria-label="Private House in Paris">
                            <figure class="">
                                <img src="{{ asset('images/property/52/1629903118_4.jpg') }}"
                                    class="room-image-container200" alt="Private House in Paris" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist52">
                            <i class="icon icon-heart-alt b-login" id="wishlistid52"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/private-house-in-paris.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Private House in Paris
                                    </p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">5 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">3 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">3 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Paris</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 35 / night </span>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis52(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist52").load(location.href + " .svwishlist52");
                        document.getElementById('wishlistid52').style.display = 'none';
                        document.getElementById('closedid52').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis52(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist52").load(location.href + " .svwishlist52");
                        document.getElementById('wishlistid52').style.display = 'block';
                        document.getElementById('closedid52').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/hut-in-new-york-1.html" aria-label="Hut in New York">
                            <figure class="">
                                <img src="{{ asset('images/property/48/1629725388_ny9.jpg') }}"
                                    class="room-image-container200" alt="Hut in New York" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="wishicon svwishlist48">
                            <i class="icon icon-heart-alt b-login" id="wishlistid48"></i>
                        </div>


                    </div>


                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/hut-in-new-york-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Hut in New York</p>
                                </a>
                            </div>

                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> New York</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred text-14">
                            <span class="font-weight-700">&#36; 20 / night </span>
                            <i class="icon icon-instant-book yellow_color text-25" aria-hidden="true"></i>
                        </div>




                    </div>
                </div>
            </div>
            <script>
            function addthis48(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist48").load(location.href + " .svwishlist48");
                        document.getElementById('wishlistid48').style.display = 'none';
                        document.getElementById('closedid48').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis48(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist48").load(location.href + " .svwishlist48");
                        document.getElementById('wishlistid48').style.display = 'block';
                        document.getElementById('closedid48').style.display = 'none';
                    }
                });
            }
            </script>

        </div>
    </div>
</section>


<section class="recommandedbg bg-gray mt-4 magic-ball magic-ball-about pb-5">
    <div class="container-fluid container-fluid-90">
        <div class="row">

            <div class="recommandedhead col-md-12">
                <p class="item animated fadeIn text-30 font-weight-700 m-0">Recent Home</p>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/entire-homeapt-in-mangaluru-1.html"
                            aria-label="Entire home/apt in Mangaluru">
                            <figure class="">
                                <img src="{{ asset('images/property/95/1641553446_grant-durr-ybVhYLhh1wA-unsplash_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Mangaluru" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover"
                                    href="properties/entire-homeapt-in-mangaluru-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Entire home/apt in
                                        Mangaluru </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist95">
                            <i class="icon icon-heart-alt b-login" id="wishlistid95"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Mangaluru
                                    </p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 50 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis95(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist95").load(location.href + " .svwishlist95");
                        document.getElementById('wishlistid95').style.display = 'none';
                        document.getElementById('closedid95').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis95(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist95").load(location.href + " .svwishlist95");
                        document.getElementById('wishlistid95').style.display = 'block';
                        document.getElementById('closedid95').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/entire-homeapt-in-chennai-3.html" aria-label="Entire home/apt in Chennai">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover"
                                    href="properties/entire-homeapt-in-chennai-3.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Entire home/apt in
                                        Chennai </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist94">
                            <i class="icon icon-heart-alt b-login" id="wishlistid94"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Chennai</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 100 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis94(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist94").load(location.href + " .svwishlist94");
                        document.getElementById('wishlistid94').style.display = 'none';
                        document.getElementById('closedid94').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis94(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist94").load(location.href + " .svwishlist94");
                        document.getElementById('wishlistid94').style.display = 'block';
                        document.getElementById('closedid94').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/entire-homeapt-in-mysuru-1.html" aria-label="Entire home/apt in Mysuru">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover"
                                    href="properties/entire-homeapt-in-mysuru-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Entire home/apt in
                                        Mysuru </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist91">
                            <i class="icon icon-heart-alt b-login" id="wishlistid91"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1.5 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Mysuru</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 50 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis91(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist91").load(location.href + " .svwishlist91");
                        document.getElementById('wishlistid91').style.display = 'none';
                        document.getElementById('closedid91').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis91(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist91").load(location.href + " .svwishlist91");
                        document.getElementById('wishlistid91').style.display = 'block';
                        document.getElementById('closedid91').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/appartment-in-chennai-1.html" aria-label="Appartment in Chennai">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/appartment-in-chennai-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Appartment in Chennai
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist86">
                            <i class="icon icon-heart-alt b-login" id="wishlistid86"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Avadi</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 100 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis86(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist86").load(location.href + " .svwishlist86");
                        document.getElementById('wishlistid86').style.display = 'none';
                        document.getElementById('closedid86').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis86(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist86").load(location.href + " .svwishlist86");
                        document.getElementById('wishlistid86').style.display = 'block';
                        document.getElementById('closedid86').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/private-room-in-bengaluru.html" aria-label="Private room in Bengaluru">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/private-room-in-bengaluru.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Private room in
                                        Bengaluru </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist73">
                            <i class="icon icon-heart-alt b-login" id="wishlistid73"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">4 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Bengaluru
                                    </p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 200 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis73(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist73").load(location.href + " .svwishlist73");
                        document.getElementById('wishlistid73').style.display = 'none';
                        document.getElementById('closedid73').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis73(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist73").load(location.href + " .svwishlist73");
                        document.getElementById('wishlistid73').style.display = 'block';
                        document.getElementById('closedid73').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/single-room-in-chennai-1.html" aria-label="single room in Chennai">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/single-room-in-chennai-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> single room in Chennai
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist70">
                            <i class="icon icon-heart-alt b-login" id="wishlistid70"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">0.5 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Chennai</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 5 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis70(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist70").load(location.href + " .svwishlist70");
                        document.getElementById('wishlistid70').style.display = 'none';
                        document.getElementById('closedid70').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis70(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist70").load(location.href + " .svwishlist70");
                        document.getElementById('wishlistid70').style.display = 'block';
                        document.getElementById('closedid70').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/home-in-singapore.html" aria-label="Home in  Singapore">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/home-in-singapore.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Home in Singapore </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist63">
                            <i class="icon icon-heart-alt b-login" id="wishlistid63"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">0.5 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Singapore
                                    </p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 25 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis63(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist63").load(location.href + " .svwishlist63");
                        document.getElementById('wishlistid63').style.display = 'none';
                        document.getElementById('closedid63').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis63(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist63").load(location.href + " .svwishlist63");
                        document.getElementById('wishlistid63').style.display = 'block';
                        document.getElementById('closedid63').style.display = 'none';
                    }
                });
            }
            </script>
            <div class="col-md-6 col-lg-4 col-xl-3 pl-3 pr-3 pb-3 mt-4">
                <div class="card h-100 card-shadow card-1">
                    <div class="">
                        <a href="properties/single-room-in-budapest-1.html" aria-label="Single room in  Budapest">
                            <figure class="">
                                <img src="{{ asset('images/property/94/1641448503_relax-area-resort_11zon.jpg') }}"
                                    class="room-image-container200" alt="Entire home/apt in Chennai" />
                                <figcaption>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="card-body p-0 pl-1 pr-1">
                        <div class="d-flex">
                            <div class="text">
                                <a class="text-color text-color-hover" href="properties/single-room-in-budapest-1.html">
                                    <p class="text-14 font-weight-700 text margin-bottom-zero"> Single room in Budapest
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="wishicon svwishlist60">
                            <i class="icon icon-heart-alt b-login" id="wishlistid60"></i>
                        </div>

                        <div>
                            <ul class="list-inline">
                                <li class="list-inline-item text-dark">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Guests</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">2 Bedrooms</span>
                                    </div>
                                </li>

                                <li class="list-inline-item">
                                    <div class="vtooltip">
                                        <span class="text-13 text-muted">1 Bathrooms</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="review-0">
                            <div class="d-flex justify-content-between">

                                <div>
                                    <p class="text-13 mt-2 mb-0 text"><i class="fas fa-map-marker-alt"></i> Budapest</p>
                                </div>

                                <div>
                                    <span><i class="fa fa-star text-14 yellow_color"></i>
                                        0
                                        (0)</span>
                                </div>

                            </div>
                        </div>

                        <div class="svred">
                            <span class="font-weight-700">&#36; 35 / night </span>
                        </div>

                    </div>
                </div>
            </div>
            <script>
            function addthis60(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlist',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist60").load(location.href + " .svwishlist60");
                        document.getElementById('wishlistid60').style.display = 'none';
                        document.getElementById('closedid60').style.display = 'block';
                    }
                });
            }
            </script>

            <script>
            function removethis60(id) {
                $.ajax({
                    type: 'post',
                    url: 'https://demowpthemes.com/buy2rental/wishlistremove',
                    data: {
                        wishid: id,
                        '_token': 'EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr'
                    },
                    success: function(data) {
                        $(".svwishlist60").load(location.href + " .svwishlist60");
                        document.getElementById('wishlistid60').style.display = 'block';
                        document.getElementById('closedid60').style.display = 'none';
                    }
                });
            }
            </script>

        </div>
    </div>
</section>

<section class="bg-gray mt-5">
    <div class="container-fluid container-fluid-90">
        <div class="row">
            <div class="col-md-12">
                <p class="item animated fadeIn text-30 font-weight-700 m-0 text-capitalize">Popular Cities</p>
                <!--<p class="mt-3">Best places where to live in the world and enjoy your trip </p>-->
            </div>
        </div>

        <div class="row mt-2 svcity">
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="search919b.html?location=New%20York&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_1.jpg') }}" alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">New York</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="searchb019.html?location=Sydney&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_2.jpg') }}" alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">Sydney</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="searchc54e.html?location=Paris&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_3.jpg') }}" alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">Paris</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="search5459.html?location=Barcelona&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_4.jpg') }}" alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">Barcelona</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="searchb5dc.html?location=Berlin&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_5.jpg') }}" alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">Berlin</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="searchf63b.html?location=Budapest&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_6.jpg') }}" alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">Budapest</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="search80c3.html?location=Singapore&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_1627625434.jpg') }}"
                                alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">Singapore</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mt-4 col-6 sv-city-pd">
                <a href="searcha01a.html?location=New%20Delhi&amp;checkin=&amp;checkout=&amp;guest=1">
                    <div class="grid item animated zoomIn">
                        <figure class="effect-ming">
                            <img src="{{ asset('front/images/starting_cities/starting_city_1627625602.jpg') }}"
                                alt="city" />
                            <figcaption>
                                <p class="text-15 font-weight-600">New Delhi</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="pb-70 mt-5">
    <div class="container-fluid container-fluid-90">
        <div class="row tryhosting" style="background:url(public/front/images/logos/1635917422_try_hosting_img.jpg);">
            <div class="col-md-12">
                <h2 class="font-weight-600 mb-2">Try Hosting</h2>
                <p class="text-20">Earn money sharing <br> your extra space with travelers</p>
                <a href="become-host.html"><button class="p-3 rounded-4 border-0 font-weight-500 mt-5">Get
                        Started</button></a>
            </div>
        </div>
    </div>
</section>
@endsection