@extends('user.appUser')
@section('content')

@foreach($propertyList as $item)

<section class="sv_single_prop " style="display:none">
	<nav class="animated fadeIn ">
		<div class="container">
			<ul class="prop-nav">
				<li><a href="#photos">Photos </a></li>
				<li><a href="#about">Overview</a></li>
				<li><a href="#listMargin">Amenities</a></li>
				<!-- <li><a href="#reviews">Reviews</a></li> -->
				<!-- <li><a href="#location">Location</a></li> -->
			</ul>
			<div class="pull-right ul-price-fixed">
				<ul>
					<li class="text-20">&#8377; {{$item->price}}</li>
					<li id="per_night" class="per-night">/ night</li>
					<li id="per_month" class="per-month display-off">/ month<i id="price-info-tooltip" class="fa fa-question hide" data-behavior="tooltip"></i></li>
					<li id="chk-availability">
						<a type="button" class="btn vbtn-default" data-toggle="modal" data-target="#exampleModal">
							Book now
						</a>

						<!-- <a href="javascript:void(0)" id="check_availability" class="btn vbtn-default">Book now </a></li> -->
				</ul>
			</div>
		</div>
	</nav>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Please fill up the details.</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="{{url('create-booking')}}">
					@csrf
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text"  name="custName" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Phone</label>
						<input type="hidden" name="propertyName" value="{{$item->name}}">
						<input type="hidden" name="propertyAddress" value="{{$item->address}}">
						<input type="hidden" name="propertyPrice" value="{{$item->price}}">
						<input type="number" name="custPhone"  required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">
						<small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" required name="custEmail"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Lets go..</button>
			</div>
			</form>

		</div>
	</div>
</div>
<!--popup slider end-->

