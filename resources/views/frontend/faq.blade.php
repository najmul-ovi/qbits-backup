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
    <img src="{{ asset('frontend/assets/images/faq.png') }}" alt="" class="img-fluid">
</section>

<div class="privacy-page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="privacy-content">
                    <h3 style="text-align: center; padding-top: 60px !important; margin-bottom: 40px;">FAQ</h3>
                    <h3>How do I check my order status?</h3>
                    <p>To check your order status,   please contact our support center.</p>
                    <h3>Can I change the shipping address on my order?</h3>
                    <p>Qbits does not make any change once the order is placed. Before placing an order make sure you have provided your desired address.</p>
                    <h3>What payment methods does Qbits accept?</h3>
                    <p>We accept Credit or Debit Card, VISA, Master Card, DBBL Nexus, Cash Transactions</p>
                    <h3>How can I register my laptop?</h3>
                    <p>If you purchased a Qbits, go to the product registration page of our website and enter your verified email and serial number of your laptop.</p>
                    <h3>How long does Qbits laptop have a warranty? </h3>
                    <p>We offer a 2-year limited hardware warranty.</p>
                    <h3>How can I check my laptop warranty? </h3>
                    <p>To check your laptop warranty go to your website, enter your serial number, and check your warranty status. Or you can contact our support center.</p>
                    <h3>Where can I buy Qbits products?</h3>
                    <p>Shop either on our physical store or online store.</p>
                    <h3>What is the coverage of the warranty policy?</h3>
                    <p>The authorized service provider provides immediate service for any defect in the parts/components that are covered by the warranty policy.</p>
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