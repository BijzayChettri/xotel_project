@extends('layouts.appUser')

@section('content')
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
        <div class="row tryhosting" style="background:{{ asset('front/images/logos/1635917422_try_hosting_img.jpg') };">
            <div class="col-md-12">
                <h2 class="font-weight-600 mb-2">Try Hosting</h2>
                <p class="text-20">Earn money sharing <br> your extra space with travelers</p>
                <a href="become-host.html"><button class="p-3 rounded-4 border-0 font-weight-500 mt-5">Get
                        Started</button></a>
            </div>
        </div>
    </div>
</section>
<footer class="main-panel card border footer-bg p-5" id="footer">
    <div class="container-fluid container-fluid-90 pb-5">
        <div class="row">
            <div class="col-6 col-sm-3 mt-4">
                <h2 class="font-weight-600 text-uppercase text-13">Popular Cities</h2>
                <div class="row">
                    <div class="col p-0">
                        <ul class="mt-1">
                            <li class="pt-3 text-14">
                                <a
                                    href="search262c.html?location=New%20York&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">New
                                    York</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="searcha869.html?location=Sydney&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Sydney</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="searchffd5.html?location=Paris&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Paris</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search8e1e.html?location=Barcelona&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Barcelona</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search404d.html?location=Berlin&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Berlin</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search073b.html?location=Budapest&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Budapest</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="searchb502.html?location=Singapore&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Singapore</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search3f54.html?location=New%20Delhi&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">New
                                    Delhi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-6 col-sm-3 mt-4">
                <h2 class="font-weight-600 text-uppercase text-13">Hosting</h2>
                <div class="row">
                    <div class="col p-0">
                        <ul class="mt-1">
                            <li class="pt-3 text-14">
                                <a href="help.html"> Help </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="about.html"> About </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="contact-us.html"> Contact Us </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="terms-of-service.html"> Terms of Service </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="become-host.html"> Become Host </a>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-3 mt-4">
                <h2 class="font-weight-600 text-uppercase text-13">Company</h2>
                <div class="row">
                    <div class="col p-0">
                        <ul class="mt-1">
                            <li class="pt-3 text-14">
                                <a href="policies.html"> Policies </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="privacy.html"> Privacy </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="guest-refund.html"> Guest Refund </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="cancellation-policies.html"> Cancellation Policies </a>
                            </li>


                        </ul>



                    </div>
                </div>
            </div>


            <div class="col-6 col-sm-3 mt-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="https://demowpthemes.com/buy2rental"><img
						src="{{ asset('front/images/logos/1628150190_logo.png') }}"class="img-130x32" alt="logo"></a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="border-top p-0 mt-4 foot-content">
        <div class="container-fluid container-fluid-90 justify-content-between p-2 foot-padding">
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-0 mt-4 text-14">
                    © 2022 Buy2Rental. All Rights Reserved
                </div>


                <div class="col-lg-6 col-sm-6 mb-0 mt-4 text-14 text-right">
                    <div class="text-underline mb-0">
                        <a href="#" aria-label="modalLanguge" data-toggle="modal" data-target="#languageModalCenter"> <i
                                class="fa fa-globe"></i> <u>English </u></a>
                        <a href="#" aria-label="modalCurrency" data-toggle="modal" data-target="#currencyModalCenter">
                            <span class="ml-4">&#36; - <u>USD</u> </span></a>
                        <ul class="list-inline text-center sv_social">
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="facebook"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="google_plus"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="pinterest"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="youtube"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>

    </div>
</footer>
<footer class="main-panel card border footer-bg p-5" id="footer">
    <div class="container-fluid container-fluid-90 pb-5">
        <div class="row">
            <div class="col-6 col-sm-3 mt-4">
                <h2 class="font-weight-600 text-uppercase text-13">Popular Cities</h2>
                <div class="row">
                    <div class="col p-0">
                        <ul class="mt-1">
                            <li class="pt-3 text-14">
                                <a
                                    href="search262c.html?location=New%20York&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">New
                                    York</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="searcha869.html?location=Sydney&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Sydney</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="searchffd5.html?location=Paris&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Paris</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search8e1e.html?location=Barcelona&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Barcelona</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search404d.html?location=Berlin&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Berlin</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search073b.html?location=Budapest&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Budapest</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="searchb502.html?location=Singapore&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">Singapore</a>
                            </li>
                            <li class="pt-3 text-14">
                                <a
                                    href="search3f54.html?location=New%20Delhi&amp;checkin=09-03-2022&amp;checkout=09-03-2022&amp;guest=1">New
                                    Delhi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-6 col-sm-3 mt-4">
                <h2 class="font-weight-600 text-uppercase text-13">Hosting</h2>
                <div class="row">
                    <div class="col p-0">
                        <ul class="mt-1">
                            <li class="pt-3 text-14">
                                <a href="help.html"> Help </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="about.html"> About </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="contact-us.html"> Contact Us </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="terms-of-service.html"> Terms of Service </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="become-host.html"> Become Host </a>
                            </li>


                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-3 mt-4">
                <h2 class="font-weight-600 text-uppercase text-13">Company</h2>
                <div class="row">
                    <div class="col p-0">
                        <ul class="mt-1">
                            <li class="pt-3 text-14">
                                <a href="policies.html"> Policies </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="privacy.html"> Privacy </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="guest-refund.html"> Guest Refund </a>
                            </li>

                            <li class="pt-3 text-14">
                                <a href="cancellation-policies.html"> Cancellation Policies </a>
                            </li>


                        </ul>



                    </div>
                </div>
            </div>


            <div class="col-6 col-sm-3 mt-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="https://demowpthemes.com/buy2rental"><img
						src="{{ asset('front/images/logos/1628150190_logo.png') }}" class="img-130x32" alt="logo"></a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="border-top p-0 mt-4 foot-content">
        <div class="container-fluid container-fluid-90 justify-content-between p-2 foot-padding">
            <div class="row">
                <div class="col-lg-6 col-sm-6 mb-0 mt-4 text-14">
                    © 2022 Buy2Rental. All Rights Reserved
                </div>


                <div class="col-lg-6 col-sm-6 mb-0 mt-4 text-14 text-right">
                    <div class="text-underline mb-0">
                        <a href="#" aria-label="modalLanguge" data-toggle="modal" data-target="#languageModalCenter"> <i
                                class="fa fa-globe"></i> <u>English </u></a>
                        <a href="#" aria-label="modalCurrency" data-toggle="modal" data-target="#currencyModalCenter">
                            <span class="ml-4">&#36; - <u>USD</u> </span></a>
                        <ul class="list-inline text-center sv_social">
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="facebook"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="google_plus"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="linkedin"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="pinterest"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="youtube"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon  text-color text-18" target="_blank" href="#"
                                    aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            </li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>

    </div>
