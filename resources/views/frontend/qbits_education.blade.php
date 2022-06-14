@extends('frontend.layouts.master')
@section('title','Qbits-Education')
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
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/education.png') }}" alt="qbits-banner md. saiful islam">
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
                        <p style="color: #A0A0A5;font-weight:bold">An Inspiring Journey to Excellence</p>
                        <p style="color: #A0A0A5;">Explore excellence beyond the limits. Qbits technology and resources are designed to create diverse learning opportunities. Every individual is different and has their own ideas - Qbits laptops help build independent and creative thinkers, with their own purpose. Built tools for education that inspires - for every student and enthusiastic learner.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Global Academic Experience</p>
                        <p style="color: #A0A0A5;">Better learning shapes the future. Qbits laptops have been built for young minds to unlock their potential. Let you experience the differences. We developed the technology the way you learn best. Explore and learn cultural diversity and share uncommon excellence of thought. Qbits tech turns the world into a modern, global school for a modern, global academic experience.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Revolutionary Way to Educate </p>
                        <p style="color: #A0A0A5;">Turn the school into a modern classroom. Engage your student in creative work, research and conduct experiments using the best technology for the best outcome. Let them learn through discovery. Incredibly powerful tools help staff and faculty to create a success-oriented learning environment for students to experience the challenges for the changing world and to discover the best possible solutions. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Educational Innovation</p>
                        <p style="color: #A0A0A5;">Qbits technology keeps students ahead of the curve. Set up an institution with the best laptops and discover how technology in learning boosts student outcomes. The intuitive tools with power flexibility help staff and faculties creating collaboration and amazing classroom experiences and students to innovate all things possible.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Integrating technology into your lesson plans can make a significant impact in the classroom while teaching. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Powerful. Smart.Unstoppable </p>
                        <p style="color: #A0A0A5;">Deliver the power to be your best. Do your innovative projects, timely research, assignments, and presentations. Qbits technology keeps you unstoppable and seamless. So you can focus on what matters most.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Remote Learning </p>
                        <p style="color: #A0A0A5;">Explore the universe and learn about diverse cultures from anywhere. Qbits technology has you connected to the world. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Remote Learning Works Best on Qbits</p>
                        <p style="color: #A0A0A5;">Without a good laptop, you can't get through school or college nowadays. Remote learning is the beginning of a revolutionary way to educate students. When all of the machine's gears are turning smoothly and efficiently, remote learning works best. Qbits offers a laptop you can count on for your journey to excellence. We have the best laptops to use in a distance learning setting. Our laptops are designed to last a long time, making them a good choice. You can use the laptop not only at home, but also in college, graduate school, or your future job. The ideal opportunity for learners to study, explore, and even change the world.</p>
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