<div style="clear:both;margin-top:10rem;"></div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Cheers!</strong> {{ $message }}
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Error!</strong> {{ $message }}
</div>
@endif
<div class="container">
	<div class="property-title">
		<div class="">
			<h3 class="text-24 mt-2"><strong> {{$item->name}} </strong></h3>
			<!--<span class="text-14 pr-3"><i class="fa fa-user secondary-text-color"></i> Albert Stephen</span>-->
			<span class="text-14 gray-text"><i class="fas fa-map-marker-alt secondary-text-color"></i> {{$item->address}}</span>

			<div class="pull-right ">
				<span class="share-option" data-toggle="modal" data-target="#share"><span class="mob-hide">Share</span> <i class="fa fa-share-alt" aria-hidden="true"></i></span>
				<span class="svwishlist">
					<!-- <span class="b-login"><span class="mob-hide">Save</span> <i class="icon icon-heart-alt text-20" id="wishlistid"></i></span> -->
				</span>
				<!--Share modal-->
				<div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="exampleModalLongTitle">Share this place with friends and family</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row" align="center">
									<div class="col-md-4 col-12">
										<iframe src="https://www.facebook.com/plugins/share_button.php?href={{url()->current()}}&amp;layout=button&amp;size=large&amp;mobile_iframe=true&amp;width=73&amp;height=28&amp;appId" width="76" height="28" class="overflow-hidden border-0" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
									</div>
									<div class="col-md-4 col-12">
										<a class="twitter-share-button" href="https://api.whatsapp.com/send?text={{url()->current()}}" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i> Whatsapp</a>
									</div>
									<div class="col-md-4 col-12">
										<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{url()->current()}}&amp;title=Apartment%20in%20Budapest%20in%20Budapest&amp;summary=Apartment" aria-label="linkedin" onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" class="shareButton">
											<i class="fab fa-linkedin-in"></i> Share</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Share modal end-->
			</div>
		</div>
	</div>

	<div style="clear:both;"></div>
	@if(sizeof($item->images)==1)
	<div class="d-none d-sm-block">
		<div id="photos" class="row   ">
			<div class="col-md-12 col-sm-12 mb-2 mt-2 p-2">
				<div class="ex-image-container slider-image-container prop-image1" onclick="lightbox(0)" style="background-image:url(asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }});">
				</div>
			</div>
		</div>
	</div>

	<section class="customer-logos slider d-block d-sm-none">
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}">
		</div>
	</section>
	@endif

	@if(sizeof($item->images)==2)
	<div class="d-none d-sm-block">
		<div id="photos" class="row   ">
			<div class="col-md-6 col-sm-6 col-6 mb-2 mt-2 p-2 prop-image2">
				<div class="ex-image-container slider-image-container" onclick="lightbox(0)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}');">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-6 mb-2 mt-2 p-2 prop-image2">
				<div class="ex-image-container slider-image-container" onclick="lightbox(1)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}');">
				</div>
			</div>
		</div>
	</div>

	<section class="customer-logos slider d-block d-sm-none">
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}">
		</div>
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}">
		</div>
	</section>
	@endif

	@if(sizeof($item->images)==3)
	<div class="d-none d-sm-block">
		<div id="photos" class="row  sv_three_col ">
			<div class="col-md-6 col-sm-6 col-6 mb-2 mt-2 p-2 prop-image3">
				<div class="ex-image-container slider-image-container" onclick="lightbox(0)" style="background-image: url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}');">
				</div>
			</div>
			<div class="p-2 col-md-3 sv_third_col">
				<div class="ex-image-container slider-image-container" onclick="lightbox(1)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}');">
				</div>
			</div>
			<div class="p-2 col-md-3 sv_third_col">

				<div class="ex-image-container slider-image-container" onclick="lightbox(2)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[2]->url }}');">
				</div>
			</div>
		</div>
	</div>

	<section class="customer-logos slider d-block d-sm-none">
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}')">
		</div>
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}')">
		</div>
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[2]->url }}')">
		</div>
	</section>
	@endif
	@if(sizeof($item->images)==4)
	<div class="d-none d-sm-block">
		<div id="photos" class="row   sv_four_col">
			<div class="col-md-6 col-sm-6 col-6 p-2 sv_fourth_col_img sv_fourth_col">
				<div class="slider-image-container" onclick="lightbox(0)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}');">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-6 p-2 sv_fourth_col_img sv_fourth_col">
				<div class="slider-image-container" onclick="lightbox(1)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}');">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-6 p-2 sv_fourth_col_img ">
				<div class="slider-image-container" onclick="lightbox(2)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[2]->url }}');">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-6 p-2 sv_fourth_col_img ">
				<div class="slider-image-container" onclick="lightbox(3)" style="background-image:url('{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[3]->url }}');">
				</div>
			</div>
		</div>
	</div>

	<section class="customer-logos slider d-block d-sm-none">
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}">
		</div>
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}">
		</div>
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[2]->url }}">
		</div>
		<div class="slide mt-3 mb-3">
			<div class="mob-overlay"></div>
			<img class="img-fluid" src="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[3]->url }}">
		</div>
	</section>
	@endif

</div>


