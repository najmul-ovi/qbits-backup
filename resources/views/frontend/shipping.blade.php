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
    <img src="{{ asset('frontend/assets/images/shipping.png') }}" alt="" class="img-fluid">
</section>

<div class="privacy-page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="privacy-content">
                    <h3 style="text-align: center; padding-top: 60px !important; margin-bottom: 40px;">Shipping Policy</h3>
                    <h3>Shipping Information</h3>
                    <p>We understand how important it is for you to receive your merchandise quickly and reliably from Qbits. The Qbits team is committed to make the shipping process as simple as possible for their consumers. Qbits Delivery promises faster delivery by allowing for simple and stress-free processing at your preferred time and location. There are two types of approaches to choose from, they are inside Dhaka city or outside Dhaka city.</p>
                    <h3>Delivery Service</h3>
                    <p>Qbits ensures faster delivery through easy processing in your desired location/time. Inside Dhaka city, we assure delivery within 48 hours and outside Dhaka city, Qbits Delivery service delivers within 5 working days upon completing the purchase.</p>
                    <h3>Delivery Process</h3>
                    <p>Qbits delivers online ordering products via courier throughout the country. One of the logistics carriers listed below will deliver your Qbits package</p>
                    <ul>
                        <li>E-Desh</li>
                        <li>Pathao</li>
                        <li>Shop up</li>
                    </ul>
                    <p>Qbits guarantees speedier delivery by those easy and quick processing systems. The Qbits delivery management team is committed to providing you with the best experience possible while delivering a laptop.</p>
                    <h3>Free Delivery</h3>
                    <p>For Dhaka city, Qbits provides free shipping.  For outside Dhaka, the delivery charge is applicable subject to the delivery payment policy.</p>
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