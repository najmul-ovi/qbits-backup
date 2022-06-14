@extends('frontend.layouts.master')
@section('title','Sigma')
@section('content')
<Section class="qbits-top-middle">
    <div class="container">
        <div class="middle-qbits-menu">
            <div class="row">
                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-start">
                        <a>Drivers & Manuals</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-center">
                        <a href="{{ route('product_registration')}}">Registration</a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-center" style="margin-left: 60px;">
                        <a href="{{route('warranty')}}">Warranty</a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-end">
                        <a>Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>
<section class="signin-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <div class="signin-form">
				    <p style="padding-top: 60px !important;">Already a Member ?</p>
				    <a href="#">Sign in Here</a>
					<form action="">
						<div class="col">
						   <input class="form-control" type="email" name="email" placeholder="Email">
						</div>
						<div class="col">
						    <input class="form-control" type="password" name="password" placeholder="Password">
						</div>
                           <input type="checkbox"><span style="padding-left: 20px; font-size:18px;">Remember me</span>
						<div class="col">
							<button type="submit" class="btn btn-primary signin-button">Sign in</button>
						</div>
						<div class="row">
							<div class="col-6">
								<p style="padding-bottom: 50px;">Forget password</p>
							</div>
							<div class="col-6">
								<a href="{{ route('signup_new')}}">Create an Account</a>
							</div>
						</div>
					</form>
              </div>
            </div>
        </div>
		<div class="signin-social-button">
			<div class="row">
				<div class="col-6">
					<div class="signin-google-button">
					<img src="{{ asset('frontend/sigma/icons/google.png') }}" alt=""><span>Continue with google</span>
					</div>
				</div>

				<div class="col-6">
					<div class="signin-facebook-button">
						<img src="{{ asset('frontend/sigma/icons/facebook.png') }}" alt=""><span>Continue with facebook</span>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
 
@endsection



