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
                        <span class="me-2">We will offer 10% off. *</span><a href="#" style="text-decoration: none">Click for code ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>

@if(App\Models\Cart::totalCarts())
<Section class="qbits-top-last">
    <div class="container">
        <div class="middle-qbits-menu">
            <div class="row">
                <div class="col-sm-12">
                    <div class="container d-flex justify-content-start align-items-center" style="width: 980px; margin: 0 auto;">
                        <span style="margin-left: -25px;font-weight: bold;">Your Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>

<section class="shoppingcart-content-section">
    <div class="container">
        <div class="cart-details">
            <div class="row">
                <div class="col-sm-12">
                    <form class="form" action="{{route('carts.update_product')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="shoppingcart-content pt-3">
                            <h5 class="container" style="margin-left: 14px">Your Product</h5>
                            @php
                            $total = 0;
                            @endphp

                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <hr style="color: #C8C8C8">
                                </div>
                                <div class="col-lg-4 col-md-4"></div>
                            </div>

                            @foreach (App\Models\Cart::totalCarts() as $cart)
                            @php
                            $total += ($cart['unit_price'] * $cart['quantity']);
                            @endphp
                            <div class="row container" id="cart_box{{$cart->id}}">
                                <div class="col-lg-8 col-md-8">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3">
                                                <div class="shopping-cart-image">
                                                    <img src="{{ asset($cart->product->galary_photo) }}"
                                                        class="img-fluid" style="width: 90%" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8">
                                                <div class="">
                                                    <p>{{ $cart->product->name }}</p>
                                                    {{-- <div class="input-group quantity" style="width: 30%;">
                                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                        <span class="input-group-text"><input type="button" onclick="decreaseQty('{{$cart->id}}','{{$cart->product->unit_price}}','{{$cart->product_id}}',
                                                    'sub')" value="-" style="border: 0; outline: 0; background:
                                                    none"/></span>
                                                </div>
                                                <input id="qty{{$cart->id}}" type="text" class="qty-input form-control"
                                                    value="{{ $cart->quantity }}">
                                                <input type="hidden" class="unit_price form-control" value="">

                                                <div class="input-group-append increment-btn" style="cursor: pointer">
                                                    <span class="input-group-text"><input type="button"
                                                            onclick="increaseQty('{{$cart->id}}','{{$cart->product->unit_price}}','{{$cart->product_id}}', 'plus')"
                                                            value="+"
                                                            style="border: 0; outline: 0; background: none" /></span>
                                                </div>
                                            </div> --}}

                                            <div class="d-flex">
                                                <button type="button" class="border-0 decrease-btn"
                                                    onclick="decreaseQty('{{$cart->id}}','{{$cart->product->unit_price}}','{{$cart->product_id}}')">-</button>
                                                <input id="qty{{$cart->id}}" type="text" class="qty-input form-control"
                                                    value="{{ $cart->quantity }}" style="width: 50px" readonly>
                                                <button type="button" class="border-0 increase-btn"
                                                    onclick="increaseQty('{{$cart->id}}','{{$cart->product->unit_price}}','{{$cart->product_id}}')">+</button>
                                            </div>

                                            {{-- <input id="qty{{$cart->id}}" class="aa-cart-quantity" type="number"
                                            value="{{$cart->quantity}}"
                                            onchange="updateQty('{{$cart->id}}','{{$cart->product->unit_price}}','{{$cart->product_id}}')"
                                            min="1"/> --}}

                                            {{-- <div class="input-group quantity" style="width: 140px">
                                                    <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                                                        <span class="input-group-text">-</span>
                                                    </div>
                                                    <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                                    <div class="input-group-append increment-btn" style="cursor: pointer">
                                                        <span class="input-group-text">+</span>
                                                    </div>
                                                </div> --}}
                                            <hr style="color: #C8C8C8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                        $subt = $cart->product->unit_price * $cart->quantity;
                        @endphp
                        <div class="col-lg-4 col-md-4">
                            <input type="hidden" class="product_id" value="{{ $cart->product->id}}">
                            <br>
                            <div class="row" style="margin-top: -20px">
                                <div class="col-lg-6 col-md-6">
                                    <p class="text-end"><a href="javascript:void(0)"
                                            class="btn btn-icon btn-sm btn-soft-primary btn-circle"
                                            onclick="deleteCartData('{{$cart->id}}','{{$cart->product_id}}')">
                                            <i class="fa fa-trash fa-2x" style="font-size: 15px"></i><span
                                                class="ms-3">Remove</span>
                                        </a></p>

                                </div>
                                <div class="col-lg-6 col-md-6 mt-1">
                                    <p class="text-end fw-bold">৳ <span id="total_price_{{$cart->id}}">{{$subt}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                @endforeach

                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <hr style="color: #C8C8C8">
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                </div>

                <div class="row container">
                    <div class="col-lg-8 col-md-8"></div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row mt-2">
                            <div class="col-lg-6 col-md-6">
                                <p class="text-end"><strong>Gross Total:</strong></p>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-1">
                                <p class="text-end fw-bold">৳ <span id="gross_total">{{$total}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-8"></div>
                    <div class="col-lg-4 col-md-4">
                        <span><a href="{{ route('checkout')}}" class="btn process-check-btn">Continue</a></span>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="shopping-cart-details">
                        <div class="col-sm-8">
                          <div class="shoppingcart-des-content">
                              <div class="shopping-cart-image">
                                  <img src="{{ asset($cart->product->galary_photo) }}" class="img-fluid" alt="">
            </div>
            <div class="shopping-cart-des" style="width: 57% !important;text-align:justify;">
                <p>{{ $cart->product->name }}</p>
                <td class="cart-product-quantity" width="130px">
                    <div class="row">


                        <div class="col-sm-6">

                            {{-- <div class="input-group quantity" style="width: 66%;">
                                            <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                                <span class="input-group-text">-</span>
                                            </div>
                                            <input type="text" class="qty-input form-control" maxlength="2" max="15" value="{{$cart->quantity}}">
                            <input type="hidden" class="unit_price form-control" value="{{ $cart->product->id}}">

                            <div class="input-group-append increment-btn changeQuantity " style="cursor: pointer">
                                <span class="input-group-text">+</span>
                            </div>
                        </div> --}}

                        {{-- </div>
                                      <div class="col-sm-6" style="margin-left: -62px;opacity:50%;">

                                        <a href="javascript:void(0)"  class="btn btn-icon btn-sm btn-soft-primary btn-circle delete_cart_data">
                                            <i class="fa fa-trash fa-2x" style="font-size: 15px"></i>
                                        </a>
                                      </div>
                                   </div>
                                  </td> --}}
                        {{-- <i class="fa-solid fa-trash"></i> --}}
                        {{-- <p class="model">Model : {{ $cart->product->sku }}</p>
                    </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="order-summery">
                <p>Order Summery</p>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="order-summery-list">
                            <input type="hidden" class="product_id" value="{{ $cart->product->id}}">
                            @php
                            $subt = $cart->product->unit_price * $cart->quantity;
                            @endphp
                            <ul>
                                <li>Unit Price: <span class="list-value unit_price">
                                        ৳{{ $cart->product->unit_price}}</span></li>
                                <li>Quantity: <span class="list-value qty-input"> X {{$cart->quantity}} PC/S</span></li>
                                <input type="hidden" class="hidden-qty-input" name="hidden-qty-input" value="135">
                                <li>Subtotal: <span class="list-value subtotal">৳{{$subt}}</span></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    {{-- <div style="font-weight: 600;"><p style="margin-left: 800px">Gross Total:</p> <span style="float:right;margin-top:-40px" id="gross_total"  class="list-value gross_total">৳{{$total}}</span>
    </div> --}}






    {{-- <button style="display:flex;justify-content: center" type="submit" class="btn btn-success">{{ ('Process to Checkout ') }}</button>
    --}}

    {{-- <a href="{{ route('checkout')}}" class="btn process-check-btn" style="text-align:center;">Process to
    Checkout</a><br />
    <a href="{{ route('buy') }}" class="btn continue-shopping-btn">Continue Shopping <i class="fa fa-long-arrow-right"
            aria-hidden="true"></i></a> --}}
    </div>

    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
</section>
@endif

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {

        $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 100000) {
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

        });

        $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });

    });




    // Update Cart Data
    $(document).ready(function () {

        $('.changeQuantity').click(function (e) {

            e.preventDefault();

            var thisClick = $(this);

            console.log(thisClick);

            var quantity = $(this).parents('.quantity').find('.qty-input').val();
            console.log(quantity);
            var product_id = $(this).parents('.quantity').find('.unit_price').val();
            var b = document.getElementById('gross_total').innerText
            console.log(b);

            var data = {
                '_token': $('input[name=_token]').val(),
                'quantity': quantity,
                'product_id': product_id,
            };

            $.ajax({
                url: '/carts/update',
                type: 'POST',
                data: data,
                success: function (response) {
                    console.log($(this));
                    // var abc = thisClick.parents('.shoppingcart-content-section').find('.subtotal').text(response.gtprice);
                    // var abc1 = thisClick.parents('.shoppingcart-content-section').find('.gross_total').text(response.stprice);
                    var abc2 = thisClick.parents('.shopping-cart-details').find('.subtotal')
                        .text(response.gtprice);
                    var abc2 = thisClick.parents('.shoppingcart-content').find(
                        '.gross_total').text(response.stprice);
                    var abc2 = thisClick.parents('.shopping-cart-details').find(
                        '.qty-input').text(response.quantity);

                    // console.log($(this).parents('.quantity').find('.qty-input'));

                    // console.log(abc2);
                    // window.location.reload();
                    // alertify.set('notifier','position','top-right');
                    // alertify.success(response.status);
                    // Toastr.success(response.status);
                }
            });
        });

    });


    $(document).ready(function () {

        $('.delete_cart_data').click(function (e) {
            // alert("Hello");
            e.preventDefault();

            var product_id = $(this).closest(".cart-details").find('.product_id').val();
            // console.log(product_id);

            var data = {
                '_token': $('input[name=_token]').val(),
                "product_id": product_id,
            };

            // $(this).closest(".cartpage").remove();

            $.ajax({
                url: '/carts/delete',
                type: 'DELETE',
                data: data,
                success: function (response) {
                    window.location.reload();
                }
            });
        });

    });

    // Najmul Ovi
    function decreaseQty(cart_id, u_price, pid) {
        var qty = jQuery('#qty' + cart_id).val();
        if (qty > 1) {
            qty--;
            jQuery('#qty' + cart_id).val(qty);
            add_to_mycart(pid, -1);
            var u_price = parseInt(u_price);
            var g_total = jQuery('#gross_total').html();
            var gross_total = parseInt(g_total) - u_price
            jQuery('#total_price_' + cart_id).html(qty * u_price);
            jQuery('#gross_total').html(gross_total);
        }
    }

    function increaseQty(cart_id, u_price, pid) {
        var qty = jQuery('#qty' + cart_id).val();
        qty++;
        jQuery('#qty' + cart_id).val(qty);
        add_to_mycart(pid, 1);
        var u_price = parseInt(u_price);
        var g_total = jQuery('#gross_total').html();
        var gross_total = parseInt(g_total) + u_price
        jQuery('#total_price_' + cart_id).html(qty * u_price);
        jQuery('#gross_total').html(gross_total);
    }

    function deleteCartData(cart_id, pid) {
        jQuery('#qty').val(0)
        add_to_mycart(pid, 0);
        jQuery('#cart_box' + cart_id).hide();
    }


    function add_to_mycart(id, qty) {
        jQuery('#add_to_cart_msg').html('');

        jQuery('#product_id').val(id);
        jQuery('#pqty').val(qty);
        jQuery.ajax({
            url: '/add_to_cart',
            data: jQuery('#frmAddToCart').serialize(),
            type: 'post',
            success: function (result) {
                if (result.totalItem == 0) {
                    jQuery('#cart-val').html('0');
                    jQuery('#cart-menu').remove();
                    location.reload();
                } else {
                    jQuery('#cart-val').html(result.totalItem);
                }
                // location.reload();
            }
        });
    }

</script>

<input type="hidden" id="qty" value="1" />
<form id="frmAddToCart">
    <input type="hidden" id="pqty" name="pqty" />
    <input type="hidden" id="product_id" name="product_id" />
    @csrf
</form>
@endsection