</footer>

<div class="row">

    <div class="modal fade mt-5 z-index-high" id="languageModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="languageModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header lang-modal-header">
                    <div class="w-100 pt-3">
                        <!-- <h5 class="modal-title text-20 text-center font-weight-700" id="languageModalLongTitle">Choose Your Language</h5>-->
                    </div>

                    <div>
                        <button type="button" class="close text-28 mr-2 filter-cancel" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

                <div class="modal-body pb-5 language-modal">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Language</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Currency</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 currency-active">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="en">English</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="ar">عربى</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer" data-lang="ch">中文
                                                    (繁體)</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="fr">Français</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="pt">Português</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="ru">Русский</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="es">Español</a>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6 mt-5 p-3">
                                            <div class="language-list p-3 text-16 ">
                                                <a href="javascript:void(0)" class="language_footer"
                                                    data-lang="tr">Türkçe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 border rounded-5 currency-active">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="USD">
                                                    <p class="m-0 mt-2  text-16">US Dollar</p>
                                                    <p class="m-0 text-muted text-16">USD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="GBP">
                                                    <p class="m-0 mt-2  text-16">Pound Sterling</p>
                                                    <p class="m-0 text-muted text-16">GBP - &pound; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="EUR">
                                                    <p class="m-0 mt-2  text-16">Europe</p>
                                                    <p class="m-0 text-muted text-16">EUR - &euro; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="AUD">
                                                    <p class="m-0 mt-2  text-16">Australian Dollar</p>
                                                    <p class="m-0 text-muted text-16">AUD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="SGD">
                                                    <p class="m-0 mt-2  text-16">Singapore</p>
                                                    <p class="m-0 text-muted text-16">SGD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="SEK">
                                                    <p class="m-0 mt-2  text-16">Swedish Krona</p>
                                                    <p class="m-0 text-muted text-16">SEK - kr </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="DKK">
                                                    <p class="m-0 mt-2  text-16">Danish Krone</p>
                                                    <p class="m-0 text-muted text-16">DKK - kr </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="MXN">
                                                    <p class="m-0 mt-2  text-16">Mexican Peso</p>
                                                    <p class="m-0 text-muted text-16">MXN - $ </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="BRL">
                                                    <p class="m-0 mt-2  text-16">Brazilian Real</p>
                                                    <p class="m-0 text-muted text-16">BRL - R$ </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="MYR">
                                                    <p class="m-0 mt-2  text-16">Malaysian Ringgit</p>
                                                    <p class="m-0 text-muted text-16">MYR - RM </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="PHP">
                                                    <p class="m-0 mt-2  text-16">Philippine Peso</p>
                                                    <p class="m-0 text-muted text-16">PHP - P </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="CHF">
                                                    <p class="m-0 mt-2  text-16">Swiss Franc</p>
                                                    <p class="m-0 text-muted text-16">CHF - &euro; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="INR">
                                                    <p class="m-0 mt-2  text-16">India</p>
                                                    <p class="m-0 text-muted text-16">INR - &#x20B9; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="ARS">
                                                    <p class="m-0 mt-2  text-16">Argentine Peso</p>
                                                    <p class="m-0 text-muted text-16">ARS - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="CAD">
                                                    <p class="m-0 mt-2  text-16">Canadian Dollar</p>
                                                    <p class="m-0 text-muted text-16">CAD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="CNY">
                                                    <p class="m-0 mt-2  text-16">Chinese Yuan</p>
                                                    <p class="m-0 text-muted text-16">CNY - &#165; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="CZK">
                                                    <p class="m-0 mt-2  text-16">Czech Republic Koruna</p>
                                                    <p class="m-0 text-muted text-16">CZK - K&#269; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="HKD">
                                                    <p class="m-0 mt-2  text-16">Hong Kong Dollar</p>
                                                    <p class="m-0 text-muted text-16">HKD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="HUF">
                                                    <p class="m-0 mt-2  text-16">Hungarian Forint</p>
                                                    <p class="m-0 text-muted text-16">HUF - Ft </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="IDR">
                                                    <p class="m-0 mt-2  text-16">Indonesian Rupiah</p>
                                                    <p class="m-0 text-muted text-16">IDR - Rp </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="ILS">
                                                    <p class="m-0 mt-2  text-16">Israeli New Sheqel</p>
                                                    <p class="m-0 text-muted text-16">ILS - &#8362; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="JPY">
                                                    <p class="m-0 mt-2  text-16">Japanese Yen</p>
                                                    <p class="m-0 text-muted text-16">JPY - &#165; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="KRW">
                                                    <p class="m-0 mt-2  text-16">South Korean Won</p>
                                                    <p class="m-0 text-muted text-16">KRW - &#8361; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="NOK">
                                                    <p class="m-0 mt-2  text-16">Norwegian Krone</p>
                                                    <p class="m-0 text-muted text-16">NOK - kr </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="NZD">
                                                    <p class="m-0 mt-2  text-16">New Zealand Dollar</p>
                                                    <p class="m-0 text-muted text-16">NZD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="PLN">
                                                    <p class="m-0 mt-2  text-16">Polish Zloty</p>
                                                    <p class="m-0 text-muted text-16">PLN - z&#322; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="RUB">
                                                    <p class="m-0 mt-2  text-16">Russian Ruble</p>
                                                    <p class="m-0 text-muted text-16">RUB - p </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="THB">
                                                    <p class="m-0 mt-2  text-16">Thai Baht</p>
                                                    <p class="m-0 text-muted text-16">THB - &#3647; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="TRY">
                                                    <p class="m-0 mt-2  text-16">Turkish Lira</p>
                                                    <p class="m-0 text-muted text-16">TRY - &#8378; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="TWD">
                                                    <p class="m-0 mt-2  text-16">New Taiwan Dollar</p>
                                                    <p class="m-0 text-muted text-16">TWD - &#36; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="VND">
                                                    <p class="m-0 mt-2  text-16">Vietnamese Dong</p>
                                                    <p class="m-0 text-muted text-16">VND - &#8363; </p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-3 mt-5 p-3">
                                            <div class="currency pl-3 pr-3 text-16 ">
                                                <a href="javascript:void(0)" class="currency_footer " data-curr="ZAR">
                                                    <p class="m-0 mt-2  text-16">South African Rand</p>
                                                    <p class="m-0 text-muted text-16">ZAR - R </p>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade mt-5 z-index-high" id="currencyModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="languageModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100 pt-3">
                        <h5 class="modal-title text-20 text-center font-weight-700" id="languageModalLongTitle">Choose a
                            Currency</h5>
                    </div>

                    <div>
                        <button type="button" class="close text-28 mr-2 filter-cancel font-weight-500"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

                <div class="modal-body pb-5">
                    <div class="row">
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 border border-success rounded-5 currency-active">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="USD">
                                    <p class="m-0 mt-2  text-16">US Dollar</p>
                                    <p class="m-0 text-muted text-16">USD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="GBP">
                                    <p class="m-0 mt-2  text-16">Pound Sterling</p>
                                    <p class="m-0 text-muted text-16">GBP - &pound; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="EUR">
                                    <p class="m-0 mt-2  text-16">Europe</p>
                                    <p class="m-0 text-muted text-16">EUR - &euro; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="AUD">
                                    <p class="m-0 mt-2  text-16">Australian Dollar</p>
                                    <p class="m-0 text-muted text-16">AUD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="SGD">
                                    <p class="m-0 mt-2  text-16">Singapore</p>
                                    <p class="m-0 text-muted text-16">SGD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="SEK">
                                    <p class="m-0 mt-2  text-16">Swedish Krona</p>
                                    <p class="m-0 text-muted text-16">SEK - kr </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="DKK">
                                    <p class="m-0 mt-2  text-16">Danish Krone</p>
                                    <p class="m-0 text-muted text-16">DKK - kr </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="MXN">
                                    <p class="m-0 mt-2  text-16">Mexican Peso</p>
                                    <p class="m-0 text-muted text-16">MXN - $ </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="BRL">
                                    <p class="m-0 mt-2  text-16">Brazilian Real</p>
                                    <p class="m-0 text-muted text-16">BRL - R$ </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="MYR">
                                    <p class="m-0 mt-2  text-16">Malaysian Ringgit</p>
                                    <p class="m-0 text-muted text-16">MYR - RM </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="PHP">
                                    <p class="m-0 mt-2  text-16">Philippine Peso</p>
                                    <p class="m-0 text-muted text-16">PHP - P </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="CHF">
                                    <p class="m-0 mt-2  text-16">Swiss Franc</p>
                                    <p class="m-0 text-muted text-16">CHF - &euro; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="INR">
                                    <p class="m-0 mt-2  text-16">India</p>
                                    <p class="m-0 text-muted text-16">INR - &#x20B9; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="ARS">
                                    <p class="m-0 mt-2  text-16">Argentine Peso</p>
                                    <p class="m-0 text-muted text-16">ARS - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="CAD">
                                    <p class="m-0 mt-2  text-16">Canadian Dollar</p>
                                    <p class="m-0 text-muted text-16">CAD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="CNY">
                                    <p class="m-0 mt-2  text-16">Chinese Yuan</p>
                                    <p class="m-0 text-muted text-16">CNY - &#165; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="CZK">
                                    <p class="m-0 mt-2  text-16">Czech Republic Koruna</p>
                                    <p class="m-0 text-muted text-16">CZK - K&#269; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="HKD">
                                    <p class="m-0 mt-2  text-16">Hong Kong Dollar</p>
                                    <p class="m-0 text-muted text-16">HKD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="HUF">
                                    <p class="m-0 mt-2  text-16">Hungarian Forint</p>
                                    <p class="m-0 text-muted text-16">HUF - Ft </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="IDR">
                                    <p class="m-0 mt-2  text-16">Indonesian Rupiah</p>
                                    <p class="m-0 text-muted text-16">IDR - Rp </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="ILS">
                                    <p class="m-0 mt-2  text-16">Israeli New Sheqel</p>
                                    <p class="m-0 text-muted text-16">ILS - &#8362; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="JPY">
                                    <p class="m-0 mt-2  text-16">Japanese Yen</p>
                                    <p class="m-0 text-muted text-16">JPY - &#165; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="KRW">
                                    <p class="m-0 mt-2  text-16">South Korean Won</p>
                                    <p class="m-0 text-muted text-16">KRW - &#8361; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="NOK">
                                    <p class="m-0 mt-2  text-16">Norwegian Krone</p>
                                    <p class="m-0 text-muted text-16">NOK - kr </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="NZD">
                                    <p class="m-0 mt-2  text-16">New Zealand Dollar</p>
                                    <p class="m-0 text-muted text-16">NZD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="PLN">
                                    <p class="m-0 mt-2  text-16">Polish Zloty</p>
                                    <p class="m-0 text-muted text-16">PLN - z&#322; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="RUB">
                                    <p class="m-0 mt-2  text-16">Russian Ruble</p>
                                    <p class="m-0 text-muted text-16">RUB - p </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="THB">
                                    <p class="m-0 mt-2  text-16">Thai Baht</p>
                                    <p class="m-0 text-muted text-16">THB - &#3647; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="TRY">
                                    <p class="m-0 mt-2  text-16">Turkish Lira</p>
                                    <p class="m-0 text-muted text-16">TRY - &#8378; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="TWD">
                                    <p class="m-0 mt-2  text-16">New Taiwan Dollar</p>
                                    <p class="m-0 text-muted text-16">TWD - &#36; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="VND">
                                    <p class="m-0 mt-2  text-16">Vietnamese Dong</p>
                                    <p class="m-0 text-muted text-16">VND - &#8363; </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 p-3">
                            <div class="currency pl-3 pr-3 text-16 ">
                                <a href="javascript:void(0)" class="currency_footer " data-curr="ZAR">
                                    <p class="m-0 mt-2  text-16">South African Rand</p>
                                    <p class="m-0 text-muted text-16">ZAR - R </p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<section class="footer-fixed-nav d-block d-sm-none">
    <ul>
        <li><a class="active-link" href="https://demowpthemes.com/buy2rental"><i class="fab fa-wpexplorer"
                    aria-hidden="true"></i>
                <div class="icon-txt">Explore</div>
            </a></li>
        <li><a class="" href="login.html"><i class="far fa-heart" aria-hidden="true"></i>
                <div class="icon-txt">Saved</div>
            </a></li>
        <li><a class="" href="login.html"><i class="far fa-paper-plane" aria-hidden="true"></i>
                <div class="icon-txt">Trips</div>
            </a></li>
        <li><a class="" href="login.html"><i class="far fa-comment-alt" aria-hidden="true"></i>
                <div class="icon-txt">Inbox</div>
            </a></li>
        <li><a class="" href="login.html"><i class="far fa-user" aria-hidden="true"></i>
                <div class="icon-txt">Profile</div>
            </a></li>
    </ul>
