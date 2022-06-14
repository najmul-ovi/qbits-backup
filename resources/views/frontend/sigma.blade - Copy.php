@extends('frontend.layouts.master')
@section('title','Sigma')
@section('content')
<section class="sigma-middle-menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="col-sm-2">
                    <div class="sigma-logo">
                        <a href="#">Sigma</a>
                    </div>
                </div>
                <div class="col-sm-10">
                   <div class="sigma-menu-right d-flex justify-content-end">
                       <ul>
                            <li><a style="color: #CCCCCC;" href="#">Overview</a></li>
                            <li><a href="#">Tech Specs</a></li>
                            <li><a href="#">Drivers</a></li>
                            <li><a href="#" class="buy-button">Buy</a></li>
                       </ul>
                   </div>
                </div>
            </nav>
        </div>
    </div>
    <div id="search-section" class="clearfix">
        <form id="searchformsection" method="get" action="searchpage.php">
            <input type="search" class="form-control" name="s" id="search" placeholder="Search here for what you need?" autocomplete="off">
        </form>
    </div>
</section>

<div class="sigma-mobile-middle-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="sigma-menu-content">
                        <div class="sigma-logo">
                            <a href="#">Sigma</a>
                        </div>
                            <div class="sigma-menu-right">
                                <ul>
                                    <li><a href="#"><i class="fas fa-angle-down"></i></a></li>
                                    <li><a href="#" class="buy-button">Buy</a></li>
                                </ul>
                            </div>
                    </div>

                    <div class="sigma-middle-menu-list">
                       <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Tech Specs</a></li>
                            <li><a href="#">Drivers</a></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="spacer s0" id="trigger"></div> -->
<section class="scrolling-slider-area">
    <div class="intro" id="intro">
       <img id="image" src="frontend/sigma/83/0001.jpg" alt="">
    </div>
</section>

<section class="sigma-mobile-slider-area">
    <div class="sigma-intro">
       <img id="image" src="frontend/assets/images/mobile/sigma-mobile.png" alt="">
    </div>
</section>

<section class="innovation-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <div class="innovation">
                <h1>Built for Creation and Excelled Innovation</h1>
                    <p>Qbits brand has built Sigma 15 with powerful tools to boost up your workstation. Crafted with superfast boosting processors of intel, high quality graphics and massive storage for providing you with the most demanding working experience. An immersive Full HD IPS display, Qbits enhanced keyboard, and advanced audio and video capabilities, making it a perfect workspace for the creation and excelled innovation.</p>
               </div>
            </div>
        </div>
    </div>
</section>

<section class="processor-section">
   <div class="container">
       <div class="row">
           <div class="col-sm-12">
               <div class="processor">
                   <div class="processor-heading">
                       <img src="frontend/sigma/chip.png" alt="Sigma Laptop"> 
                       <h1>10th Generation Intel® Core™ Processor</h1>
                   </div>
                   <p>Experience superfast processing speed and exceptional performance with 10th generation Intel® core™ i5, 1.10 GHz to 3.70 GHz, 6MB intel® smart cache.</p>
               </div>
           </div>
       </div>
   </div>
</section>


<section class="ram-section">
   <div class="container">
       <div class="row">
           <div class="col-sm-12">
               <div class="ram">
                   <div class="ram-heading justify-content-end">
                       <img src="sigma/Ram 1.png" alt="Sigma Laptop" class="mobile-ram-image">
                       <h1>Dual Channel DDR4 3200MHz RAM </h1> 
                       <img src="frontend/sigma/Ram 1.png" alt="Sigma Laptop" class="desktop-ram-image">
                   </div>
                   
                   <p>8GB DDR4 RAM for optimized performance, higher DIMM capacities with MAX 64GB, improved data integrity, faster start-up times, lower power consumption.</p>
               </div>
           </div>
       </div>
   </div>
</section>

