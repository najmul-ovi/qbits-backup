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

<section class="shoppingcart-content-section">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form class="form" action="{{route('carts.update_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="shoppingcart-content">
                <h3>Shopping Cart</h3>
                  <div class="row">
                      <div class="shopping-cart-details">
                          <div class="col-sm-8">
                            <div class="shoppingcart-des-content">
                                <div class="shopping-cart-image">
                                    <img src="{{ asset($products->galary_photo) }}" class="img-fluid" alt="">
                                </div>
                                <div class="shopping-cart-des" style="width: 57% !important;text-align:justify;">
                                    <p>{{ $products->description }}</p>
                                    <td class="cart-product-quantity" width="130px">
                                        
                                        <div class="input-group quantity" style="width: 30% !important;margin-left:18px;">
                                            <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                                                <span class="input-group-text">-</span>
                                            </div>
                                            <input type="text" class="qty-input form-control" maxlength="2" max="10" value="1">
                                            <input type="hidden" class="unit_price form-control"  value="{{$products->id}}">
                                            

                                            <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer">
                                                <span class="input-group-text">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <i class="fa-solid fa-trash"></i> --}}
                                    <p class="model">Model : {{$products->sku}}</p>
                                </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="order-summery">
                                  <p>Order Summery</p>
                                  <div class="row">
                                      <div class="col-xs-12">
                                          <div class="order-summery-list">
                                            <input type="hidden" class="product_id" value="{{ $products->id }}" >
                                              <ul>
                                                  <li>Unit Price:  <span class="list-value unit_price"> ৳{{$products->unit_price}}</span></li>

                                                    @php
                                                        $array = App\Models\Cart::where('product_id',$products->id)->first();
                                                    @endphp


                                                  <li>Quantity:  <span class="list-value qty-input"> X {{$array->default_quantity}} PC/S</span></li>
                                                  <input type="hidden" class="hidden-qty-input" name="hidden-qty-input" value="135" >
                                                  <li>Subtotal:   <span class="list-value subtotal">৳{{$products->unit_price * $array->default_quantity}}</span></li>
                                                  <li>Shipping Cost:  <span class="list-value">৳50</span></li>
                                                  <li style="font-weight: 600;">Gross Total: <span class="list-value gross_total">৳{{$products->unit_price * $array->default_quantity + 50}}</span></li>
                                              </ul>
                                          </div>
                                      </div>
                                 </div>
                             </div>    
                          </div>
                      </div>

                      {{-- <button style="display:flex;justify-content: center" type="submit" class="btn btn-success">{{ ('Process to Checkout ') }}</button> --}}

                      <a href="{{ route('checkout',$products->id)}}" class="btn process-check-btn" style="text-align:center;">Process to Checkout</a><br/>
                          <a href="" class="btn continue-shopping-btn">Continue Shopping <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                  </div>
            </div>
            </form>
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

    $(document).ready(function () {

$('.increment-btn').click(function (e) {
    e.preventDefault();
    var incre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(incre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }

});

$('.decrement-btn').click(function (e) {
    e.preventDefault();
    var decre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(decre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
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

    var quantity = $(this).parents('.quantity').find('.qty-input').val();
    console.log(quantity);
    var product_id =$(this).parents('.quantity').find('.unit_price').val();  

    console.log(product_id);

    var data = {
        '_token': $('input[name=_token]').val(),
        'quantity':quantity,
        'product_id':product_id,
    };

    $.ajax({
        url: '/carts/update',
        type: 'POST',
        data: data,
        success: function (response) {
            console.log(response.gtprice);
            var abc = thisClick.parents('.shoppingcart-content-section').find('.subtotal').text(response.gtprice);
            var abc1 = thisClick.parents('.shoppingcart-content-section').find('.gross_total').text(response.stprice);
            var abc2 = thisClick.parents('.shoppingcart-content-section').find('.qty-input').text(response.quantity);

            console.log(abc2);
            // window.location.reload();
            // alertify.set('notifier','position','top-right');
            // alertify.success(response.status);
        }
    });
});

});





   

</script> 
 
@endsection



