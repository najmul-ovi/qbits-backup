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
                    <p class="container" style="padding-top: 20px !important;">Qbits Products Registration</p>
                    <hr style="color: #C8C8C8">
                    <div id="">
                        <form id="product-registration-submit" method="post">
                            @csrf
                            <div class="row">
                                <label for="model" class="col-sm-4 col-form-label">Model Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="model_name" id="m_name" type="text" placeholder="Model Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="serial" class="col-sm-4 col-form-label">Serial No <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="serial_no" id="serial_no" type="text" placeholder="Serial No" required>
                                </div>
                            </div>
                            <div class="row" id="err_serial" style="margin: -30px 0 10px 225px;"></div>
                            <div class="row">
                                <label for="name" class="col-sm-4 col-form-label">Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;" name="customer_name"
                                        id="customer_name" type="text" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-4 col-form-label">Email Address <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="customer_email" id="customer_email" type="email" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="row" id="err_prod_reg_email" style="margin: -30px 0 10px 225px;"></div>
                            <div class="row">
                                <label for="password" class="col-sm-4 col-form-label">Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="customer_password" id="customer_password" type="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row" id="err_pass" style="margin: -30px 0 10px 225px;"></div>
                            <div class="row mb-5">
                                <label for="rePassword" class="col-sm-4 col-form-label">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <input class="form-control ms-5 border-0"
                                        style="background-color: #E1E1E1; outline:none; border-radius: 8px;"
                                        name="customer_repassword" id="customer_repassword" type="password"
                                        placeholder="Confirm Password" required>

                                </div>
                            </div>
                            <div class="row" id="err_rpass" style="margin: -80px 0 35px 225px;"></div>
                            <div class="row" id="not_match_field mb-3" style="margin: -80px 0 35px 225px;"></div>

                            <!-- <input type="checkbox"><span style="padding-left: 20px; font-size:18px;">Remember me</span> -->
                            <div class="col text-end mb-2">
                                <button type="submit" class="btn btn-primary continue-button">Continue</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<section class="checkout-content-section">


    <!-- Modal -->
    <div class="modal fade" id="verification_code_modal" tabindex="-1" role="dialog"
        aria-labelledby="verification_code_modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #272727; border-radius: 20px;">
                <div class="modal-body pt-md-0 pb-5 px-4 px-md-5 text-center" id="verification_code_field">
                    <p style="color: #DBDBDD; margin-top: 25px;" id="modal-header">You are almost Done !</p>
                    <p style="color: #DBDBDD; font-size: 12px;" class="mt-2 mb-0">We have send you a verification code
                        to</p>
                    <p style="color: #DBDBDD; font-size: 12px;text-decoration: underline;cursor: pointer;"
                        id="modal_email"></p>
                    <h6 style="color: #DBDBDD;" class="mb-3">Enter the code here</h6>
                    <form id="verifyCodeSubmit">
                        @csrf
                        <div class="form-group text-centers">
                            <input type="text" class="form-control ms-5" style="width: 75%; border-radius: 8px;"
                                name="verify_code" id="verify_code" />
                            <div id="code_err_msg"></div>
                            <button type="button" class="btn btn-primary continue-button"
                                style="margin-top: 40px; margin-bottom: 5px; width: 40%;"
                                onclick="verifyCodeSubmit()">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $("#product-registration-submit").on('submit', function (e) {
        e.preventDefault();
        var isSendCode = jQuery("#send_code").val();
        var email = jQuery("#customer_email").val();
        if (isSendCode) {
            $('#verification_code_modal').modal('show');
            $('#modal_email').html(email);
        } else {
            document.getElementById("err_pass").style.display = "none";
            document.getElementById("err_rpass").style.display = "none";
            document.getElementById("err_serial").style.display = "none";
            document.getElementById("err_prod_reg_email").style.display = "none";
            var pass = jQuery("#customer_password").val();
            var rpass = jQuery('#customer_repassword').val();
            if (pass.length < 6) {
                document.getElementById("err_rpass").style.display = "none";
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
                document.getElementById("err_pass").style.display = "none";
                document.getElementById("err_rpass").style.display = "block";
                jQuery("#err_rpass").html("Password should be greater than or equal 6");
                return;
            }

            if (pass != rpass) {

                document.getElementById("err_rpass").style.display = "block";
                document.getElementById("err_pass").style.display = "none";
                jQuery("#err_rpass").html("Password not matched.");
                return;
            } else {
                document.getElementById("err_pass").style.display = "none";
                document.getElementById("err_rpass").style.display = "none";
                var data = jQuery('#product-registration-submit').serialize();
                jQuery.ajax({
                    url: '/product-registration-submit',
                    data: data,
                    type: 'post',
                    success: function (result) {
                        if (result.status == 'success') {
                            jQuery("#send_code").val(1);
                            $('#verification_code_modal').modal('show');
                            $('#modal_email').html(email);
                        } else if (result.status == 'error') {
                            if(result.type == 'serial'){
                                document.getElementById("err_serial").style.display = "block";
                                $("#err_serial").html(result.msg);
                            } else if(result.type == 'email'){
                                document.getElementById("err_prod_reg_email").style.display = "block";
                                $("#err_prod_reg_email").html(result.msg);
                            }
                        }
                    }
                });
            }
        }

    })


    function verifyCodeSubmit() {
        var data = jQuery('#verifyCodeSubmit').serialize();
        var verify_code = jQuery('#verify_code').val();
        jQuery('#code_err_msg').html("");
        jQuery.ajax({
            url: '/product_reg_code_submit',
            data: 'verify_code=' + verify_code + '&_token=' + jQuery("[name='_token']").val(),
            type: 'post',
            success: function (result) {

                if (result.status == 'success') {
                    jQuery("#send_code").val("");
                    window.location.href = window.location.href;
                } else if (result.status == 'error') {
                    jQuery('#code_err_msg').html(result.msg);
                    jQuery("#verify_code").val("");
                }
            }
        });
    }

</script>

<input type="hidden" id="send_code" value="">
<form id="signupForm">
    <input type="hidden" id="name" name="name" />
    <input type="hidden" id="phone" name="phone" />
    <input type="hidden" id="email" name="email" />
    @csrf
</form>

@endsection