<section class="display-area">
    <div class="container">
        <div class="row">
           <div class="col-sm-12">
               <div class="display-details">
                    <h1>Immersive Slim Edge IPS Display</h1>
                    <p>Immerse yourself and enjoy crisp and vibrant colors on a slim edge Full HD IPS display. Qbits Sigma offers an exceptional viewing experience with a nearly bezel-free display, making it ideal for big-screen fans. Experience the best views around and see your screen clearly in any setting. Images take on new levels of detail and realism in this gorgeous display.</p>
               </div>
           </div>
       </div>

       <div class="row">
            <div class="col-sm-12">
                <div class="display-mobile-image">
                    <img src="frontend/sigma/High quality/mobdis.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="display-menu">
                    <ul>
                        <li>
                            <span class="desplay-list-heading">18mm</span><br>
                            <span class="desplay-list-info">18mm slim<br> Edge Bezel</span>
                        </li>

                        <li>
                            <span class="desplay-list-heading">96%</span><br>
                            <span class="desplay-list-info">Screen to<br> Body Ratio</span>
                        </li>

                        <li>
                            <span class="desplay-list-heading">15.6"</span><br>
                            <span class="desplay-list-info">UHD IPS<br> Display</span>
                        </li>

                        <li>
                            <span class="desplay-list-heading">1000:1</span><br>
                            <span class="desplay-list-info">Contrast</span>
                        </li>

                        <li style="margin-right: 3px !important;">
                            <span class="desplay-list-heading">170&#xb0;</span><br>
                            <span class="desplay-list-info">Wide Angle</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="display-image">
                   <img src="frontend/sigma/High quality/desdis.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="classy-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <div class="classy-content">
                    <h1>Classy, Slim, and Ultraportable</h1>
                    <p>Qbits Sigma is more portable than ever. It is sleek, classy, and lightweight yet incredibly compact. A perfect laptop for individuals who are on the go.  So, create, learn, work and stream from anywhere at any time. This ultra-portable and slim laptop will enable you to explore more, no matter where you go, the Qbits sigma keeps you connected.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="classy-menu">
                        <ul>
                            <li>
                                <img src="frontend/sigma/icons/1.png" alt=""><br>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/2.png" alt=""><br>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/3.png" alt=""><br>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/4.png" alt=""><br> 
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/5.png" alt=""><br> 
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/6.png" alt=""><br>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/7.png" alt=""><br>  
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="mobile-classy-menu">
                        <ul>
                            <li>
                                <img src="frontend/sigma/icons/sound.png" alt=""><br>
                                <p>SOUND</p>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/lan.png" alt=""><br>
                                <p>LAN</p>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/hdmi.png" alt=""><br>
                                <p>HDMI</p>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/usb2.png" alt=""><br>
                                <p>USB 2.0</p>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/usbc3.png" alt=""><br>
                                <p>USB-C 3.0</p>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/usb3.png" alt=""><br>
                                <p>USB 3.0</p>
                            </li>

                            <li>
                                <img src="frontend/sigma/icons/charging.png" alt=""><br>
                                <p>CHARGING</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="classy-image">
                    <img src="frontend/sigma/new/classy.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="mobile-classy-image">
                    <img src="frontend/assets/images/mobile/mobile-classy.png" alt="">
                </div>
            </div>
        </div>
    </div>
 
</section>

