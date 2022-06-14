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

<Section class="qbits-top-bottom">
    <div class="container">
        <div class="middle-qbits-menu">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="me-2">We will offer 10% off. *</span><a href="#"
                            style="text-decoration: none">Click for code ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>

<Section class="qbits-top-last">
    <div class="container">
        <div class="middle-qbits-menu">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container d-flex justify-content-start align-items-center"
                        style="width: 980px; margin: 0 auto;">
                        <span style="margin-left: -25px;font-weight: bold;">Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>


<section class="signin-area" style="background-color: #e1e1e1;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="signin-form" style="background-color: #fff;">
                    <p class="container" style="padding-top: 20px !important;">Sign Up / Log In</p>
                    <hr style="color: #C8C8C8">
                    <div class="row container ms-4">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" onclick="guest()" checked="checked" />
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Guest User
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" onclick="login()">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Log in
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" onclick="signup()">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Sign up
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="toggle-guest-form">
                        <p class="container pt-5 ms-4" style="font-size: 14px;">No Account? No problem. Create an
                            account later to keep track of your Order </p>
                        <form action="{{ route('login')}}" method="POST">
                            @csrf
                            <div class="row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control  ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;" type="text"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Phone <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control  ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;" type="text"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div class="col text-end">
                                <button type="button" class="btn btn-primary continue-button">Continue</button>
                            </div>
                        </form>
                    </div>

                    <div id="toggle-login-form">
                        <form id="login-submit" method="POST">
                            @csrf
                            <div class="row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Email <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control  ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="email" id="log_email" type="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row" id="err_email" style="margin: -30px 0 10px 225px;"></div>
                            <div class="row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control  ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="password" id="log_pass" type="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row" id="err_pass" style="margin: -30px 0 10px 225px;"></div>
                            <div class="col text-end">
                                <button type="submit" class="btn btn-primary continue-button">Continue</button>
                            </div>
                        </form>
                    </div>

                    <div id="toggle-signup-form">
                        <form id="signup-submit" method="post">
                            @csrf
                            <div class="row">
                                <label for="name" class="col-sm-4 col-form-label">Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;" name="name"
                                        id="c_name" type="text" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="phone" class="col-sm-4 col-form-label">Phone Number <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="phone" id="c_phone" type="text" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-4 col-form-label">Email Address <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="email" id="c_email" type="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <!-- <div class="row" id="err_reg_email" style="margin: -30px 0 10px 225px;"></div> -->
                            <div class="row">
                                <label for="password" class="col-sm-4 col-form-label">Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="password" id="c_password" type="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row" id="err_pass" style="margin: -30px 0 10px 225px;"></div>
                            <div class="row mb-5">
                                <label for="rePassword" class="col-sm-4 col-form-label">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="repassword" id="c_repassword" type="password"
                                        placeholder="Confirm Password" required>

                                </div>
                            </div>
                            <div class="row" id="err_rpass" style="margin: -80px 0 0 225px;"></div>
                            <div class="row" id="not_match_field" style="margin: -80px 0 0 225px;"></div>

                            <!-- <input type="checkbox"><span style="padding-left: 20px; font-size:18px;">Remember me</span> -->
                            <div class="col text-end mb-2">
                                <button type="submit" class="btn btn-primary continue-button" style="margin-top: -20px;">Continue</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="signin-social-button">
            <div class="row">
                <div class="col-6">
                    <div class="signin-google-button">
                        <img src="{{ asset('frontend/sigma/icons/google.png') }}" alt=""><span>Continue with
                            google</span>
                    </div>
                </div>

                <div class="col-6">
                    <div class="signin-facebook-button">
                        <img src="{{ asset('frontend/sigma/icons/facebook.png') }}" alt=""><span>Continue with
                            facebook</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="shoppingcart-category-section">
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <div class="shoppingcart-category">
                  <ul>
                      <li>Sigma > </li>
                      <li>Buy > </li>
                      <li>Product > </li>
                      <li>ShoppingCart</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</section> --}}

