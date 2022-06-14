@extends('frontend.layouts.master')
@section('title','Home')
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

<div class="qbits-slider">
    <div class="container">
        <div class="text-center">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/hero-banner.png') }}" alt="qbits-banner md. saiful islam">
        </div>  
    </div>
</div>

<section class="immense-area" style="margin-top: 0px !important;margin-bottom:80px;">
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
</section>

{{-- <div class="qbits-slider-section">
    <div class="container">
        <div class="slider-text">
            <p class="slider-heading">Immense Power Yet Incredibly Simple</p>
            <p class="slider-details">Qbits introduces premium quality laptops with top level performance at affordable prices. Built to power your computing challenges for years to come.</p>
        </div>
    </div>
</div> --}}

<div class="mobile-slider-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="mobile-slider-text">
                   <p class="mobile-slider-heading">Immense Power Yet Incredibly Simple</p>
                   <p class="mobile-slider-details">Qbits introduces premium quality laptops with top level performance at affordable prices. Built to power your computing challenges for years to come.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="qbits-sigma-section">
    <div class="container">
        <div class="row">
            <div class="sigma-section">
                <div class="col-sm-5">
                    <div class="sigma-text">
                        <h1>SIGMA</h1>
                        <h3>Built for Creation and Innovation</h3>
                         <div class="sigma-mobile-image">
                             <img src="frontend/assets/images/sigma.png" class="img-responsive" alt="">
                         </div>
                        <p>Designed for creative learners to make an exception. Configured with innovative technology to provide you with a premium experience. Powered by a superfast Intel 10th generation processor and advanced graphics, Full HD IPS display, intuitive touchpad with fingerprint support, DDR4 RAM and long-lasting battery life making it a perfect workspace for intense photo and video editing, executing heavy workloads and multitasking.
                        </p>
                        <a href="">Explore Sigma</a>
                    </div>
                </div> 
                    
                <div class="col-sm-7">
                    <div class="sigma-image">
                        <img src="frontend/assets/images/sigma.png" class="img-responsive" alt="qbits sigma Banner">
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>


<section class="qbits-alpha-section">
    <div class="container">
        <div class="row">
            <div class="alpha-section">
                <div class="col-7 alpha-image">
                <img src="frontend/assets/images/alpha.png" class="img-responsive" alt="qbits sigma Banner"> 
                </div> 

                <div class="col-5 alpha-text">
                        <h1>ALPHA</h1>
                        <h3>Stay Productive Anywhere</h3>
                        <div class="alpha-mobile-image">
                           <img src="frontend/assets/images/alpha.png" class="img-responsive" alt="qbits sigma Banner"> 
                         </div>
                        <p>Incredibly sleek and slim with powerful performance.
                            Your ready-to-go laptop, whether a business meeting, online class or live streaming, Alpha keeps you stay productive and entertained anytime anywhere.
                        </p>
                        <a href="">Explore Alpha</a>
                </div> 
            </div>
        </div>
    </div>
</section>

