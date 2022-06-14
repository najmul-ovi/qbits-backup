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
    <img src="{{ asset('frontend/assets/images/privacy-banner.png') }}" alt="" class="img-fluid">
</section>

<div class="privacy-page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="privacy-content">
                    <h3 style="text-align: center; padding-top: 60px !important; margin-bottom: 40px;">Qbits Privacy Policy</h3>
                    <p>Qbits's Privacy Policy manifests how Qbits collects, protects, uses, and shares personal data provided by the website users. We are committed to the privacy of our visitors. The privacy policy is designed to clarify explicitly how we disclose, transfer, and store your information. This Privacy Policy includes all the types of information that is collected and recorded by Qbits.</p>
                    <p>This Privacy Policy statement acknowledges the fundamental human rights, privacy protection and personal data security. We strive to comply with legal entities, business processes, with all applicable laws on privacy and consistent, rigorous policies and procedures.</p>
                    <p>The privacy of users is a priority. We collect and store personal data lawfully and in a fair manner  with utmost transparency. We only collect and process data when it is absolutely necessary for the legitimate purposes of operating our business, advancing innovation, and providing an improved customer experience.</p>
                    <h3>How Do We Collect Data?</h3>
                    <p>The personal data that Qbits collects depends on the customer's interaction with Qbits products and services. We collect information provided by you while ordering or registering your product on our site. When you browse our site or receive customer support services, we collect only the data that we need for specific purposes, understanding your interest and improving your experience.</p>
                    <h3>How Qbits Uses Data?</h3>
                    <p>Qbits may use your personal data to advance our services, to enhance the quality of Qbits products, to provide premium user experience, to communicate with you for security and fraud prevention.</p>
                    <p>To help you up with delivery services assisting you in completing transactions and giving updates about the shipment facilitating repairs and returns as well as with the issue of invoices.</p>
                    <p>Qbits collect data to improve our offerings, for auditing surveys or data analysis. Your daily activities and the activity results will be stored and analyzed to power our services.</p>
                    <p>We collect data and scrutinize your question, interest, and request to provide you with comprehensive customer support services and to fulfill your product repair requests.</p>
                    <p>To process and fulfill your Qbits product registration you have signed up for and to keep you up to date with the latest technologies, news, promotions, and upcoming events. We collect information to administer your account and process shipment.</p>
                    <p>To communicate with you by maintaining accurate contact and registration data. We also use your data to personalize your experience and communications you receive to deliver comprehensive services by creating recommendations based on your use of Qbits Services.</p>
                    <p>To provide you with improved performance and operation of our products, personalized marketing services, solutions, and support, including warranty support.</p>
                    <h3>Do We Use Cookies</h3>
                    <p>Qbits Uses Cookies to store information about your preferences and interests as you interact with Qbits services. The information is used for various purposes including optimizing the users’ experience by customizing our web page content based on visitors’ browser type, authentication, session monitoring, storage of information on specific configurations regarding users accessing the server, storage of preferences, etc.</p>
                    <h3>Privacy and Security </h3>
                    <p>Qbits always guarantee privacy and security with heightened priority. We strive to ensure the protection of personal information from unauthorized access, alteration, disclosure, or destruction. To make sure your personal data is secure we take precautions and conduct internal reviews of our data collection, storage, and processing practices and technical and organizational security measures to protect your personal data and manage customers' privacy.</p>
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