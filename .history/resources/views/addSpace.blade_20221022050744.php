@extends('layouts.appUser')

@section('content')
<section class="hero-banner magic-ball home">
    <!--Desktop view-->

    <div class="container-fluid user-login-section p-0">
		<div class="row">
			<div class="user-login">
				<div class="user-login-bg" style="
              background: {{ asset('front/images/logos/1635916380_user_login_img.jpg') }}" 
            ></div>

				<div class="user-login-content">
					<div class="user-login-form">
						<h2 class="text-center font-weight-600 welcome-txt">
							Signup today for free
						</h2>
						<div class="d-flex justify-content-center login-list mt-5">
							<!-- <div><a href="login.html">Login</a></div> -->
							<div><a class="act-active" href="signup.html">Sign Up</a></div>
						</div>
						<div class="row mt-5 justify-content-center">
							<div class="col-lg-7 col-md-12">
								<form id="signup_form" name="signup_form" method="post"
									action="{{route('addspace')}}"  class="signup-form login-form"
									accept-charset="UTF-8" onsubmit="return ageValidate();">
									<input type="hidden" name="_token"
										value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr" />
									<input type="hidden" name="email_signup" id="form" />
									<input type="hidden" name="default_country" id="default_country"
										class="form-control" />
									<input type="hidden" name="carrier_code" id="carrier_code" class="form-control" />
									<input type="hidden" name="formatted_phone" id="formatted_phone"
										class="form-control" />
									<div class="row">
										<div class="form-group col-sm-6 p-0 mt-3">
											<label class="font-weight-600">First Name</label>
											<input type="text" class="form-control text-14 p-2" value=""
												name="first_name" id="first_name" placeholder="First Name" />
										</div>
										<div class="form-group col-sm-6 pl-1 pr-0 mt-3">
											<label class="font-weight-600">Last Name</label>
											<input type="text" class="form-control text-14 p-2" value=""
												name="last_name" id="last_name" placeholder="Last Name" />
										</div>
									</div>
									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Email</label>
										<input type="text" class="form-control text-14 p-2" value="" name="email"
											id="email" placeholder="Email" />
										<div id="emailError"></div>
									</div>
									<div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Phone</label>
										<input type="tel" class="form-control text-14 p-2" id="phone" name="phone"
											placeholder="111-111-1111" />
										<span id="tel-error" class="text-13 text-danger"></span>
										<span id="phone-error" class="text-13 text-danger"></span>
									</div>
									<!-- <div class="form-group col-sm-12 p-0 mt-3">
										<label class="font-weight-600">Password</label>
										<input type="password" class="form-control text-14 p-2" name="password"
											id="password" placeholder="Password" />
									</div> -->

									<div class="form-group col-sm-12 p-0 mt-5">
										<button type="submit" id="btn"
											class="btn pb-3 pt-3 text-15 rounded-3 vbtn-success w-100 ml-0 mr-0 mb-3">
											<i class="spinner fa fa-spinner fa-spin d-none"></i>
											<span id="btn_next-text">Sign Up</span>
										</button>
									</div>
								</form>
								<!--<div class="or-sec mb-5 mt-2">
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
							</div>
						</div>
					</div>
				</div>
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
@include('layouts.footer')
@endsection