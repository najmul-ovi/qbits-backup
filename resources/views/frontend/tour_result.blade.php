@extends('frontend.layouts.master')
@section('title','Sigma')
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
                      <a>Contact</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</Section>

<section class="middle-tab-area">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="tour-result-page">
                <h3 style="margin-top: 30px;">Tour Result</h1>
                <p style="margin-bottom: 30px !important;">2 Laptops are found based on your searching.</p>
                
                <div class="row">
                    <div class="searching-result">
                        <div class="col-sm-6">
                            <div class="result-output">
                                <h3>Which laptop are you looking for?</h3>
                                <p style="padding-bottom: 20px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Notebook</p>
  
                                <h3>What would you like to do with Qbits laptop?</h3>
                                <p style="padding-bottom: 20px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Everyday use</p>
  
                                <h3>What's your budget?</h3>
                                <p style="padding-bottom: 20px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 31,000৳ to 50,000৳</p>
  
                            </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="result-output ">
                                <h3 class="result-output-first-h3">What screen size you preferred?</h3>
                                <p style="padding-bottom: 20px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 15.6 Inch</p>
  
                                <h3>What are the tasks that need to be executed with your laptop?</h3>
                                <p style="padding-bottom: 20px;"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>HD (HD Display)</p>
  
                                <h3>What is the power storage best suited for you?</h3>
                                <p style="padding-bottom: 20px;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> 5-8+ hours</p>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-result">
                            <div class="result-value">
                                <img src="{{ asset('frontend/assets/images/alpha.png') }}" class="img-fluid" alt="qbits Banner md. saiful islam">
                                <h3 style="padding-top: 30px;">Alpha</h3>
                            </div>
                            <div class="result-value-row">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>Display</li>
                                            <li>Chip</li>
                                            <li>RAM</li>
                                            <li>Storage</li>
                                            <li>Battery</li>
                                        </ul>
                                    </div>
  
                                    <div class="col-sm-6">
                                            <ul>
                                                <li>13.3"</li>
                                                <li>Intel®</li>
                                                <li>4 GB</li>
                                                <li>1 TB</li>
                                                <li>4500 mAh</li>
                                            </ul>
                                    </div>
                                </div>
                                <div class="result-value-footer">
                                    <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#">DETAILS</a>
                                            </div>
  
                                            <div class="col-sm-6">
                                            <a href="#">SELECT</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="page-result">
                            <div class="result-value">
                                <img src="{{ asset('frontend/assets/images/alpha.png') }}" class="img-fluid" alt="qbits Banner md. saiful islam">
                                    <h3 style="padding-top: 30px;">Sigma</h3>
                            </div>
                            <div class="result-value-row">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li style="font-weight: 300;">Display</li>
                                            <li style="font-weight: 300;">Chip</li>
                                            <li style="font-weight: 300;">RAM</li>
                                            <li style="font-weight: 300;">Storage</li>
                                            <li style="font-weight: 300;">Battery</li>
                                        </ul>
                                    </div>
  
                                    <div class="col-sm-6">
                                        <ul>
                                            <li>13.3"</li>
                                            <li>Intel®</li>
                                            <li>4 GB</li>
                                            <li>1 TB</li>
                                            <li>4500 mAh</li>
                                        </ul>
                                    </div>
                                </div> 
                                <div class="result-value-footer">
                                    <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#">DETAILS</a>
                                            </div>
  
                                            <div class="col-sm-6">
                                            <a href="#">SELECT</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
  
            </div>
        </div>
    </div>
  </div>
</section>



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



