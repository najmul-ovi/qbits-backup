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



<section class="signin-area" style="background: #E1E1E1;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
              <div class="signin-form" style="background: #fff;width: 64vw;color: #a9a5a5;border-radius: 8px;">
                
                <div class="row" style="margin-bottom: -40px;">
                    <label for="" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-7" style="margin-left: -5px;">
                        <p style="padding-top:40px;font-weight: 700;" class="ms-4">Create your Qbits Account</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}" style="width: 50vw;">
                    @csrf
                    <div class="row">
                        <label for="inputName" class="col-sm-3 col-form-label pt-3">Name : <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-4">
                            <input class="form-control ms-5 border-0"
                                style="background-color: #E1E1E1; outline:none; border-radius: 8px; height: 6vh;"
                                name="fname" id="fname" type="text" placeholder="First Name" required>
                        </div>
                        <div class="col-sm-4">
                            <input class="form-control ms-5 border-0"
                                style="background-color: #E1E1E1; outline:none; border-radius: 8px; height: 6vh;"
                                name="lname" id="lname" type="text" placeholder="Last Name" required>
                        </div>
                    </div>

                    <!-- <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> -->

                    <div class="row">
                        <label for="inputEmail" class="col-sm-3 col-form-label pt-3">Email : <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control ms-5 border-0"
                                style="background-color: #E1E1E1; outline:none; border-radius: 8px; height: 6vh;"
                                name="email" id="email" type="email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="row">
                        <label for="inputPhone" class="col-sm-3 col-form-label pt-3">Phone : <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control ms-5 border-0"
                                style="background-color: #E1E1E1; outline:none; border-radius: 8px; height: 6vh;"
                                name="phone" id="phone" type="text" placeholder="Phone" required>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <label for="inputAddress" class="col-sm-3 col-form-label">Address :</label>
                        <div class="col-sm-8">
                            <textarea class="form-control ms-5 border-0" name="address" id="address" cols="4" rows="1" style="background-color: #E1E1E1; outline:none; border-radius: 8px;" placeholder="Address"></textarea>
                        </div>
                    </div> -->


                    <div class="row">
                        <label for="inputPassword" class="col-sm-3 col-form-label pt-3">Password : <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control ms-5 border-0"
                                style="background-color: #E1E1E1; outline:none; border-radius: 8px; height: 6vh;"
                                name="password" id="password" type="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -15px;">
                        <label for="inputAgreeTerms" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <input style="font-size: 35px;margin-left: -12px;" type="checkbox" id="agree-terms" onclick="btnEnabled()"><span style="padding-left: 10px; font-size:16px;color: rgb(32, 30, 30);">I agree with the <a href="#" style="font-size: 14px;cursor: pointer;">Privacy Policy</a> and <a href="#" style="font-size: 14px;cursor: pointer;">Term & Condition</a></span>
                        </div>
                    </div>

                    <div class="row" style="margin-top: -12px;">
                        <label for="inputAgreeTerms" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-3" style="margin-left: -12px;">
                            <button type="submit" class="btn cancel-button">
                                {{ __('Cancel') }}
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn signup-button" id="signup-btn" disabled="true">
                                {{ __('Sign up') }}
                            </button>
                        </div>
                    </div>

                    <div class="row pb-5">
                        <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-7">
                            <span style="color: #a9a5a5; margin-left: -8px;">Already have account? </span><span><a href="{{ route('signin')}}" class="create-account">Sign in</a></span>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <label for="inputConfirmPassword" class="col-sm-3 col-form-label">Confirm Password : <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-8">
                            <input class="form-control ms-5 border-0"
                                style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                name="c_password" id="c_password" type="password" placeholder="Confirm Password" required>
                        </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div> -->

                    <!-- <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn signup-button">
                                {{ __('Sign up') }}
                            </button>
                        </div>
                    </div> -->
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
		</div>
    </div> -->
</section>

<script>
    function btnEnabled(){
        var check = document.getElementById("agree-terms");
        var btn = document.getElementById("signup-btn");
        if(check.checked) {
            btn.removeAttribute("disabled");
        } else {
            btn.disabled = "true";
        }
    }
</script>
 
@endsection



