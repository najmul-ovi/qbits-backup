@extends('frontend.layouts.master')
@section('title','Qbits')
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
                        <a href="{{ route('contact')}}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>
<div class="qbits-menu-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center">We will offer 10% off. <a href="">*Click for code</a></p>
            </div>
        </div>
    </div>
</div>

<section class="privacy-slider-section">
    <img src="{{ asset('frontend/assets/images/return-policy.png') }}" alt="" class="img-fluid">
</section>

<div class="privacy-page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="privacy-content">
                    <h3 style="text-align: center; padding-top: 60px !important; margin-bottom: 40px;">Return Policy</h3>
                    <h3>Cancellation and Return</h3>
                    <p>Qbits always make life easier, we ensure a 100% customer satisfaction guarantee. If the customers are not satisfied with our product, we offer an easy and hassle-free return and replacement or repair for damaged or wrong delivery that is covered by our return policy.</p>
                    <h3>Order Cancellation</h3>
                    <p>For canceling an order Qbits customers need to contact the support center or you may cancel an order directly through the order detail pages. A cancellation request will be accepted if it is found eligible after being reviewed and verified by our expert team. No order will be canceled that has already been shipped or received. </p>
                    <h3>Return Policy</h3>
                    <p>If the customer purchases from our shop, the customer will be responsible to check. If there is any defect/error on the product or the parts used to manufacture, the return request will not be accepted. In this case, the customer will be provided with a warranty service covered by warranty policy.<br>
                        If the customer purchases from Qbits online store and finds any manufacturing defect or imperfection, customers are advised to submit a return request within 24 hours.<br>
                        If any problem or error is not reported to the Qbits support center within 24 hours, it will be entitled to the warranty policy.  The return product should be sent to Qbits Store within 5 working days from the date of  delivery.<br>
                        Qbits will be responsible for the wrong shipment by the Qbits Online Store. Return will be accepted if it is found eligible after verifying.<br>
                        In case of an incorrect order placed by a customer, Qbits will not be responsible after having been shipped. <br>
                        The customer must send the return with its original package all inbox literature, warranty/ guarantee card, freebies, and accessories including mice, keyboards, etc. The package should be unopened with the original sticker.<br>
                        Customers will be responsible for return shipping and handling fees and any applicable restocking fees.<br>
                        In case shipped orders, 50% of the return charge will be applied for inside Dhaka city and <br>
                        for outside Dhaka city, a 100% return charge will be applied.<br>
                        If there is damage, scratched, or missing major, the customers are advised to report to the respective courier. If the customer receives any product damaged during the transaction Qbits will not be responsible in this case.<br>
                    </p>
                    <h3>How will I return a Product?</h3>
                    <p>1. Contact with the seller Center of Qbits online Store.<br>

                        2. Make a return request within 24 hours through the order details page. <br>
                        
                        3. Provide the detailed information such as - Product model, Serial number, Product number.<br>
                        
                        4. Report the problems in detail.</p>
                    <h3>Refund Policy</h3>
                    <p>If the product does not work properly or any manufacturing defect is reported from the day of receiving the product, customers are suggested to bring it back to the Qbits store. After verifying the issues payment will be refunded within 30 days. </p>
                </div>
            </div>
        </div>
    </div>
</div>







{{-- <section class="immense-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <div class="immense">
                <h1>Immense Power Yet Incredibly Simple</h1>
                    <p>Qbits introduces premium quality laptops with top level performance at affordable prices. Built to power your computing challenges for years to come.</p>
               </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <div class="qbits-slider-section">
    <div class="container">
        <div class="slider-text">
            <p class="slider-heading">Immense Power Yet Incredibly Simple</p>
            <p class="slider-details">Qbits introduces premium quality laptops with top level performance at affordable prices. Built to power your computing challenges for years to come.</p>
        </div>
    </div>
</div> --}}








 

 <script>
   
    
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    

 </script>

@endsection