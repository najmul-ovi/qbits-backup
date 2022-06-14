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

<div class="driver-area-section">
    <div class="container">
        <div class="row">
            <h1>Software and Drivers for Qbits Laptops</h1>
            <div class="col-sm-8">
                <div class="driver-laptop">
                    <img src="{{ asset('frontend/assets/Icons/icon-laptop.png') }}" alt="Sigma Laptop md. saiful islam" class="desktop-lap-icon-image">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <!-- <button type="button" class="btn model-list dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Choose a Product
                        </button>
                        <ul class="dropdown-menu model-list-menu">
                            <li><a class="dropdown-item sigma-model" href="#">Sigma - 15</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item alpha-model" href="#">Alpha - 13</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item caliph-model" href="#">Caliph - 15</a></li>
                            
                        </ul> -->
                        <select name="model" id="product_model" class="model-list">
                            <div class="model-list-menu">
                            <option disabled selected><li>Choose a Product</li></option>
                            <option value="1"><li class="sigma-model">Sigma - 15</li></option>
                            <option value="2"><li class="alpha-model">Alpha - 13</li></option>
                            <option value="3"><li class="caliph-model">Caliph - 15</li></option>
                            </div>
                        </select>
                    </div>

                    <img src="{{ asset('frontend/assets/Icons/windows.png') }}" alt="Sigma Laptop md. saiful islam" class="desktop-windows-icon-image">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <!-- <button type="button" class="btn os-list dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Choose a Operating  System
                        </button>
                        <ul class="dropdown-menu os-list-menu">
                            <li><a class="dropdown-item" href="#">Windows 10(64-bit)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Windows 10(32-bit)</a></li>
                        </ul> -->

                        <select name="model" id="model-select" class="os-list">
                            <div class="os-list-menu">
                            <option value=""><li>Choose a Operating  System</li></option>
                            <option value="Windows 10(64-bit)"><li>Windows 10(64-bit)</li></option>
                            <option value="Windows 10(32-bit)"><li>Windows 10(32-bit)</li></option>
                            </div>
                        </select>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="sigma-model-image">
                    <img src="{{ asset('frontend/assets/images/sigma-model.png') }}" class="img-fluid" alt="md. saiful islam">
                </div>
                <div class="alpha-model-image">
                    <img src="{{ asset('frontend/assets/images/alpha-model.png') }}" class="img-fluid" alt="md. saiful islam">
                </div>
                <div class="caliph-model-image">
                    <img src="{{ asset('frontend/assets/images/caliph-model.png') }}" class="img-fluid" alt="md. saiful islam">
                </div>
            </div>
        </div>
    </div>

    <div class="all-driver-section">
        <div class="container">
            <h3>All drivers</h3>

            <table class="table driver-table table-responsive">
                <thead>
                    <tr>
                    <th scope="col"><span style="color:#2699FB;">Open all</span></th>
                    <th scope="col">Version</th>
                    <th scope="col">File size</th>
                    <th scope="col">Release Date</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"><span class="table-column-value">Qbits Alpha Notebook System BIOS Update (P85,P91)</span></td>
                        <td>01.39 Rev.A</td>
                        <td>17.6 MB</td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"><span class="table-column-value">Qbits System Diagnostics UEFI</span></td>
                        <td>01.39 Rev.A</td>
                        <td>17.6 MB</td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"> <span class="table-column-value">IDT High-Definition (HD) Audio Driver</span></td>
                        <td>6.10.6292.0 Rev.</td>
                        <td>26.9 MB</td>
                        <td>Dec 3, 2010</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"> <span class="table-column-value">AMD High-Definition Graphics Driver</span></td>
                        <td>8.770.2.2000 Rev.</td>
                        <td>133.7 MB</td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"> <span class="table-column-value">Ralink 802.11 b/g/n WiFi Adapter</span></td>
                        <td>3.1.18.0</td>
                        <td>11.5 MB </td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"> <span class="table-column-value">Realtek Card Reader Driver</span></td>
                        <td>3.1.18.0</td>
                        <td>11.56 MB</td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"> <span class="table-column-value">TouchSmart Webcam Software</span></td>
                        <td>3.1.18.0</td>
                        <td>134.8 MB</td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('frontend/assets/Icons/play.png') }}" alt="Sigma Laptop md. saiful islam" class="playbtn-image"> <span class="table-column-value">Power Manager Utility Software</span></td>
                        <td>1.20 Rev. A</td>
                        <td>3.1 MB</td>
                        <td>May 31, 2021</td>
                        <td><img src="{{ asset('frontend/assets/Icons/download.png') }}" alt="Sigma Laptop md. saiful islam" class="download-image"><span style="color:#2699FB; cursor: pointer;">Download</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $(".search-btn").hover(function(e) {
            $("#searchbar").fadeIn("active");
        });
    });
    $("#searchbar").on("mouseleave", function(){
        $(this).fadeToggle(400);
    });   

    $(document).ready(function(){
    $('#product_model').on('change', function() {
        

    if ( this.value == '1')
    {
        $(".sigma-model-image").show();
        $(".alpha-model-image").hide();
        $(".caliph-model-image").hide();
        // console.log("Hello Sigma");
    }
    else if ( this.value == '2')
    {
        $(".alpha-model-image").show();
        $(".sigma-model-image").hide();
        $(".caliph-model-image").hide();
    }
    else if ( this.value == '3')
    {
        $(".caliph-model-image").show();
        $(".alpha-model-image").hide();
        $(".sigma-model-image").hide();
    }
    });
});




    // $(document).ready(function() {
    //     $("#model-select").click(function() {
            
    //         $(".sigma-model-image").toggle();
    //     });

    //     $(".alpha-model").click(function() {
    //         $(".alpha-model-image").toggle();
    //     });

    //     $(".caliph-model").click(function() {
    //         $(".caliph-model-image").toggle();
    //     });

    // });


    

    // $(document).ready(function() {
    //     $(".alpha-model").hover(function() {
    //         $(".alpha-model-image").fadeIn();
    //     });
    // });

    // $(document).ready(function() {
    //     $(".caliph-model").hover(function() {
    //         $(".caliph-model-image").fadeIn();
    //     });
    // });

</script> 
 
@endsection



