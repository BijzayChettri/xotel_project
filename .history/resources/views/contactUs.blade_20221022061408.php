@extends('layouts.appUser')
@section('content')
    <main role="main" id="site-content" class="margin-top-120">
		<div class="container-fluid container-fluid-90 ">
			<div class="col-md-12">
				<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown
					printer took a galley of type and scrambled it to make a type specimen book.</p>

				<div align="center" class="row">
					<div class="col-md-4">
						<div class="contact-page-icon mt-5"><img  src="{{ asset('img/email.png') }}" /></div>

						<h2 class="pt-5 mb-3 font-weight-600">Email Us</h2>

						<p><a>xotel@gmail.com</a></p>
					</div>

					<div class="col-md-4">
						<div class="contact-page-icon mt-5"><img src="{{ asset('img/call.png') }}"   /></div>

						<h2 class="pt-5 mb-3 font-weight-600">Call Us</h2>

						<p><a>+918918445778</a></p>
					</div>

					<div class="col-md-4">
						<div class="contact-page-icon mt-5"><img src="{{ asset('img/placeholder.png') }}" /></div>

						<h2 class="pt-5 mb-3 font-weight-600">Contact Address</h2>

						<p>Kalimpong, Westbengal, India</p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row pb-5 mt-5">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 card-default p-0">
					<div class="card-header">
						<h2 class="font-weight-600">Contact</h2>
					</div>
					<div class="card-body card-user">
						<form method="POST" action="https://demowpthemes.com/buy2rental/contact-us"
							enctype="multipart/form-data">
							<input type="hidden" name="_token" value="EAkjyNL7f9cswZsM7zpd4HZYFXF14YwDW6IPhlYr">
							<div class="row mt-5">
								<div class="col-md-2">
									<label class="font-weight-600"> Name</label>
								</div>
								<div class="col-md-10">
									<input type="text" class="form-control" placeholder="Name" name="username" required>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-md-2">
									<label class="font-weight-600"> Email</label>
								</div>
								<div class="col-md-10">
									<input type="email" class="form-control" placeholder="Email" name="useremail"
										required>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-md-2">
									<label class="font-weight-600">Send Message</label>
								</div>
								<div class="col-md-10">
									<textarea class="form-control textarea contact-textarea" placeholder="Message"
										name="message" required></textarea>
								</div>
							</div>

							<script src="../../www.google.com/recaptcha/apid41d.js?" async defer></script>


							<div class="row mt-5 ">
								<div class="col-md-2">
									<label class="font-weight-600">Captcha</label>
								</div>
								<div class="col-md-10">
									<div data-sitekey="6Lc2fYkdAAAAAJz7hw6enl07t7i2nWDO_4nZlw3M" class="g-recaptcha">
									</div>
								</div>
							</div>

							<div class="row mt-5">
								<div class="col-md-12 text-right">
									<button type="submit" class="btn vbtn-default pl-5 pr-5 text-14">Messages</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</main>
    </section>
 @include('layouts.footer')
@endsection
	