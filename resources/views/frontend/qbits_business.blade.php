@extends('frontend.layouts.master')
@section('title','Qbits-Business')
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
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/banner.png') }}" alt="qbits-banner md. saiful islam">
                </div>  
            </div>
        </div>
    </div>
</div>

{{-- <div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center" style="color: white;font-size:22px;">We’re here for you</p>
                <p class="text-center" style="color: white;font-size:57px;">Contact Qbits Care</p>
            </div>
        </div>
    </div>
</div> --}}

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Your Business Team Always Ready to Help</p>
                        <p style="color: #A0A0A5;">Your passion is our satisfaction and we believe in Service. Our support team is always ready to provide you with incredible services. Get the Best Service, Right Time, Right People. They will help you to find the best financing option, special pricing, and offers. Tell you which is why you make your investment.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Qbits at Work</p>
                        <p style="color: #A0A0A5;">Most Powerful tools allow you to work simply better. Give a big boost to your workstation, run your business all the more-better and collaborate with your team like a pro. Qbits at work just make things easier. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Keep Productivity Seamless </p>
                        <p style="color: #A0A0A5;">Discover potentiality, protect your investment, solve business challenges, and stay focused on reinventing your business. Qbits space saver laptops are made for 48-hour work in a week and will support your business needs. And it’s all compatible with apps from Microsoft and Google, so your team has everything it needs to get any job done to make the business profitable.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Make An Excellent Investment</p>
                        <p style="color: #A0A0A5;">Choosing the best laptop for business is a significant decision. After all, you need something that is long-lasting, secure, powerful, light, and capable of lasting through a long workday—and you have a lot of choices. You can count on Qbits for this process of decision-making. We  offer the best business laptops that can get all the job done. Our laptops are built to last for a long time, making them an excellent investment. After purchasing our products, create an account on our website and stay in touch with us for incredible support and services.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Qbits Match to Your Style </p>
                        <p style="color: #A0A0A5;">Work with style with the best laptops for maximum productivity and effortless multitasking. Solve your business problems efficiently, Qbits laptops let you get through a full working day — and beyond.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Your Ultimate Workstation </p>
                        <p style="color: #A0A0A5;">Let you do what you need to do. The ultimate platform for doing big and creative work. Qbits laptops combine surprisingly powerful performance and flexibility, allowing your team to collaborate instantly -  like never before. Make content-sharing and presentations easy and effective.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Be the Leader and Solve Problems More Creatively. Manage Your Business Like a Boss. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Get Prompt Support from Qbits</p>
                        <p style="color: #A0A0A5;">At no additional charge, we can help you choose the correct hardware and devices and find financing choices that meet your budget. Support from Qbits is available whenever your company requires assistance.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Service Truly Different</p>
                        <p style="color: #A0A0A5;">Having constant access to technology and support is a must. It's impossible to predict when things will go wrong. The Qbits team is yours, Get more reliable, satisfactory, and prompt support and services for the business. We are here to make sure that your device is running smoothly!</p>
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