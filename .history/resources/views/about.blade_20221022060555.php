@extends('layouts.appUser')
@section('content')
<section class="hero-banner magic-ball home">
     <main role="main" id="site-content" class="margin-top-120">
        <div class="container-fluid container-fluid-90 ">
            <h2>About</h2>

            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable
                English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy.
                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                humour and the like).</p>
        </div>
        <br>

        <section class="testimonialbg pb-70">
            <div class="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="recommandedhead section-intro text-center mt-70">
                            <p class="animated fadeIn text-24 text-color font-weight-700 m-0">Say about Us</p>
                            <p class="mt-2">People Say The Nicest Things</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-4 mt-4">
                            <div class="item h-100 card-1">
                                <img src="public/front/images/testimonial/testimonial_1.jpg" alt="John Doe">
                                <div class="name">John Doe</div>
                                <small class="desig">Traveller</small>
                                <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                                <ul>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="item h-100 card-1">
                                <img src="public/front/images/testimonial/testimonial_2.jpg" alt="Adam Smith">
                                <div class="name">Adam Smith</div>
                                <small class="desig">Traveller</small>
                                <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                                <ul>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4">
                            <div class="item h-100 card-1">
                                <img src="public/front/images/testimonial/testimonial_3.jpg" alt="Alysa">
                                <div class="name">Alysa</div>
                                <small class="desig">Photographer</small>
                                <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                                <ul>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star secondary-text-color" aria-hidden="true"></i></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </section>
 @include('layouts.footer')
@endsection

    