</section>


<!-- New Js start-->
<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>



<!-- New Js End -->
<!-- Needed Js from Old Version Start-->
<script type="text/javascript">
var APP_URL = "https://demowpthemes.com/buy2rental";
var USER_ID = "";
var sessionDate = 'dd-mm-yyyy';

$(".currency_footer").on('click', function() {
    var currency = $(this).data('curr');
    $.ajax({
        type: "POST",
        url: APP_URL + "/set_session",
        data: {
            "_token": "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
            'currency': currency
        },
        success: function(msg) {
            location.reload()
        },
    });
});

$(".language_footer").on('click', function() {
    var language = $(this).data('lang');
    $.ajax({
        type: "POST",
        url: APP_URL + "/set_session",
        data: {
            "_token": "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
            'language': language
        },
        success: function(msg) {
            location.reload()
        },
    });
});
</script>

<!-- <link rel="stylesheet" type="text/css" href="{{ asset('js/intl-tel-input-13.0.0/css/intlTelInput.min.css') }}" />
<script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/intl-tel-input-13.0.0/js/intlTelInput.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isValidPhoneNumber.js') }}"></script> -->

<!-- <link rel="stylesheet" type="text/css" href="public/js/intl-tel-input-13.0.0/build/css/intlTelInput.min.css"> -->
<!-- 
    <script type="text/javascript" src="public/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="public/js/intl-tel-input-13.0.0/build/js/intlTelInput.js"></script>
    <script type="text/javascript" src="public/js/isValidPhoneNumber.js" type="text/javascript"></script> -->
