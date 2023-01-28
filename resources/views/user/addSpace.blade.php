@extends('user.appUser')

@section('content')
<section class="hero-banner magic-ball home">
	<!--Desktop view-->

	<div class="container-fluid user-login-section p-0">
		<div class="row">
			<div class="user-login">
				<div class="user-login-bg" style="
              background: {{ asset('front/images/logos/1635916380_user_login_img.jpg') }}"></div>

				<div class="user-login-content">
					<div class="user-login-form">

						<h2 class="text-center font-weight-600 welcome-txt">Get listed with us</h2>

						<div class="row mt-5 justify-content-center">
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
							<div class="col-lg-7 col-md-12">
								<form class="mt-3" id="login_form" method="post" action="{{url('slef-registration')}}" accept-charset='UTF-8'>
									@csrf
									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Name</label>
										<input type="text" class="form-control text-14" value="" required name="name" placeholder="Name">
									</div>
									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Email</label>
										<input type="email" class="form-control text-14" value="" required name="email" placeholder="Email">
									</div>

									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Phone</label>
										<input type="text" class="form-control text-14" value=""  required name="phone" placeholder="Phone">
									</div>
									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Address</label>
										<input type="text" class="form-control text-14" value="" name="address" placeholder="Address">
									</div>
									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">About your property</label>
										<textarea  class="form-control text-14" name="description" placeholder="About your property"></textarea>
									</div>

									<div class="form-group col-sm-12 p-0 mt-5">
										<button type='submit' id="btn" class="btn pb-3 pt-3  text-15 rounded-3 vbtn-success w-100 rounded"> <i class="spinner fa fa-spinner fa-spin d-none"></i>
											<span id="btn_next-text">Join Us</span>
										</button>
									</div>
								</form>

								<div id="sv_phone_div" class="hide">

									<form class="mt-3" id="otp_form" method="post" action="https://demowpthemes.com/buy2rental/sendotp" accept-charset='UTF-8'>
										<input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">

										<div class="form-group col-sm-12 p-0 mt-3" id="svpno">
											<label class="font-weight-600">Phone</label>
											<input type="tel" class="form-control text-14" id="pno" name="pno" required value="">
										</div>
										<input type="hidden" name="default_country" id="default_country" class="form-control">
										<input type="hidden" name="carrier_code1" id="carrier_code1" class="form-control">
										<input type="hidden" name="formatted_phone" id="formatted_phone" class="form-control">

										<div class="form-input svotp" style="display:none">
											<input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP">
											<i class="icofont-phone"></i>
										</div>

										<button type='' id="svsendotp" class="btn pb-3 mt-3 pt-3 text-15 rounded-3 vbtn-success w-100 rounded"> <i class="spinner fa fa-spinner fa-spin d-none"></i>
											<span id="btn_next-text">Login </span>
										</button>
									</form>

								</div>




								<!--<div class="or-sec mb-5 mt-5">
                			    <span class="or-section">or</span>
                			</div>
                			<a href="https://demowpthemes.com/buy2rental/facebookLogin">
                				<button class="btn fb_btn pt-3 pb-3 text-16 w-100">
                					<span><i class="fab fa-facebook-f mr-2 text-16"></i> Connect with Facebook</span>
                				</button>
    			            </a>
                			<a href="https://demowpthemes.com/buy2rental/googleLogin">
                				<button class="btn google_btn pt-3 pb-3 text-16 w-100 mt-3">
                				<span><i class="fab fa-google-plus-g  mr-2 text-16"></i>  Connect with Google</span>
                				</button>
                			</a>-->


								<button class="btn-success btn border-0 pt-3 pb-3 text-16 w-100 mt-3 emailbutt hide">
									<span><i class="fa fa-envelope  mr-2 text-16"></i> Sign up with Email </span>
								</button>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- <section class="pb-70 mt-5">
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
</section> -->
<script>
	$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 5000 ); // 3 secs

});
</script>
@include('layouts.partials.footer')
@endsection