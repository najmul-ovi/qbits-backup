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

<div class="qbits-slider" style="margin-bottom: 60px;">
    <div class="">
            <div class="">
                <div class="">
                <div class="">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/about_us.png') }}" alt="qbits-banner md. saiful islam">
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
                        <p style="color: #A0A0A5;font-weight:bold">Why Qbits?</p>
                        <p style="color: #A0A0A5;">Qbits is a developing computer technology company in Bangladesh, which begins its journey with an aspiration to provide you with accessibility to the best technology. We keep inventing and reinventing for the changing world to ensure an improved experience. We dream, we take challenges to create extraordinary tools that make life easier and better and leave you with endless possibilities.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Who We Are?</p>
                        <p style="color: #A0A0A5;">We are an innovative team influenced by an ambition to make a revolutionary impact for a sustainable future. Powered by Intellect, driven by values to create powerful technology - to redefine what is possible, - to drive human progress, - to move the world forward. We explore challenges for the best possible solutions. Blend unique thought excellence to invent technology that drives social and economic progress. We make technology work for you through innovation and reinvention for changing the world. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Our Goals </p>
                        <p style="color: #A0A0A5;">We are driven by a dream to create wonderful technologies that function as a bridge between your goals and accomplishment. The universe has changed immensely. We are committed to the future and always in exploration to develop a revolutionary device for the changing world that delivers incredible experiences.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Build Technologies that Transform People’s Lives</p>
                        <p style="color: #A0A0A5;">We strive to create technology that excels human life. We take sustainability initiatives to engineer amazing tools that make life easier, faster, and better for every individual. Our diverse team is continuously working together to transform people's lives with technology, values, and purpose, to reinvent the future through transformative technologies. We invent devices that are increasingly faster, more portable, and higher-powered ever than before - sure to amaze, delight, and inspire.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">We Believe in Equity</p>
                        <p style="color: #A0A0A5;">We believe everybody is incredibly brilliant and has immense power. All should have access to the best technology for better outcomes and socio-economic development. We are committed to equal opportunities, trust, and advocacy for everyone. We built technologies within an affordable price range for every brilliant young mind. We invent and reinvent tools that are more equitable, inclusive, and sustainable for all. So they can explore their own ingenious ideas, create, and flourish their extraordinary capabilities to make the world a better place.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color:#1D1D1F;padding:20px;font-size:22px;margin-bottom:20px;">
                    <div class="card-body">
                        <p style="color: #A0A0A5;font-weight:bold">Ethics. Transparency. Accountability</p>
                        <p style="color: #A0A0A5;">Qbits conducts business with ethical practices and compliances. We are committed to transparency, accountability, and corporate business principles. We firmly established the principles with fairness, honesty, and ethical values. Our business conduct and compliance reflect ideas on how we conduct business, how we put our values into activities every day. All the business policies comply with all applicable legal requirements while maintaining the utmost transparency.</p>
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