<script type="text/javascript">
/* $('select').on('change', function() {
			var dobError = ''; 
			var day = document.getElementById("user_birthday_day").value;
			var month = document.getElementById("user_birthday_month").value;
			var y = document.getElementById("user_birthday_year").value;
			var year = parseInt(y);
			var year2 = signup_form.birthday_year;
			var age = 18;

			var setDate = new Date(year + age, month - 1, day);
			var currdate = new Date();
			if (day == '' || month == '' || y == '') {
				$('#dobError').html('<label class="text-danger">'+"This field is required."+'</label>');
				year2.focus();
				return false;
			}
			else if (setDate > currdate) {
				$('#dobError').html('<label class="text-danger">'+"Age must be greater than 18."+'</label>');
					year2.focus();
					return false;
				}
				else
				{
					$('#dobError').html('<span class="text-danger"></span>');
					return true;
				}
			}); */

function ageValidate() {
    var dobError = '';
    var day = document.getElementById("user_birthday_month").value;
    var month = document.getElementById("user_birthday_day").value;
    var y = document.getElementById("user_birthday_year").value;
    var year = parseInt(y);
    var year2 = signup_form.birthday_year;
    var age = 18;

    var setDate = new Date(year + age, month - 1, day);
    var currdate = new Date();
    if (day == '' || month == '' || y == '') {
        $('#dobError').html('<label class="text-danger">' + "This field is required." + '</label>');
        year2.focus();
        return false;
    } else if (setDate > currdate) {
        $('#dobError').html('<label class="text-danger">' + "Age must be greater than 18." + '</label>');
        year2.focus();
        return false;
    } else {
        $('#dobError').html('<span class="text-danger"></span>');
        return true;
    }
}

