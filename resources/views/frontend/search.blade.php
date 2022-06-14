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
                        <a>Registration</a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="middle-menu-li d-flex justify-content-center" style="margin-left: 60px;">
                        <a href="{{ route('warranty')}}">Warranty</a>
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

<div class="driver-area-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sidebar">
              <h4>Searched Products for - <span class="badge badge-info" style="color: black;">{{ $search }}</span></h4>
              @if( count($search_products) > 0 )
                <div class="row">
                  
                  @foreach($search_products as $product)
                  <div class="col-sm-6" style="margin-bottom:40px">
                    <div class="sigma-category-contant-section">
                      <div class="card" style="padding-bottom: 20px;box-shadow: 0px 1.2px 1px 0px #70707040;">
                        <div class="sigma-category-image-section">
                          <div class="item" style="padding: 30px;"><img src="{{ asset($product->galary_photo) }}" style="width: 400px;height:193px;" alt="The Last of us" class="img-fluid"></div>
                        </div>
                        {{-- <div id="owl-demo" class="owl-carousel owl-theme">
                          <div class="item"><img src="{{ asset('frontend/assets/images/sigma-model.png') }}" alt="The Last of us"></div>
                          <div class="item"><img src="{{ asset('frontend/assets/images/alpha-model.png') }}" alt="GTA V"></div>
                          <div class="item"><img src="{{ asset('frontend/assets/images/caliph-model.png') }}" alt="Mirror Edge"></div>
                      </div> --}}
                        <div class="container">
                          <a href="{{ route('product_details',$product->slug)}}" style="text-align: center;margin-top:20px;font-size: 22px;text-decoration:none;">{{ $product->name}}</a>
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            </div>
                            <div class="col-sm-6">
                              <span style="float: right">{{  $product->sku}}</span>
                            </div>
                          </div>
                        </div>
                        <div class="container list">
                          {{-- <p>{{  $product->variations}}</p> --}}
                              <ul>
                                <li>Intel Core i7</li>
                                <li>8GB DDR4 3200 MHz Memory</li>
                                <li>M.2 512GB NVMe SSD</li>
                                <li>15.6 Inches Full HD  IPS Display</li>
                              </ul>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                         <a href="#" style="text-decoration: none;">See all offers</a>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                          <a href="#" style="text-decoration: none;font-size:24px;">Starting at ৳{{ $product->unit_price}}</a>
                         </div>
                         <div class="container" style="text-align:center;margin-bottom:20px;">
                            <button type="button" class="btn btn-default btn-lg" style="background-color: #2699FB;border-radius: 20px;color:#FFFFFF;padding:10px 60px;">Buy Now</button>
                         </div>
                      </div> 
                    </div>
                  </div>
                  @endforeach

                   
                </div>
                @else
                <div class="row">
                  <h2 class="alert alert-warning">
                    There is no item available according to your search 
                  </h2>
                </div>
                @endif
                {{-- <div class="row">
                  <div class="col-sm-6" style="margin-bottom:40px">
                    <div class="sigma-category-contant-section">
                      <div class="card" style="padding-bottom: 20px;box-shadow: 0px 1.2px 1px 0px #70707040;">
                        <div class="sigma-category-image-section">
                          <div class="item" style="padding: 30px;"><img src="{{ asset('frontend/assets/images/sigma-model.png') }}" alt="The Last of us md. saiful islam" class="img-fluid"></div>
                        </div>
                        <div class="container">
                          <p style="text-align: center;margin-top:20px;font-size: 22px;">Qbits Sigma 15 - 10th Generation i7<br> Intel® Core™ Processor, 15.6 Inches FHD<br> Non Touch IPS Display</p>
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            </div>
                            <div class="col-sm-6">
                              <span style="float: right">L15-29F2S</span>
                            </div>
                          </div>
                        </div>
                        <div class="container list">
                              <ul>
                                <li>Intel Core i7</li>
                                <li>8GB DDR4 3200 MHz Memory</li>
                                <li>M.2 512GB NVMe SSD</li>
                                <li>15.6 Inches Full HD  IPS Display</li>
                              </ul>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                         <a href="#" style="text-decoration: none;">See all offers</a>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                          <a href="#" style="text-decoration: none;font-size:24px;">Starting at ৳72,000</a>
                         </div>
                         <div class="container" style="text-align:center;margin-bottom:20px;">
                            <button type="button" class="btn btn-default btn-lg" style="background-color: #2699FB;border-radius: 20px;color:#FFFFFF;padding:10px 60px;">Buy Now</button>
                         </div>
                    </div> 
                    </div>
                  </div>
              </div> --}}
                {{-- <div class="row">
                  <div class="col-sm-6" style="margin-bottom:40px">
                    <div class="sigma-category-contant-section">
                      <div class="card" style="padding-bottom: 20px;box-shadow: 0px 1.2px 1px 0px #70707040;">
                        <div class="sigma-category-image-section">
                          <div class="item" style="padding: 30px;"><img src="{{ asset('frontend/assets/images/sigma-model.png') }}" alt="The Last of us" class="img-fluid"></div>
                        </div>
                        <div class="container">
                          <p style="text-align: center;margin-top:20px;">Qbits Sigma 15 - 10th Generation i7<br> Intel® Core™ Processor, 15.6 Inches FHD<br> Non Touch IPS Display</p>
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            </div>
                            <div class="col-sm-6">
                              <span style="float: right">L15-29F2S</span>
                            </div>
                          </div>
                        </div>
                        <div class="container">
                              <ul>
                                <li>Intel Core i7</li>
                                <li>8GB DDR4 3200 MHz Memory</li>
                                <li>M.2 512GB NVMe SSD</li>
                                <li>15.6 Inches Full HD  IPS Display</li>
                              </ul>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                         <a href="#" style="text-decoration: none;">See all offers</a>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                          <a href="#" style="text-decoration: none;">Starting at ৳72,000</a>
                         </div>
                         <div class="container" style="text-align:center;margin-bottom:20px;">
                            <button type="button" class="btn btn-default btn-lg" style="background-color: #2699FB;border-radius: 20px;color:#FFFFFF;">Buy Now</button>
                         </div>
                    </div> 
                    </div>
                  </div>
                  <div class="col-sm-6" style="margin-bottom:40px">
                    <div class="sigma-category-contant-section">
                      <div class="card" style="padding-bottom: 20px;box-shadow: 0px 1.2px 1px 0px #70707040;">
                        <div class="sigma-category-image-section">
                          <div class="item" style="padding: 30px;"><img src="{{ asset('frontend/assets/images/sigma-model.png') }}" alt="The Last of us" class="img-fluid"></div>
                        </div>
                        <div class="container">
                          <p style="text-align: center;margin-top:20px;">Qbits Sigma 15 - 10th Generation i7<br> Intel® Core™ Processor, 15.6 Inches FHD<br> Non Touch IPS Display</p>
                        </div>
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            </div>
                            <div class="col-sm-6">
                              <span style="float: right">L15-29F2S</span>
                            </div>
                          </div>
                        </div>
                        <div class="container">
                              <ul>
                                <li>Intel Core i7</li>
                                <li>8GB DDR4 3200 MHz Memory</li>
                                <li>M.2 512GB NVMe SSD</li>
                                <li>15.6 Inches Full HD  IPS Display</li>
                              </ul>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                         <a href="#" style="text-decoration: none;">See all offers</a>
                        </div>
                        <div class="container" style="text-align:center;margin-bottom:20px;">
                          <a href="#" style="text-decoration: none;">Starting at ৳72,000</a>
                         </div>
                         <div class="container" style="text-align:center;margin-bottom:20px;">
                            <button type="button" class="btn btn-default btn-lg" style="background-color: #2699FB;border-radius: 20px;color:#FFFFFF;">Buy Now</button>
                         </div>
                    </div> 
                    </div>
                  </div>
              </div> --}}
            </div>
        </div>
    </div>

    
</div>


<script>
   

    $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true,
          items:1,
          nav:true,
        //   "singleItem:true" is a shortcut for:
        //   items : 1, 
        //   itemsDesktop : false,
        //   itemsDesktopSmall : false,
        //   itemsTablet: false,
        //   itemsMobile : false
     
      });

      $("#owl-demo1").owlCarousel({
     
     navigation : true, // Show next and prev buttons
     slideSpeed : 300,
     paginationSpeed : 400,
     singleItem:true,
     items:1,
     nav:true,
   //   "singleItem:true" is a shortcut for:
   //   items : 1, 
   //   itemsDesktop : false,
   //   itemsDesktopSmall : false,
   //   itemsTablet: false,
   //   itemsMobile : false

 });
     
    });

    const slideValue = document.querySelector("span");
      const inputSlider = document.querySelector("input");
      inputSlider.oninput = (()=>{
        let value = inputSlider.value;
        slideValue.textContent = value;
        slideValue.style.left = (value/2) + "%";
        slideValue.classList.add("show");
      });
      inputSlider.onblur = (()=>{
        slideValue.classList.remove("show");
      });


</script> 
 
@endsection