<section class="qbits-caliph-section">
    <div class="container">
        <div class="row">
            <div class="caliph-section">
                <div class="col-sm-5">
                    <div class="caliph-text">
                        <h1>CALIPH</h1>
                        <h3>Designed for Mainstream Gamers</h3>
                        <div class="caliph-mobile-image">
                            <img src="frontend/assets/images/caliph.png" class="img-responsive" alt="qbits sigma Banner"> 
                         </div>
                        <p>Caliph Series laptops have been built with mainstream gamers in mind. Powered by a super-fast Intel 10th generation Coffee Lake Series to take you to the stunning and conclusive victory. The enhanced graphics, advanced thermal architecture, DDR4 RAM with large storage capacity, and improved CPU performance all combine to ensure a great gaming experience. Faster than ever, Qbits Caliph can execute anything from professional quality video and photo 
                        editing to intensive workloads and heavy multitasking seamlessly. 
                        </p>
                        <a href="">Explore Caliph</a>
                    </div>
                </div> 
                    
                <div class="col-sm-7">
                    <div class="caliph-image">
                    <img src="frontend/assets/images/caliph.png" class="img-responsive" alt="qbits sigma Banner md. saiful islam"> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<section class="explore-laptop-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="explore-laptop">
                    <h1>
                        Explore Qbits to Find <br>
                        the Best Suited Laptops
                    </h1>
                    <a data-bs-toggle="modal" data-bs-target="#myModal" style="cursor: pointer;">Take a Tour &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                     <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body">
                            <section class="middle-tab-area">
                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                          <div class="card">
                                              <div class="container">
                                                  <div class="row">
                                                    <p style="padding-top: 20px !important;text-align:left;font-size:14px;">Which laptop is right for you? Take a tour here, Qbits laptop finder can help you to find the best laptop.</p>
                                                    <div class="tab">
                                                        <button class="tablinks" onclick="openCity(event, 'type')" id="defaultOpen">Type</button>
                                                        <button class="tablinks" onclick="openCity(event, 'screen')">Screen Size</button>
                                                        <button class="tablinks" onclick="openCity(event, 'purpose')">Purpose</button>
                                                        <button class="tablinks" onclick="openCity(event, 'feature')">Feature</button>
                                                        <button class="tablinks" onclick="openCity(event, 'budget')">Budget</button>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="container">
                                                    <div class="tab-area-white-space" style="margin-top:20px;margin-top:20px;height: 200px;border-radius: 15px;margin-bottom:30px">
                                                        <div id="type" class="tabcontent" style="padding: 25px;">
                                                          <h6 style="text-align: left;">Which laptop are you looking for?</h6>
                                                          <form action="/action_page.php">
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                                <label class="form-check-label" for="check1" style="float: left;">Standard Laptop</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                                <label class="form-check-label" for="check2" style="float: left;">Premium Quality</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input">
                                                                <label class="form-check-label" style="float: left;">Netbook</label>
                                                              </div>
                                                              <div class="form-check">
                                                                  <input type="checkbox" class="form-check-input">
                                                                  <label class="form-check-label" style="float: left;">Ultraportable</label>
                                                                </div>
                                                                <div class="form-check">
                                                                  <input type="checkbox" class="form-check-input">
                                                                  <label class="form-check-label" style="float: left;">Gaming PCs</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                        <div id="screen" class="tabcontent" style="padding: 25px;">
                                                          <h6 style="text-align: left;">Which laptop are you looking for?</h6>
                                                          <form action="/action_page.php">
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                                <label class="form-check-label" for="check1" style="float: left;">13.3 Inch</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                                <label class="form-check-label" for="check2" style="float: left;">15.6 Inch</label>
                                                              </div>
                                                            </form> 
                                                        </div>
                                                        
                                                        <div id="purpose" class="tabcontent" style="padding: 25px;">
                                                          <h6 style="text-align: left;">What kind of work you'll do with this new laptop?</h6>
                                                          <form action="/action_page.php">
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                                <label class="form-check-label" for="check1" style="float: left;">Everyday Use</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                                <label class="form-check-label" for="check2" style="float: left;">Freelancing</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input">
                                                                <label class="form-check-label" style="float: left;">Business</label>
                                                              </div>
                                                              <div class="form-check">
                                                                  <input type="checkbox" class="form-check-input">
                                                                  <label class="form-check-label" style="float: left;">Gaming</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="feature" class="tabcontent" style="padding: 25px;">
                                                          <h6 style="text-align: left;">What are the tasks that need to be executed with your laptop?</h6>
                                                          <form action="/action_page.php">
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                                <label class="form-check-label" for="check1" style="float: left;">Photo and Video Editing</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                                <label class="form-check-label" for="check2" style="float: left;">Education and Learning </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input">
                                                                <label class="form-check-label" style="float: left;">Official Task</label>
                                                              </div>
                                                              <div class="form-check">
                                                                  <input type="checkbox" class="form-check-input">
                                                                  <label class="form-check-label" style="float: left;">Programming </label>
                                                                </div>
                                                                <div class="form-check">
                                                                  <input type="checkbox" class="form-check-input">
                                                                  <label class="form-check-label" style="float: left;">Playing Game </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="budget" class="tabcontent" style="padding: 25px;">
                                                          <h6 style="text-align: left;">What is your best budget?</h6>
                                                          <form action="/action_page.php">
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something" checked>
                                                                <label class="form-check-label" for="check1" style="float: left;">20,000৳ to 40,000৳</label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                                <label class="form-check-label" for="check2" style="float: left;">40,000৳ to 60,000৳ </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input type="checkbox" class="form-check-input">
                                                                <label class="form-check-label" style="float: left;">60,000৳ to 1,00,000৳</label>
                                                              </div>
                                                            </form>
                                                        </div>
                                                  </div>
                                                    <div class="tab">
                                                        <button class="tablinks">Previous</button>
                                                        <button class="tablinks">Next</button>
                                                    </div>
                                                </div>
                                                
                                          </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                
                    </div>
                    </div>
                </div>



                     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



                </div>
            </div>
        </div>
    </div>
</section>

 <!-- footer section -->
 @include('frontend.partials.home')

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