$('#signup_form').validate({
    rules: {
        first_name: {
            required: true,
            maxlength: 255
        },
        last_name: {
            required: true,
            maxlength: 255
        },
        email: {
            required: true,
            maxlength: 255,
            laxEmail: true
        },
        password: {
            required: true,
            minlength: 6
        },
        birthday_month: {
            required: true
        },
        birthday_day: {
            required: true
        },
        birthday_year: {
            required: true,
            minAge: 18
        }
    },
    submitHandler: function(form) {

        $("#btn").on("click", function(e) {
            $("#btn").attr("disabled", true);
            e.preventDefault();
        });


        $(".spinner").removeClass('d-none');
        $("#btn_next-text").text("Sign Up..");
        return true;
    },

    errorPlacement: function(error, element) {
        $('#user_birthday_month-error').addClass('d-none');
        $('#user_birthday_day-error').addClass('d-none');
        error.insertAfter(element);
        $('#user_birthday_year-error').addClass('d-none');

    },

    messages: {
        first_name: {
            required: "This field is required.",
            maxlength: "Please enter no more than 255 characters.",
        },
        last_name: {
            required: "This field is required.",
            maxlength: "Please enter no more than 255 characters.",
        },
        email: {
            required: "This field is required.",
            maxlength: "Please enter no more than 255 characters.",
        },
        password: {
            required: "This field is required.",
            minlength: "Please enter at least 6 characters.",
        },
        birthday_day: {
            required: "This field is required.",
        },
        birthday_month: {
            required: "This field is required.",
        },
        birthday_year: {
            required: "This field is required.",
        }
    }
});

jQuery.validator.addMethod("laxEmail", function(value, element) {
    return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
        value);
}, "Please enter a valid email address.");


$(document).on('blur keyup', '#email', function() {
    var emailError = '';
    var email = $('#email').val();
    var _token = $('input[name="_token"]').val();
    $('.error-tag').html('').hide();
    if (email != '') {
        $.ajax({
            url: "https://demowpthemes.com/buy2rental/checkUser/check",
            method: "POST",
            data: {
                email: email,
                "_token": "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
            },
            success: function(result) {
                if (result == 'not_unique') {
                    $('#emailError').html('<label class="text-danger">' +
                        "Email address is already Existed." + '</label>');
                    $('#email').addClass('has-error');
                    $('#btn').attr('disabled', 'disabled');
                } else {
                    $('#email').removeClass('has-error');
                    $('#emailError').html('');
                    $('#btn').attr('disabled', false);
                }
            }
        })
    } else {
        $('#emailError').html('');
    }

});
</script>

<script type="text/javascript">
var hasPhoneError = false;
var hasEmailError = false;

