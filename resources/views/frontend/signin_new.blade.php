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

@php
if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pwd'])){
  $login_email=$_COOKIE['login_email'];
  $login_pwd=$_COOKIE['login_pwd'];
  $is_remember="checked='checked'";
} else{
  $login_email='';
  $login_pwd='';
  $is_remember="";
}   

@endphp  

<section class="signin-area" style="background: #E1E1E1;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <div class="signin-form" style="background: #fff;width: 860px;color: #c2baba;">
                <div class="row">
                    <label for="inputPassword" class="col-sm-5 col-form-label"></label>
                    <div class="col-sm-7">
                        <p style="padding-top: 60px !important; margin-left: -30px;">Already a Member? Sign in Here</p>
                    </div>
                </div>
					<form action="{{ route('login')}}" method="POST" style="margin-top: 10px; width: 600px;">
                        @csrf
                        <div class="row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Email <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control  ms-5 border-0"
                                    style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                    name="email" id="email" type="email" placeholder="Email" required value="{{$login_email}}">
                            </div>
                        </div>
                        <!-- <div class="row" id="err_email" style="margin: -30px 0 10px 225px;"></div> -->
                        <div class="row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input class="form-control  ms-5 border-0"
                                    style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                    name="password" id="password" type="password" placeholder="Password" required value="{{$login_pwd}}">
                            </div>
                            <i class="fa fa-light fa-eye" id="show-hide" onclick="show()"></i>
                        </div>
                        <div class="row" style="margin-top: -15px;">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-4">
                                <input style="font-size: 35px;margin-left: 2px" type="checkbox" id="rememberme" name="rememberme" {{$is_remember}}><span style="padding-left: 10px; font-size:17px;color: rgb(32, 30, 30);">Remember me</span>
                            </div>
                            <div class="col-sm-4">
                                <p class="text-end"><a class="forget-password" style="padding-bottom: 40px;color: #c2baba;font-size: 15px;">Forget password?</a></p>
                            </div>
                        </div>

                        <div class="row">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-7">
                                <button type="submit" class="btn btn-primary signin-button fw-normal">Sign in</button>
                            </div>
                        </div>

                        <div class="row pb-5">
                            <label for="inputPassword" class="col-sm-4 col-form-label"></label>
							<div class="col-sm-7">
								<span style="color: rgb(32, 30, 30);">New to Qbits? </span><span><a href="{{ route('signup')}}" class="create-account">Create an Account</a></span>
							</div>
                        </div>
					</form>
              </div>
            </div>
        </div>
		<!-- <div class="signin-social-button">
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
		</div> -->
    </div>
</section>


<script>
    function show() {
        var pswrd = document.getElementById('password');
          var icon = document.getElementById('show-hide');
          if (pswrd.type === "password") {
           pswrd.type = "text";
           icon.classList.remove("fa-eye");
           icon.classList.add("fa-eye-slash");
          }else{
           pswrd.type = "password";
           icon.classList.remove("fa-eye-slash");
           icon.classList.add("fa-eye");
          }
    }
</script>
@endsection



