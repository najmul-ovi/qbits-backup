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
                            <li><a href="{{ route('tech_spec') }}">Tech Specs</a></li>
                            <li><a href="{{ route('driver') }}">Drivers</a></li>
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
                            <li><a href="{{ route('tech_spec') }}">Tech Specs</a></li>
                            <li><a href="{{ route('driver') }}">Drivers</a></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="tech-spece-area">
    <div class="container">
        <div class="row">
           <div class="col-sm-12">
               <div class="tech-details">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Series</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">Sigma 15</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Model</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">S15-631G</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300;width:31%;">S15-613G</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300;width:24%;">S15-5F5G</th>
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Price</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">৳120,000<br><br><span style="background-color: #1486F9;border-radius: 50px;font-size: 14px;padding: 8px 25px;color: #fff;font-weight:bold;">Buy</span><br></th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">৳90,000<br><br><span style="background-color: #1486F9;border-radius: 50px;font-size: 14px;padding: 8px 25px;color: #fff;font-weight:bold;">Buy</span><br></th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">৳72,000<br><br><span style="background-color: #1486F9;border-radius: 50px;font-size: 14px;padding: 8px 25px;color: #fff;font-weight:bold;">Buy</span><br></th>
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">CPU</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">Intel® Core™ i7-1065G7<br> Processor with 1.30 GHz to 3.90<br> GHz,<br>
                            8 MB Intel® Smart Cache,4<br> Cores, 8 Threads<br>
                            Processor Graphics:<br> 
                            Intel® Iris® Plus Graphics
                            </th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">Intel® Core™ i5-1035G4<br> Processor with 1.10 GHz to 3.70<br> GHz<br>
                            6 MB Intel® Smart Cache,4<br> Cores, 8 Threads<br>
                            Processor Graphics: <br>
                            Intel® Iris® Plus Graphics
                            </th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300">Intel® Core™ i3-1005G1<br> Processor with 1.20 GHz to 3.40<br> GHz<br>
                            4MB Intel® Smart Cache, 2<br> Cores, 4 Threads<br>
                            Processor Graphics: <br>
                            Intel® UHD Graphics</th>
                      </tr>
                      <tr>
                        <td style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Memory</td>
                        <td style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">8GB DDR4 3200 MHz Memory<br>
                            Max Memory Size:  64GB</td>
                            
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Storage</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">M.2 512GB NVMe SSD</th>
                        
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Display</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">15.6 Inches Full HD  IPS Display with LED Backlit <br>
                            Resolution: 1920 x 1080 pixels <br>
                            Backlight type: LED<br>
                            Display Type: IPS display<br>
                            Contrast Ratio: 1000:1<br>
                            Viewing angle: 170 degree <br>
                            IPS screen<br>
                        </th>
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Extended Slots<br>
                            and Ports</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">2 X M.2<br>
                            2 X DIMM<br>
                            1 x HDMI, 1 x LAN<br>
                            2 x USB 3.0 & 1 x USB 2.0<br>
                            1 x Type-C Port<br>
                            1 x 3.5mm Headphone/Mic Jack<br>
                        </th>
                        
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Key­board and <br>
                            Touchpad</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">Standard PS/2 Keyboard with 4 arrows<br><br>

                            Easy Touch Fingerprint<br>
                            Intuitive Touchpad with plenty of room for seamless productivity
                            
                        </th>
                        
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Wireless</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">WI-FI<br>
                            Realtek 8821CE Wireless LAN 802.11ac PCI-E NIC<br>
                            Bluetooth: 5.0
                        </th>
                        
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Camera</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">2.0 MP Webcam
                        </th>
                        
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Audio Support</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">Realtek High Definition Audio 3.5mm Headphone / Mic Jack</th>
                        
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Size and <br>
                            Weight</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">Height: 0.59 inch (1.5 cm)<br>
                            Width: 14.17 inches (36.00 cm)<br>
                            Depth: 9.05 inches (23 cm)<br>
                            Weight: 4.08 pounds (1.85 kg)</th>
                            
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">Operating <br>
                            System</th>
                        <td style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6"><span style="font-weight:bold;">Windows 10 Pro (Trial)</span> <br>

                            <span>10 is the most popular desktop operating system in the world. Windows 10 pro<br>
                                introduces powerful new features, sophisticated connectivity and privacy tools, making <br>
                                your workstation smarter than ever.</span> </td>
                            
                      </tr>
                      <tr>
                        <th style="color:#e1e1e1;padding: 20px 0px;font-weight:700">In the Box</th>
                        <th style="color: #E1E1E1;padding: 20px 0px;font-weight:300" colspan="6">15.6 inches Qbits Sigma
                            Charger and Adapter</th>
                            
                      </tr>
                    </tbody>
                   
                  </table>
                </div>
           
            </div>
       </div>

       <div class="tech-details-button">
            <div class="row">
                <div class="col-sm-12">
                    <a href="">Shop Now &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    {{-- <a href="">Compare With Other Model &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a> --}}
                </div>
           </div>
       </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="display-image" style="margin-bottom:160px">
                   <img src="frontend/sigma/High quality/desdis.png" class="img-fluid" alt="md. saiful islam">
                </div>
            </div>
        </div>
    </div>
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