//jquery validation
$.validator.setDefaults({
    highlight: function(element) {
        $(element).parent('div').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).parent('div').removeClass('has-error');
    },
    errorPlacement: function(error, element) {
        $('.error-tag').html('').hide();
        $('#emailError').html('').hide();
        error.insertAfter(element);
    }
});

/*
intlTelInput
*/
$(document).ready(function() {
    $("#phone").intlTelInput({
        separateDialCode: true,
        nationalMode: true,
        preferredCountries: ["IN"],
        autoPlaceholder: "polite",
        placeholderNumberType: "MOBILE",
        utilsScript: 'https://demowpthemes.com/buy2rental/public/js/intl-tel-input-13.0.0/build/js/utils.js'
    });

    var countryData = $("#phone").intlTelInput("getSelectedCountryData");
    $('#default_country').val(countryData.iso2);
    $('#carrier_code').val(countryData.dialCode);

    $("#phone").on("countrychange", function(e, countryData) {
        formattedPhone();
        // log(countryData);
        $('#default_country').val(countryData.iso2);
        $('#carrier_code').val(countryData.dialCode);
        if ($.trim($(this).val()) !== '') {
            //Invalid Number Validation - Add
            if (!$(this).intlTelInput("isValidNumber") || !isValidPhoneNumber($.trim($(this).val()))) {
                $('#tel-error').addClass('error').html(
                    'Please enter a valid International Phone Number.').css("font-weight", "bold");
                hasPhoneError = true;
                $('#phone-error').hide();
            } else {
                $('#tel-error').html('');

                $.ajax({
                        method: "POST",
                        url: "https://demowpthemes.com/buy2rental/duplicate-phone-number-check",
                        dataType: "json",
                        cache: false,
                        data: {
                            "_token": "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
                            'phone': $.trim($(this).val()),
                            'carrier_code': $.trim(countryData.dialCode),
                        }
                    })
                    .done(function(response) {
                        if (response.status == true) {
                            $('#tel-error').html('');
                            $('#phone-error').show();

                            $('#phone-error').addClass('error').html(response.fail).css(
                                "font-weight", "bold");
                            hasPhoneError = true;
                            enableDisableButton();
                        } else if (response.status == false) {
                            $('#tel-error').show();
                            $('#phone-error').html('');

                            hasPhoneError = false;
                            enableDisableButton();
                        }
                    });
            }
        } else {
            $('#tel-error').html('');
            $('#phone-error').html('');
            hasPhoneError = false;
            enableDisableButton();
        }
    });
});

$(document).ready(function() {
    $("input[name=phone]").on('blur keyup', function(e) {
        formattedPhone();
        $('#btn').attr('disabled', false);
        $('#phone').html('').css("border-color", "none");
        if ($.trim($(this).val()) !== '') {
            if (!$(this).intlTelInput("isValidNumber") || !isValidPhoneNumber($.trim($(this).val()))) {
                $('#tel-error').addClass('error').html(
                    'Please enter a valid International Phone Number.').css("font-weight", "bold");
                hasPhoneError = true;
                $('#btn').attr('disabled', 'disabled');
                $('#phone').css("border-color", "#a94442");
                $('#phone-error').hide();
            } else {

                var phone = $(this).val().replace(/-|\s/g, ""); //replaces 'whitespaces', 'hyphens'
                var phone = $(this).val().replace(/^0+/,
                    ""); //replaces (leading zero - for BD phone number)
                var token = "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr";
                var pluginCarrierCode = $('#phone').intlTelInput('getSelectedCountryData').dialCode;
                $.ajax({
                        url: "https://demowpthemes.com/buy2rental/duplicate-phone-number-check",
                        method: "POST",
                        dataType: "json",
                        data: {
                            'phone': phone,
                            'carrier_code': pluginCarrierCode,
                            '_token': "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
                        }
                    })
                    .done(function(response) {
                        if (response.status == true) {
                            if (phone.length == 0) {
                                $('#phone-error').html('');
                            } else {
                                $('#phone-error').addClass('error').html(response.fail).css(
                                    "font-weight", "bold");
                                hasPhoneError = true;
                                enableDisableButton();
                            }
                        } else if (response.status == false) {
                            $('#phone-error').html('');
                            hasPhoneError = false;
                            enableDisableButton();
                        }
                    });
                $('#tel-error').html('');
                $('#phone-error').show();
                hasPhoneError = false;
                enableDisableButton();
            }
        } else {
            $('#tel-error').html('');
            $('#phone-error').html('');
            hasPhoneError = false;
            enableDisableButton();
        }
    });
});

function formattedPhone() {
    if ($('#phone').val != '') {
        var p = $('#phone').intlTelInput("getNumber").replace(/-|\s/g, "");
        $("#formatted_phone").val(p);
    }
}

function enableDisableButton() {
    if (!hasPhoneError) {
        $('form').find("button[type='submit']").prop('disabled', false);
    } else {
        $('form').find("button[type='submit']").prop('disabled', true);
    }
}

$.validator.addMethod("minAge", function(value, element, min) {
    var today = new Date();
    var birthDate = new Date(value);
    var age = today.getFullYear() - birthDate.getFullYear();

    if (age > min + 1) {
        return true;
    }

    var m = today.getMonth() - birthDate.getMonth();

    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age >= min;
}, "You are not old enough!");
</script>

