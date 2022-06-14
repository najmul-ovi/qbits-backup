@extends('frontend.layouts.master')
@section('title','Contact')
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

<div class="qbits-slider" style="margin-bottom: 60px;">
    <div class="">
            <div class="">
                <div class="">
                <div class="">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/banner1212.png') }}" alt="qbits-banner md. saiful islam">
                </div>  
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center" style="color: white;font-size:22px;">We’re here for you</p>
                <p class="text-center" style="color: white;font-size:57px;">Contact Qbits Care</p>
            </div>
        </div>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Message us</p>
                        <p style="color: #A0A0A5;">Get support from Qbits experts and Qbits care<br>
                            pros, 24 hours a day, 7 days a week.</p>
                        <p style="color: #A0A0A5;margin-top:40px;font-weight:bold;font-weight:bold">Chat with us</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="background-color:#1D1D1F;padding:16px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Help with your order</p>
                        <p style="color: #A0A0A5;">Get assistance or track your order status</p>
                        <p style="color: #A0A0A5;margin-top:80px;font-weight:bold">Order Help</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Find us on social media</p>
                        <p style="color: #A0A0A5;">Like, connect and follow on us Instagram or Facebook<br> and stay informed of the latest updates, and special<br> offers.</p>
                        <p style="color: #A0A0A5;margin-top:40px;font-weight:bold;font-weight:bold">Chat with us</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="background-color:#1D1D1F;padding:16px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Ask the community</p>
                        <p style="color: #A0A0A5;">Browse answers, ask questions and get<br>solutions from other Qbits customers.</p>
                        <p style="color: #A0A0A5;margin-top:80px;font-weight:bold">Join discussion</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Give us a call</p>
                        <p style="color: #A0A0A5;">Speak directly with a Qbits or schedule a time for us to call you. Qbits is working to support you and <br>
                            keep our staff safe. Because of this, our phone hours of operation have changed.
                            </p>
                            <p style="color: #A0A0A5;font-weight:bold">Mobile support</p>
                            <address style="color: #A0A0A5;">
                                <strong>8 AM - 12 AM Daily</strong><br>
                                T & Computing Support<br>
                                8 AM - 9 PM, Mon, Thru, Fri<br>
                                Closed Sunday<br>
                                <abbr title="Phone">02-58055541</abbr><br>
                                <abbr title="Phone">00-000-000</abbr><br>
                                <abbr title="Phone">00-000-000</abbr><br>
                              </address>
                    </div>
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