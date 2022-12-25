@extends('layouts.appUser')

@section('content')
<section class="hero-banner magic-ball home">
    <!--Desktop view-->

    <div class="main-banner">
       
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