<section class="architecture-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="architecture-content">
                    <h1>Advanced Thermal Architecture</h1>
                    <p>The thermal architecture of Sigma has been designed to keep the laptop temperature always in between the safe range even if it's running at max load with a large heatsink for optimal airflow and more heat dispersion. The resulting gain in cooling capacity ensures a premium experience with long-lasting performance in the years to come.</p>
                    <img src="frontend/sigma/new/Spin-3sec.gif" id="refresh" alt="">
                      <i class="fas fa-redo-alt refresh-icon"></i>
                      <button id="refresh-btn" onlick="refreshDiv();">Reply</button>
                      <!-- <a href="#" id="refresh-btn" class="refresh-btn">Reply</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="performace-section">
    <div class="container">
        <div class="row">
            <div class="performance">
                <div class="col-sm-12">
                    <div class="performace-details">
                    <h1>Blazing Fast Speed and Power</h1>
                    <div class="col-sm-6">
                        <p>Qbits Sigma 15 has been built for blazing fast speed that sets it apart from rivals. At the core, it features the latest Intel® Core™ i3, i5, i7 processor with Intel® Iris® Plus/Intel® UHD Graphics, 8GB of RAM, and supports up to 64GB. <br> <br>What’s more, It also has 512GB of NVMe SSD storage for high read-write and prompt boot time with low latency. Provide the performance you need for your daily computing tasks. From big project work to high-quality photo or video editing and usual gaming, all will be done with the power of breeze.</p>
                    </div>
                    <div class="col-sm-6">
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="productivity-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <div class="productivity-details">
                   <h1>Unrelenting Productivity</h1>
                    <p>Qbits Sigma is equipped with a full-fledged backlit keyboard and a strong single piece design that provides excellent performance. The extended layout with comfortable mechanical keys provides a smooth operation. The ergonomically built-in keyboard offers the optimum typing experience. It's even better with the backlight on! The precision touchpad has been intelligently built for optimal comfort and accuracy, ensuring speedier navigation in any situation.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 ml-0">
                <div class="mobile-productivity-image">
                   <img src="frontend/assets/images/mobile/productivity.png" alt="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="productivity-menu">
                    <ul>
                        <li>
                           <img src="frontend/sigma/icons/8.png" alt=""><br>
                        </li>

                        <li style="padding-top: 10px;">
                           <img src="frontend/sigma/icons/9.png" alt=""><br>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 ml-0">
                <div class="productivity-image">
                   <img src="frontend/sigma/new/tbrender_007.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-touch-section">
    <div class="container">
        <div class="row">
            <div class="single-touch">
                <div class="col-sm-12">
                    <div class="touch-details">
                        <div class="col-sm-5">  
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-5">
                            <div class="finger-touch">
                                <h1>Access in a Single Touch</h1>
                                <p>Qbits create versatile features for improved user experience. No need to remember a password every time you log in, built-in fingerprint sensor in the touchpad makes it easier and more secure to access. </p>
                                <img src="frontend/sigma/Fingerprint.png" alt=""><br><br>
                                <span class="finger-sensor">Fingerprint Sensor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="mobile-finger-touch">
                    <img src="frontend/assets/images/mobile/mobile-touch.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <img class="hand" src="frontend/sigma/hand.png" alt="">
</section>


   <script>
        $(document).ready(function() {
            $(".search-btn").hover(function(e) {
                $("#search-section").fadeIn("active");
            });
        });
        $("#search-section").on("mouseleave", function(){
            $(this).fadeToggle(400);
        }); 

        $(document).ready(function() {
            $(".fa-angle-down").click(function() {
                $(".sigma-middle-menu-list").toggle();
            });
	   }); 

       $(document).ready(function() {
            //     $("#refresh-btn").click(function () {
            //         $("#refresh").load("sigma.php #refresh");
            // });

            $("#refresh-btn").click(function () {
                location.reload("#refresh");
            });

            $(".refresh-icon").click(function () {
                location.reload("#refresh");
            });
	   });

            // $('#refresh-btn').on('click', function(event) {
            //     event.preventDefault();
            // });

    //         $(".refresh-icon").click(function () {
    //             $('#refresh').load(location.href + "refresh");
    //         });
	//    }); 
       
    //    function refreshDiv(){
    //        $('#refresh').load(location.href + "#refresh");
    //    }

        //   function refreshDiv(){
        //   window.location.reload();
        // } 

        function removePadding() {
      document.querySelector(".scrollmagic-pin-spacer").style.paddingBottom = null;
}
</script>


 <!-- footer section -->
 @include('frontend.partials.home')
 
@endsection