<section class="checkout-content-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="shoppingcart-content">
                    <div class="row">
                        <div class="shopping-cart-details">
                            <div class="col-sm-4">
                                <div class="checkout-page-left">
                                    <div>
                                        <h3>Already a Member ?</h3>
                                        <a href="{{ route('checkout-login')}}">Log in</a><br>
                                        {{-- <a href="{{ route('checkout-process')}}">Checkout Process</a> --}}
                                        {{-- <input type="radio" id="login" name="drone" value="Log in">
                                          <label for="login" style="font-weight: 600;">Log in</label> --}}
                                    </div>

                                    <div>
                                        <h3>I don't have an Account.</h3>
                                        <a href="{{ route('checkout_registration')}}">Sign up</a>
                                        {{-- <input type="radio" id="login" name="drone" value="sign up">
                                          <label for="Signup" style="font-weight: 600;">Sign up</label> --}}
                                    </div>

                                    <div class="signin-social-button">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="signin-google-button">
                                                    <img src="{{ asset('frontend/sigma/icons/google.png') }}"
                                                        alt=""><span>Continue with google</span>
                                                </div>

                                                <div class="signin-facebook-button">
                                                    <img src="{{ asset('frontend/sigma/icons/facebook.png') }}"
                                                        alt=""><span>Continue with facebook</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <h3>Shopping Cart :</h3>
                                @php
                                $total = 0;
                                @endphp
                                @foreach (App\Models\Cart::totalCarts() as $cart)

                                @php

                                $total += ($cart['unit_price'] * $cart['quantity']);
                                @endphp
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="shoppingcart-des-content">
                                            <div class="shopping-cart-image">
                                                <p>Image</p>
                                                {{-- <img src="{{ asset('frontend/sigma/High quality/desdis.png') }}"
                                                class="img-fluid" alt=""> --}}
                                                <img src="{{ asset($cart->product->galary_photo) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="shopping-cart-des">
                                                <p>Description</p>
                                                <p>{{ $cart->product->variations}}</p>
                                                {{-- <p>Qbits Sigma 15 - 10th Generation Intel® Core™ Processor, 15.6 Inches FHD Non Touch IPS Display 1920 x 1080, 512GB NVMe SSD, 8GB DDR4 RAM, Intel® Iris® Plus Graphics/Intel® UHD Graphics</p> --}}
                                                <!-- <a href="#" class="qty-button">- 2 +</a>
                                                    <i class="fa-solid fa-trash"></i>
                                                    <p class="model">Model : S15-613G</p> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="order-summery">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="order-summery-list">
                                                        <ul>
                                                            <li>Quantity: <span class="list-value"> Unit Price</span>
                                                            </li>

                                                            <li><a href="#"
                                                                    class="qty-button">{{ $cart->quantity}}</a><span
                                                                    class="list-value">৳{{ $cart->unit_price}}</span>
                                                            </li>
                                                            <li>Subtotal: <span
                                                                    class="list-value">৳{{ $cart->quantity * $cart->unit_price}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                                <div class="row">
                                    <div class="col-sm-8">

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="order-summery">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="order-summery-list"
                                                        style="margin-top: 80px !important;">
                                                        <ul>
                                                            <!-- <li>
                                                                <form class="subscribe_form">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="email" placeholder="Enter coupon code">
                                                                        <span class="input-group-btn">
                                                                        <button class="btn btn-default" type="button">Apply</button>
                                                                        </span>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>My Saving with <br>Coupon Code :  <span class="list-value">৳  </span></li> -->
                                                            <li style="font-weight: 600;">Gross Total: <span
                                                                    class="list-value">৳{{$total}}</span></li>
                                                        </ul>
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
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #272727; border-radius: 20px;">
                <div class="modal-body pt-md-0 pb-5 px-4 px-md-5 text-center" id="verification_code_field">
                    <p style="color: #DBDBDD; margin-top: 25px;" id="modal-header">You are almost Done !</p>
                    <p style="color: #DBDBDD; font-size: 12px;" class="mt-2 mb-0">We have send you a verification code
                        to</p>
                    <p style="color: #DBDBDD; font-size: 12px;text-decoration: underline;cursor: pointer;"
                        id="modal_email"></p>
                    <h6 style="color: #DBDBDD;" class="mb-3">Enter the code here</h6>
                    <form id="codeSubmit">
                        @csrf
                        <div class="form-group text-centers">
                            <input type="text" class="form-control ms-5" style="width: 75%; border-radius: 8px;"
                                name="verification_code" id="verification_code" />
                            <div id="code_err_msg"></div>
                            <button type="button" class="btn btn-primary continue-button"
                                style="margin-top: 40px; margin-bottom: 5px; width: 40%;"
                                onclick="codeSubmit()">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function guest() {
        document.getElementById("toggle-guest-form").style.display = "block";
        document.getElementById("toggle-login-form").style.display = "none";
        document.getElementById("toggle-signup-form").style.display = "none";
    }

    function login() {
        document.getElementById("toggle-login-form").style.display = "block";
        document.getElementById("toggle-guest-form").style.display = "none";
        document.getElementById("toggle-signup-form").style.display = "none";
    }

    function signup() {
        document.getElementById("toggle-signup-form").style.display = "block";
        document.getElementById("toggle-guest-form").style.display = "none";
        document.getElementById("toggle-login-form").style.display = "none";
    }

    $("#signup-submit").on('submit', function (e) {
        e.preventDefault();
        var isSendCode = jQuery("#send_code").val();
        var email = jQuery("#c_email").val();
        if (isSendCode) {
            $('#exampleModalCenter').modal('show');
            $('#modal_email').html(email);
        } else {
            document.getElementById("not_match_field").style.display = "none";
            document.getElementById("err_pass").style.display = "none";
            document.getElementById("err_rpass").style.display = "none";
            // document.getElementById("err_reg_email").style.display = "none";
            var pass = jQuery("#c_password").val();
            var rpass = jQuery('#c_repassword').val();
            if (pass.length < 6) {
                document.getElementById("not_match_field").style.display = "none";
                document.getElementById("err_pass").style.display = "block";
                jQuery("#err_pass").html("Password should be greater than or equal 6");
                if (rpass.length < 6) {
                    document.getElementById("err_rpass").style.display = "block";
                    jQuery("#err_rpass").html("Password should be greater than or equal 6");
                    return;
                }
                return;
            }
            if (rpass.length < 6) {
                document.getElementById("not_match_field").style.display = "none";
                document.getElementById("err_pass").style.display = "none";
                document.getElementById("err_rpass").style.display = "block";
                jQuery("#err_rpass").html("Password should be greater than or equal 6");
                return;
            }

            if (pass != rpass) {

                document.getElementById("not_match_field").style.display = "block";
                document.getElementById("err_pass").style.display = "none";
                document.getElementById("err_rpass").style.display = "none";
                jQuery("#not_match_field").html("Password not matched.");
                return;
            } else {
                document.getElementById("not_match_field").style.display = "none";
                document.getElementById("err_pass").style.display = "none";
                document.getElementById("err_rpass").style.display = "none";
                jQuery("#not_match_field").html("");
                var data = jQuery('#signup-submit').serialize();
                jQuery.ajax({
                    url: '/signup_submit',
                    data: data,
                    type: 'post',
                    success: function (result) {
                        if (result.status == 'success') {
                            jQuery("#send_code").val(1);
                            $('#exampleModalCenter').modal('show');
                            $('#modal_email').html(email);
                        } else if (result.status == 'error') {
                            swal("Oops...","This email already have an account. Try other email or login","error");
                            // document.getElementById("err_reg_email").style.display = "block";
                            // jQuery("#err_reg_email").html(result.msg);
                        }
                    }
                });
            }
        }

    })


    function codeSubmit() {
        var data = jQuery('#codeSubmit').serialize();
        var verify_code = jQuery('#verification_code').val();
        jQuery('#code_err_msg').html("");
        jQuery.ajax({
            url: '/code_submit',
            data: 'verify_code=' + verify_code + '&_token=' + jQuery("[name='_token']").val(),
            type: 'post',
            success: function (result) {

                if (result.status == 'success') {
                    jQuery("#send_code").val("");
                    window.location.href = window.location.href;
                } else if (result.status == 'error') {
                    jQuery('#code_err_msg').html(result.msg);
                    jQuery("#verification_code").val("");
                }
            }
        });
    }


    $("#login-submit").on('submit', function (e) {
        e.preventDefault();
        var isSendCode = jQuery("#send_code").val();
        var u_email = jQuery("#log_email").val();
        if (isSendCode) {
            $('#exampleModalCenter').modal('show');
            $('#modal_email').html(u_email);
        } else {
            document.getElementById("err_pass").style.display = "none";
            document.getElementById("err_email").style.display = "none";
            var pass = jQuery("#log_pass").val();
            if (pass.length < 6) {
                document.getElementById("err_pass").style.display = "block";
                jQuery("#err_pass").html("Password should be greater than or equal 6");
                return;
            }
            var data = jQuery('#login-submit').serialize();
            jQuery.ajax({
                url: '/login_submit',
                data: data,
                type: 'post',
                success: function (result) {
                    if (result.status == 'success') {
                        window.location.href = window.location.href;
                    } else if (result.status == 'error') {
                        if (result.type == 'verify_err') {
                            jQuery("#send_code").val(1);
                            document.getElementById("err_pass").style.display = "none";
                            document.getElementById("err_email").style.display = "none";
                            $('#exampleModalCenter').modal('show');
                            $('#modal-header').html(
                                'Your Email is not verified. Please verify first');
                            $('#modal_email').html(result.u_email);
                        } else if (result.type == "email_err") {
                            document.getElementById("err_pass").style.display = "none";
                            document.getElementById("err_email").style.display = "block";
                            jQuery("#err_email").html(result.msg);
                        } else if (result.type == "pass_err") {
                            document.getElementById("err_email").style.display = "none";
                            document.getElementById("err_pass").style.display = "block";
                            jQuery("#err_pass").html(result.msg);
                        }
                    }
                }
            });
        }

    })


    // $(document).ready(function() {
    //   $('#signup-submit').on('submit', function(e){
    //       $('#exampleModalCenter').modal('show');
    //       e.preventDefault();
    //   });
    // });

    // jQuery('#signup-submit').submit(function(e){
    // //   jQuery('#order_place_msg').html("Please wait...");
    //   var c_email = jQuery('#c_email').val();
    //   e.preventDefault();
    // //   $('#exampleModalCenter').modal('show');
    // //   $('#modal_email').html(c_email); 

    // //   jQuery.ajax({
    // //     url:'/signup_submit',
    // //     data:jQuery('#signup-submit').serialize(),
    // //     type:'post',
    // //     success:function(result){
    // //       if(result.status=='success'){
    // //         $('#exampleModalCenter').modal('show');
    // //         $('#modal_email').html(c_email);    
    // //         e.preventDefault();
    // //         //   if(result.payment_url!=''){
    // //         //     window.location.href=result.payment_url;
    // //         //   }else{
    // //         //     window.location.href="/order_placed";
    // //         //   }

    // //       } else{
    // //           alert(result.msg);
    // //       }
    // //     //   jQuery('#order_place_msg').html(result.msg);
    // //     }
    // //   });
    // });

    $('[data-toggle="popover"]').popover({
        html: true,
        sanitize: false,
    })
    

</script>

<input type="hidden" id="send_code" value="">
<form id="signupForm">
    <input type="hidden" id="name" name="name" />
    <input type="hidden" id="phone" name="phone" />
    <input type="hidden" id="email" name="email" />
    @csrf
</form>

@endsection