<!-- Needed Js from Old Version End -->
<script type="text/javascript"
    src='https://maps.google.com/maps/api/js?key=AIzaSyBjxknPFQxYv3j5xWuNgNISwaFIdSPVp_I&amp;libraries=places'></script>
<script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/front.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/daterangecustom.js') }}"></script>


<script type="text/javascript">
$(function() {
    dateRangeBtn(moment(), moment());
});
</script>
<script>
$('body').on('click', '.b-login', function() {
    $("#loginmodel").modal('show');

});
</script>
<script>
function getLocation() {
    geocoder = new google.maps.Geocoder();
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            // Success function
            showPosition,
            // Error function
            null,
            // Options. See MDN for details.
            {
                enableHighAccuracy: true,
                timeout: 5000,
                maximumAge: 0
            });
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    codeLatLng(position.coords.latitude, position.coords.longitude);
}


function codeLatLng(lat, lng) {
    geocoder = new google.maps.Geocoder();

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({
        latLng: latlng
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {

            if (results[1]) {
                var arrAddress = results;
                //console.log(results);
                window.location = 'https://demowpthemes.com/buy2rental/search?location=' + results[1]
                    .formatted_address + '&checkin=&checkout=&guest=1';

            } else {
                alert("No results found");
            }
        } else {
            alert("Geocoder failed due to: " + status);
        }
    });
}
</script>


</body>

<!-- Mirrored from demowpthemes.com/buy2rental/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 15:28:26 GMT -->

</html>

<script type="text/javascript">


</script>

<script type="text/javascript">
jQuery.validator.addMethod("laxEmail", function(value, element) {
    return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
        value);
}, "Please enter a valid email address.");


$(document).ready(function() {
    $('#login_form').validate({
        rules: {
            email: {
                required: true,
                maxlength: 255,
                laxEmail: true
            },

            password: {
                required: true
            }
        },
        submitHandler: function(form) {
            $("#btn").on("click", function(e) {
                $("#btn").attr("disabled", true);
                e.preventDefault();
            });


            $(".spinner").removeClass('d-none');
            $("#btn_next-text").text("Login..");
            return true;
        },
        messages: {
            email: {
                required: "This field is required.",
                maxlength: "Please enter no more than 255 characters.",
            },

            password: {
                required: "This field is required.",
            }
        }
    });
});
</script>

<script>
$("#svsendotp").on('click', function(e) {
    e.preventDefault();
    var pno = $('#pno').val();
    var form = $('#otp_form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);
    //console.log(formData);
    if (pno == '') {
        alert("Phone Number should not be empty.");
        $("#pno").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: 'https://demowpthemes.com/buy2rental/sendotp',
            data: formData,
            async: true,
            dataType: 'text',
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            success: function(results) {
                var data_array = "";
                var data_array = JSON.parse(results);
                console.log(results);
                if (data_array.success === false) {
                    if (data_array.data.otp == "invalid") {
                        alert("Invalid Phone Number");
                    } else if (data_array.data.otp == "enterotp") {
                        alert("Enter OTP");
                    } else if (data_array.data.otp == "otpinvalid") {
                        alert("Invalid OTP");
                    }
                    e.preventDefault();
                }
                if (data_array.success === true) {
                    if (data_array.data.otp == "sent") {
                        $('#svpno').hide();
                        $('.svotp').show();
                        $('#svsendotp').html('Submit');

                    } else if (data_array.data.otp == "login") {
                        var mainurl = "https://demowpthemes.com/buy2rental";
                        window.location.href = mainurl + '/dashboard';
                    }

                }

            }

        });
    }

});



/*
	intlTelInput
	*/


$(document).ready(function() {
    $("#pno").intlTelInput({
        separateDialCode: true,
        nationalMode: true,
        preferredCountries: ["IN"],
        autoPlaceholder: "polite",
        placeholderNumberType: "MOBILE",
        utilsScript: 'https://demowpthemes.com/buy2rental/public/js/intl-tel-input-13.0.0/build/js/utils.js'
    });

    var countryData = $("#pno").intlTelInput("getSelectedCountryData");
    console.log(countryData);
    $('#defaultcountry').val(countryData.iso2);
    $('#carrier_code1').val(countryData.dialCode);

    $("#pno").on("countrychange", function(e, countryData) {
        formattedPhone1();
        // log(countryData);
        $('#defaultcountry').val(countryData.iso2);
        $('#carrier_code1').val(countryData.dialCode);
        if ($.trim($(this).val()) !== '') {
            //Invalid Number Validation - Add
            if (!$(this).intlTelInput("isValidNumber") || !isValidPhoneNumber($.trim($(this).val()))) {
                $('#tel-error').addClass('error').html(
                    'Please enter a valid International Phone Number.').css("font-weight", "bold");
                hasPhoneError = true;
                $('#phone-error').hide();
            } else {
                $('#tel-error').html('');

                $.ajax({
                        method: "POST",
                        url: "https://demowpthemes.com/buy2rental/duplicate-phone-number-check",
                        dataType: "json",
                        cache: false,
                        data: {
                            "_token": "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
                            'phone': $.trim($(this).val()),
                            'carrier_code': $.trim(countryData.dialCode),
                        }
                    })
                    .done(function(response) {
                        if (response.status == true) {
                            $('#tel-error').html('');
                            $('#phone-error').show();

                            $('#phone-error').addClass('error').html(response.fail).css(
                                "font-weight", "bold");
                            hasPhoneError = true;
                            enableDisableButton();
                        } else if (response.status == false) {
                            $('#tel-error').show();
                            $('#phone-error').html('');

                            hasPhoneError = false;
                            enableDisableButton();
                        }
                    });
            }
        } else {
            $('#tel-error').html('');
            $('#phone-error').html('');
            hasPhoneError = false;
            enableDisableButton();
        }
    });

});