<div class="container">
	<div class="row" id="mainDiv">
		<div class="col-lg-8 col-xl-8 pl-0">
			<div id="sideDiv">
				<div class="d-flex mt-1">
					<div class="col-md-11 pl-0">
						<h3 class="text-20"><strong>{{$item->name}} hosted by {{$item->owner_name}}</strong></h3>
						<span class="text-14 gray-text">Available with different veriety of accomodations.</span>
					</div>
					<div class="text-center">
						<a href="../login.html">
							<img alt="User Profile Image" class="img-fluid rounded-circle mr-4 img-60x60" src="{{ asset('images/profile.jpg') }}" title="{{$item->owner_name}}">
						</a>
					</div>
				</div>
				<hr>

			</div>
		</div>

		<!--<div class="col-lg-4 col-xl-4 mb-4 p-0">
			<div id="sticky-anchor" class="d-none d-md-block"></div>
			<div class="price-card">
				<div id="booking-price" class="panel panel-default">
					<div class="" id="booking-banner" class="">
						<div class="">
							<div class="col-lg-12 p-0">
								<div class="row justify-content-between p-3">
									<div class="book-price">
										<span class="book-price-txt">&#36; 55 </span>
										<div id="per_night" class="per-night pl-2">/ night</div>
										<div id="per_month" class="per-month display-off pl-2">/ month
											<i id="price-info-tooltip" class="fa fa-question hide" data-behavior="tooltip"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					 <div class="">
                  <form accept-charset="UTF-8" method="post" action="https://demowpthemes.com/buy2rental/payments/book/55" id="booking_form">
                     <input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
                     <div class="row">
                        <div class="col-md-12 single-border border-r-10 p-0">
                           <div class="row" id="daterange-btn">
                              <div class="col-6 p-2">
                                 <label class="pl-3 mb-0 font-weight-600">Check In</label>
                                 <div class="mr-2">
                                    <input class="form-control" id="startDate" name="checkin" value="09-03-2022" placeholder="dd-mm-yyyy" type="text" required>
                                 </div>
                              </div>
                              <input type="hidden" id="property_id" value="55">
                              <input type="hidden" id="room_blocked_dates" value="" >
                              <input type="hidden" id="calendar_available_price" value="" >
                              <input type="hidden" id="room_available_price" value="" >
                              <input type="hidden" id="price_tooltip" value="" >
                              <input type="hidden" id="url_checkin" value="" >
                              <input type="hidden" id="url_checkout" value="" >
                              <input type="hidden" id="url_guests" value="" >
                              <input type="hidden" name="booking_type" id="booking_type" value="instant" >
                              <div class="col-6 p-2 border-left-chk">
                                 <label class="pl-3 mb-0 font-weight-600">Check Out</label>
                                 <div class="ml-2">
                                    <input class="form-control" id="endDate" name="checkout" value="10-03-2022" placeholder="dd-mm-yyyy" type="text" required>
                                 </div>
                              </div>
                           </div>
                           <div class="row mt-4 pb-2">
                              <div class="col-md-12 p-0">
                                 <div class=" ml-2 mr-2 ">
                                    <label class="font-weight-600 pl-3 mb-0">Guests</label>
                                    <div class="">
                                       <select id="number_of_guests" class="form-control" name="number_of_guests">
                                                                                    <option value="1" >1</option>
                                                                                    <option value="2" >2</option>
                                                                                    <option value="3" >3</option>
                                                                                    <option value="4" >4</option>
                                                                                    <option value="5" >5</option>
                                                                                    <option value="6" >6</option>
                                                                                    <option value="7" >7</option>
                                                                                    <option value="8" >8</option>
                                                                                    <option value="9" >9</option>
                                                                                    <option value="10" >10</option>
                                                                                    <option value="11" >11</option>
                                                                                    <option value="12" >12</option>
                                                                                 </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="book_it" class="mt-4 mb-4">
                        <div class="js-subtotal-container booking-subtotal panel-padding-fit">
                           <div id="loader" class="display-off single-load">
                              <img src="../public/front/img/green-loader.gif" alt="loader">
                           </div>
                           <div class="table-responsive price-table-scroll p-0" style="display:none">
                              <table class="table price_table" id="booking_table">
                                 <tbody>
                                    <div id="append_date">
                                    </div>
                                    <tr>
                                       <td class="pl-4 w-50">
                                          <span  id="total_night_count" value="">0</span> night
                                       </td>
                                       <td class="pl-4 text-right"><span  id="total_night_price" value=""> 0 </span> <span id="custom_price" class="fa fa-info-circle secondary-text-color" data-html="true" data-toggle="tooltip" data-placement="top" title=""></span></td>
                                    </tr>
                                    <tr>
                                       <td class="pl-4">
                                          Service fee
                                       </td>
                                       <td class="pl-4 text-right"><span  id="service_fee" value=""> 0 </span></td>
                                    </tr>
                                    <tr class ="additional_price">
                                       <td class="pl-4">
                                          Additional Guest Fee
                                       </td>
                                       <td class="pl-4 text-right">&#36;<span  id="additional_guest" value=""> 0 </span></td>
                                    </tr>
                                    <tr class = "security_price">
                                       <td class="pl-4">
                                          Security Fee
                                       </td>
                                       <td class="pl-4 text-right">&#36;<span  id="security_fee" value=""> 0 </span></td>
                                    </tr>
                                    <tr class = "cleaning_price">
                                       <td class="pl-4">
                                          Cleaning Fee
                                       </td>
                                       <td class="pl-4 text-right">&#36;<span  id="cleaning_fee" value=""> 0 </span></td>
                                    </tr>
                                    <tr class="iva_tax">
                                       <td class="pl-4">
                                          I.V.A Tax
                                       </td>
                                       <td class="pl-4 text-right"> <span  id="iva_tax" value=""> 0 </span></td>
                                    </tr>
                                    <tr class="accomodation_tax">
                                       <td class="pl-4">
                                          Accommodation Tax
                                       </td>
                                       <td class="pl-4 text-right"> <span  id="accomodation_tax" value=""> 0 </span></td>
                                    </tr>
                                    <tr class="sv_discount">
                                       <td class="pl-4">
                                          Discount
                                       </td>
                                       <td class="pl-4 text-right"><span>- </span>&#36; <span  id="discount" value=""> 0 </span></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <label id="show-price">Show Price Details <i class="fa fa-chevron-down" aria-hidden="true"></i></label>
                        </div>
                        <div id="book_it_disabled" class="text-center d-none">
                           <p id="book_it_disabled_message" class="icon-rausch">
                              Dates Not Available
                           </p>
                           <a href="../search0ad7.html?location=Budapest" class="btn btn-large btn-block text-14" id="view_other_listings_button">
                           View Other Listing
                           </a>
                        </div>
                        <div id="minimum_disabled" class="text-center d-none">
                           <p  class="icon-rausch text-danger">
                              You have to book minimum <span id="minimum_disabled_message"></span>  night&#039;s on this date
                           </p>
                           <a href="../search0ad7.html?location=Budapest" class="btn btn-large btn-block text-14" id="view_other_listings_button">
                           View Other Listing
                           </a>
                        </div>
						
						<div id="maximum_disabled" class="text-center d-none">
                           <p  class="icon-rausch text-danger">
                              You have to book maximum <span id="maximum_disabled_message"></span>  night&#039;s on this date
                           </p>
                           <a href="../search0ad7.html?location=Budapest" class="btn btn-large btn-block text-14" id="view_other_listings_button">
                           View Other Listing
                           </a>
                        </div>
						
                        <div class="book_btn col-md-12 text-center ">
                           <button type="submit" class="btn vbtn-outline-success text-14 font-weight-700 mt-3 pl-5 pr-5 pt-3 pb-3 w-100" id="save_btn">
                           <i class="spinner fa fa-spinner fa-spin d-none"></i>
                           <span class="display-off">
                           Request to Book
                           </span>
                           <span class="">
                           <i class="icon icon-bolt text-beach h4"></i>
                           Instant Book
                           </span>
                           </button>
                        </div>
                        <p class="col-md-12 text-center mt-3">You’ll be able to review before paying.</p>
                        <hr>
                        <div class="col-md-12">
                           <span class="font-weight-700">Total</span>
                           <span class="font-weight-700 float-right"><span  id="total" value=""> 0 </span></span>
                        </div>
                     </div>
                     <input id="hosting_id" name="hosting_id" type="hidden" value="55">
                  </form>
               </div> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>-->



		<div class="row mt-4 mt-sm-0">
			<div class="col-lg-8 col-xl-8 col-sm-12 p-0">
				<div class="pb-5" id="listMargin">
					<div class="row" id="about">
						<h2><strong>About this listing</strong> </h2>
						<p class="mt-4 text-justify text-14 pr-5"> {{$item->description}} </p>
					</div>

					<div class="mt-3">
						<hr>
						<div class="row">
							<div class="col-md-12 col-sm-12 p-0">
								<div class="mb-3">
									<div class="align-self-center">
										<h2 class="font-weight-700 text-17"> The Space</h2>
									</div>
								</div>
							</div>



							<div class="col-md-12 col-sm-12 p-0">
								<div class="row">
									<div class="col-md-12 col-sm-6 p-0">
										<!-- <div class="text-15"><span class=""><strong>Bed type:</strong></span> Based on requirement </div> -->
										<div class="text-15"><strong>Property type:</strong> <span class="text-danger" style="text-transform: uppercase;">{{$item->type}}</span> </div>
										<!-- <div class="text-15"><strong>Accommodates:</strong> </div> -->
									</div>
									<!-- <div class="col-md-6 col-sm-6 p-0">
										<div class="text-15"><strong>Bedrooms:</strong> 5</div>
										<div class="text-15"><strong>Bathrooms:</strong> 5</div>
										<div class="text-15"><strong>Beds:</strong> 5</div>
									</div> -->
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12 col-sm-12 p-0">
								<div class="mb-3">
									<div class="align-self-center">
										<h2 class="font-weight-700 text-17"> Amenities</h2>
									</div>
								</div>
							</div>
							
							<div class="col-md-12 col-sm-12 p-0">
								<!--show less amenities-->
								<div class="row showless_amenities">
									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-essentials" aria-hidden="true"></i>
										Essentials
									</div>
									</del>

									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-tv" aria-hidden="true"></i>
										TV
									</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-desktop" aria-hidden="true"></i>
											Cable TV
										</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-air-conditioning" aria-hidden="true"></i>
											Air Conditioning
										</div>
									</del>







									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-heating" aria-hidden="true"></i>
										Heating
									</div>
									</del>

									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-meal" aria-hidden="true"></i>
										Kitchen
									</div>
									</del>

									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-internet" aria-hidden="true"></i>
											Internet
										</div>
									</del>

									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-fireplace" aria-hidden="true"></i>
											Indoor Fireplace
										</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-smoking" aria-hidden="true"></i>
											Shampoo
										</div>
									</del>

									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-washer" aria-hidden="true"></i>
											Washer
										</div>
									</del>
									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-dryer" aria-hidden="true"></i>
										Dryer
									</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-cup" aria-hidden="true"></i>
											Breakfast
										</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-parking" aria-hidden="true"></i>
											Free Parking on Premises
										</div>
									</del>

									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-family" aria-hidden="true"></i>
										Family/Kid Friendly
									</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-smoking" aria-hidden="true"></i>
											Smoking Allowed
										</div>
									</del>
									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-balloons" aria-hidden="true"></i>
										Suitable for Events
									</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-paw" aria-hidden="true"></i>
											Pets Allowed
										</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-ok" aria-hidden="true"></i>
											Pets live on this property
										</div>
									</del>
									<del class="d-none">

										<div class="col-md-6 col-sm-6 p-0 text-15">
											<i class="icon icon-accessible" aria-hidden="true"></i>
											Wheelchair Accessible
										</div>
									</del>
									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-ok" aria-hidden="true"></i>
										First Aid Kit
									</div>
									</del>
									<div class="col-md-6 col-sm-6 p-0 text-15">
										<i class="icon icon-ok" aria-hidden="true"></i>
										Fire Extinguisher
									</div>
									</del>

								</div>
							</div>
						</div>
						<hr>


						<div class="row">
							<div class="col-md-12 col-sm-12 p-0">
								<div class="mb-3">
									<div class="align-self-center">
										<h2 class="font-weight-700 text-17">Prices</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 p-0">
								<div class="row">
									<div class="col-md-6 col-sm-6 p-0">
										<div class="text-15">Extra people:
											<strong>

												<span> &#8377; {{$item->price}} / night after the 1 guest</span>
											</strong>
										</div>
										<div class="text-15">
											Weekly discount (%):
											<strong> <span id="weekly_price_string">3</span> /week</strong>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 p-0">
										<div class="text-15">
											Monthly discount (%):
											<strong>
												<span id="weekly_price_string">7</span> /month
											</strong>
										</div>
										<!-- weekend price -->
										<div class="text-15">
											Weekend pricing:
											<strong>
												<span id="weekly_price_string"></span> Lesser then other days
											</strong>
										</div>

										<div class="text-15">
											Cancellation Policy:
											<strong>
												<span class="secondary-text-color">Flexible</span>
											</strong>
										</div>

										<!-- end weekend price -->
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12 col-sm-12 p-0">
								<div class="mb-3">
									<div class="align-self-center">
										<h2 class="font-weight-700 text-18">Description</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 p-0">
								<strong class="font-weight-700">About Place</strong>
								<p class="text-justify comment more">Excellent, comfortable home with a lovely location! A few of the town&#039;s best restaurants are within easy reach.</p>

								<strong class="font-weight-700">Place is Great For</strong>
								<p class="text-justify comment more">Peaceful and Comfortable Vacation Trip </p>

								<!--<a href="javascript:void(0)" id="description_trigger" data-rel="description" class="more-btn"><strong>+ More</strong></a>-->
								<div class="" id='description_after'>
									<strong class="font-weight-700">Interaction with Guests</strong>
									<p class="text-justify comment more"> Excellent, comfortable home with a lovely location! A few of the town&#039;s best restaurants are within easy reach.</p>

									<strong class="font-weight-700">About Neighborhood</strong>
									<p class="text-justify comment more"> Peaceful and Comfortable Vacation Trip</p>
									<strong class="font-weight-700">Guest can Access</strong>
									<p class="text-justify comment more">The spare room is available to guests.</p>
									<strong class="font-weight-700">Get Around</strong>
									<p class="text-justify comment more">Excellent, comfortable home with a lovely location! A few of the town&#039;s best restaurants are within easy reach.</p>
									<strong class="font-weight-700">Other</strong>
									<p class="text-justify comment more">Peaceful and Comfortable Vacation Trip</p>
									<!--<a href="javascript:void(0)" id="description_less" data-rel="description" class="less-btn"><strong>- less</strong></a>-->
								</div>
							</div>
						</div>
						<hr>
						<!-- <hr> -->
						<!--<div class="row">
                  <div class="col-md-12 col-sm-12 p-0">
                     <div class="mb-3">
                        <div class="align-self-center">
                           <h2 class="font-weight-700 text-17">Safety Features</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 p-0">
                     <div class="row">
                                                <div class="col-md-6 col-sm-6 text-15 p-0">
                           <i class="fa fa-ok" aria-hidden="true"></i> 
                                                      <del> 
                                                      Smoke Detector
                                                      </del> 
                                                   </div>
                                                <div class="col-md-6 col-sm-6 text-15 p-0">
                           <i class="fa fa-ok" aria-hidden="true"></i> 
                                                      <del> 
                                                      Carbon Monoxide Detector
                                                      </del> 
                                                   </div>
                                                <div class="col-md-6 col-sm-6 text-15 p-0">
                           <i class="fa fa-ok" aria-hidden="true"></i> 
                                                      First Aid Kit
                                                   </div>
                                                <div class="col-md-6 col-sm-6 text-15 p-0">
                           <i class="fa fa-ok" aria-hidden="true"></i> 
                                                      <del> 
                                                      Safety Card
                                                      </del> 
                                                   </div>
                                                <div class="col-md-6 col-sm-6 text-15 p-0">
                           <i class="fa fa-ok" aria-hidden="true"></i> 
                                                      Fire Extinguisher
                                                   </div>
                                             </div>
                  </div>
               </div>-->

						<!-- <div class="row">

						<div class="col-md-12 col-sm-12 p-0">
							<div class="row">
								<div class="col-md-6 col-sm-6 p-0">
									<div class="align-self-center">
										<h2 class="font-weight-700 text-17">Availability</h2>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 p-0">
									<a id="view-calendar" href="javascript:void(0)" class="text-color text-15 text-color-hover secondary-text-color"><strong>View Calendar</strong></a>
								</div>
							</div>
						</div>
					</div> -->
						<hr>
						<!--popup slider-->
						<div class="d-none" id="showSlider">
							<div id="ninja-slider">
								<div class="slider-inner">
									@if(sizeof($item->images)==1)
									<ul>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}" aria-label="photo"></a>
										</li>
									</ul>
									@endif
									@if(sizeof($item->images)==2)
									<ul>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}" aria-label="photo"></a>
										</li>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}" aria-label="photo"></a>
										</li>

									</ul>
									@endif

									@if(sizeof($item->images)==3)
									<ul>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}" aria-label="photo"></a>
										</li>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}" aria-label="photo"></a>
										</li>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[2]->url }}" aria-label="photo"></a>

										</li>

									</ul>
									@endif

									@if(sizeof($item->images)==4)
									<ul>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[0]->url }}" aria-label="photo"></a>
										</li>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[1]->url }}" aria-label="photo"></a>
										</li>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[2]->url }}" aria-label="photo"></a>

										</li>
										<li>
											<a class="ns-img" href="{{ asset('images/property/').'/'.$item->images[0]->property_id.'/'.$item->images[3]->url }}" aria-label="photo"></a>

										</li>

									</ul>
									@endif
									<div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
								</div>
							</div>
						</div>
						<!--popup slider end-->

					</div>
					<!--Start Reviews
				<div id="reviews" class="col-md-12">
					<div class="mt-5 mb-3">
						<div class="row">
							<div class="col-md-12">
								<h2><strong>No Reviews Yet</strong></h2>
							</div>
							<div class="col-md-12">
								<p>This host has reviews for other properties.</p>
								<p class="text-center mt-5 mb-4">
									<a href="../login.html" class="btn btn vbtn-outline-success text-14 font-weight-700 pl-5 pr-5 pt-3 pb-3">View Other Reviews</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				<hr>-->
					<!--End Reviews-->
					<div class="mt-5 abt_host col-md-12">
						<div class="col-md-12">
							<div class="clearfix"></div>
							<h2><strong>About the Host</strong></h2>
							<div class="d-flex mt-4">
								<div class="">
									<div class="media-photo-badge text-center">
										<a href="../login.html"><img alt="Albert" class="" src="{{ asset('images/profile.jpg') }}" title="{{$item->owner_name}}"></a>
									</div>
								</div>
								<div class="ml-2 pt-3">
									<a href="#">
										<h2 class="text-16 font-weight-700">{{$item->owner_name}}</h2>
									</a>
									<p>Member since {{date('Y', strtotime($item->created_at))}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="container mt-70" id="location">
	<div class="row mt-5">
		<div class="col-md-12">
			<div id="room-detail-map" class="single-map-w"></div>
		</div>
	</div>
</div> -->
@endforeach

<!-- <div class="container mt-70 mb-5">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center-sm text-20 font-weight-700">Similar Listings</h2>
			</div>
		</div>
		<div class="row m-0 mb-5 similar_listing">
			<div class="col-md-6 col-lg-4 col-xl-3 p-2 mt-4 pl-4 pr-4">
				<div class="card h-100 card-shadow card-1">
					<a href="single-room-in-budapest-1.html">
						<figure class="">
							<img src="../public/images/property/60/1629782423_budapest2.jpg" class="room-image-container200" alt="img11" />
						</figure>
					</a>
					<div class="wishicon svwishlist60">
						<i class="icon icon-heart-alt b-login" id="wishlistid60"></i>
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
					<div class="card-body p-0 pl-1 pr-1">
						<div class="d-flex">
							<div class="text">
								<a class="text-color text-color-hover" href="single-room-in-budapest-1.html">
									<p class="text-14 font-weight-700 text margin-bottom-zero"> Single room in Budapest</p>
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
									<p class="text-14 mb-0 text"><i class="fas fa-map-marker-alt"></i> Budapest</p>
								</div>
								<div>
									<span><i class="fa fa-star text-14 yellow_color"></i>
										0
										(0)</span>
								</div>
							</div>
						</div>
						<div class="svred text-14">
							<span class="font-weight-700">&#36; 35 / night</span>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div> -->

<!-- New Js start-->
<!-- <script src="../public/js/jquery-2.2.4.min.js"></script>
	<script src="../public/js/bootstrap.bundle.min.js"></script>
	<script src="../public/js/main.js"></script> -->
<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyBjxknPFQxYv3j5xWuNgNISwaFIdSPVp_I&amp;libraries=places'></script>
<script type="text/javascript" src="{{ asset('js/locationpicker.jquery.min.js')}}"></script>
<script>
	setTimeout(function() {

		$('#room-detail-map').locationpicker({
			location: {
				latitude: "47.497912",
				longitude: "19.040235"
			},
			radius: 0,
			addressFormat: "",
			markerVisible: false,
			markerInCenter: false,
			enableAutocomplete: true,
			scrollwheel: false,
			oninitialized: function(component) {
				setCircle($(component).locationpicker('map').map);
			}

		});

	}, 5000);



	function setCircle(map) {
		var citymap = {
			loccenter: {
				center: {
					lat: 41.878,
					lng: -87.629
				},
				population: 240
			},
		};

		var cityCircle = new google.maps.Circle({
			strokeColor: '#329793',
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: '#329793',
			fillOpacity: 0.35,
			map: map,
			center: {
				lat: 47.497912,
				lng: 19.040235
			},
			radius: citymap['loccenter'].population
		});
	}

	function lightbox(idx) {
		//show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
		$('#showSlider').removeClass("d-none");
		nslider.init(idx);
		$("#ninja-slider").addClass("fullscreen");
	}
</script>
<script>
	$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 3 secs

});
	$(document).ready(function() {
		$(window).bind('scroll', function() {
			if ($(window).scrollTop() > 300) {
				$('.sv_single_prop').show();
				$('.sv_single_prop nav').addClass('fixed');
				/*$('#booking-banner .secondary-bg').addClass('price_fixed',1000);*/

			} else {
				$('.sv_single_prop').hide();
				$('.sv_single_prop nav').removeClass('fixed');
				/*$('#booking-banner .secondary-bg').removeClass('price_fixed',1000);*/
			}
		});
	});
	$(document).ready(function() {
		$('.customer-logos').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
		});
	});
	$(document).ready(function() {
		$('#show-price').click(function() {
			$('.price-table-scroll').slideToggle("slow");
			$("i", this).toggleClass("fa fa-chevron-up fa fa-chevron-down");
		});
	});
	$(function() {
		$('.sv_single_prop li a[href*=\\#]:not([href=\\#])').on('click', function() {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 120
				}, 1000);
				return false;
			}
		});
	});

	function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
		if (isFullscreen) {
			$('#showSlider').addClass("d-none");
		}
	}

	function show_loader() {
		$('#loader').removeClass('d-none');
		$('#pagination').addClass('d-none');
	}

	function hide_loader() {
		$('#loader').addClass('d-none');
		$('#pagination').removeClass('d-none');
	}
	$(document).ready(function() {
		$('.customer-logos').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
		});
	});
</script>
@include('layouts.partials.footer')
@endsection