$(document).ready(function() {
    $("input[name=pno]").on('blur keyup', function(e) {
        formattedPhone1();
        $('#btn').attr('disabled', false);
        $('#pno').html('').css("border-color", "none");
        if ($.trim($(this).val()) !== '') {
            if (!$(this).intlTelInput("isValidNumber") || !isValidPhoneNumber($.trim($(this).val()))) {
                $('#tel-error').addClass('error').html(
                    'Please enter a valid International Phone Number.').css("font-weight", "bold");
                hasPhoneError = true;
                $('#btn').attr('disabled', 'disabled');
                $('#pno').css("border-color", "#a94442");
                $('#phone-error').hide();
            } else {

                var phone = $(this).val().replace(/-|\s/g, ""); //replaces 'whitespaces', 'hyphens'
                var phone = $(this).val().replace(/^0+/,
                    ""); //replaces (leading zero - for BD phone number)
                var token = "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr";
                var pluginCarrierCode = $('#pno').intlTelInput('getSelectedCountryData').dialCode;
                $.ajax({
                        url: "https://demowpthemes.com/buy2rental/duplicate-phone-number-check",
                        method: "POST",
                        dataType: "json",
                        data: {
                            'phone': phone,
                            'carrier_code': pluginCarrierCode,
                            '_token': "EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr",
                        }
                    })
                    .done(function(response) {
                        if (response.status == true) {
                            if (phone.length == 0) {
                                $('#phone-error').html('');
                            } else {
                                $('#phone-error').addClass('error').html(response.fail).css(
                                    "font-weight", "bold");
                                hasPhoneError = true;
                                enableDisableButton();
                            }
                        } else if (response.status == false) {
                            $('#phone-error').html('');
                            hasPhoneError = false;
                            enableDisableButton();
                        }
                    });
                $('#tel-error').html('');
                $('#phone-error').show();
                hasPhoneError = false;
                enableDisableButton();
            }
        } else {
            $('#tel-error').html('');
            $('#phone-error').html('');
            hasPhoneError = false;
            enableDisableButton();
        }
    });
});

function formattedPhone1() {
    if ($('#pno').val != '') {
        var p = $('#pno').intlTelInput("getNumber").replace(/-|\s/g, "");
        $("#formattedphone").val(p);
    }
}


$(".phonebutt").on('click', function(e) {
    $('#login_form').hide();
    $('.phonebutt').hide();
    $('.emailbutt').show();
    $('#sv_phone_div').show();

});

$(".emailbutt").on('click', function(e) {
    $('#login_form').show();
    $('.phonebutt').show();
    $('.emailbutt').hide();
    $('#sv_phone_div').hide();

});
</script>



<script type="text/javascript">
jQuery.validator.addMethod("laxEmail", function(value, element) {
    // allow any non-whitespace characters as the host part
    return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
        value);
}, "Please enter a valid email address.");

$(document).ready(function() {

    $("#reset_btn").on("click", function(e) {
        $(".email-error").hide();
    });

    $('#forgot_password_form').validate({
        rules: {
            email: {
                required: true,
                maxlength: 255,
                laxEmail: true
            }
        },
        submitHandler: function(form) {
            $("#reset_btn").on("click", function(e) {
                $("#reset_btn").attr("disabled", true);
                e.preventDefault();
            });

            $(".spinner").removeClass('d-none');
            $("#btn_next-text").text("Reset Link has been sent..");
            return true;
        },
        messages: {
            email: {
                required: "This field is required.",
                maxlength: "Please enter no more than 255 characters.",
            }
        }
    });
});
</script>



<script type="text/javascript">
$(document).on('keyup', '#front-search-field1', function() {
    autocomplete = new google.maps.places.Autocomplete(document.getElementById("front-search-field1"));
});

$("#front-search-form1").submit(function(e) {
    e.preventDefault()
    var t = "",
        a = "",
        o = "1",
        i = "";
    var n = $("#front-search-field1").val(),
        c = n.replace(" ", "+");
    window.location.href = APP_URL + "/search?location=" + c + "&checkin=" + t + "&checkout=" + a + "&guest=" +
        o, e.preventDefault()
});

/*
$(document).ready(function() 
{
    $('.mob-search').click(function() {
        $('.svmobsearch').toggle();
    });
}); */
</script>


<style>
#payment-form .ElementsApp input {
    border: 1px solid #eee !important;
}
</style>
@endsection