@extends('frontend.layouts.master')
@section('title','Sigma')
@section('content')



<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>


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
            <div class="col-sm-3 col-sidebar">
                <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                    <div class="block-title" style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                        <strong>Filters</strong></div>
                    <!-- <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-title"><strong>Product Availability</strong></div>
                            @php
                            $count_stock = App\Models\Product::where('current_stock', '>', 0)->count();
                            $count_stock_out = App\Models\Product::where('current_stock', '<=', 0)->count();
                                @endphp
                                <div class="filter-options-content"
                                    style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                    <ol style="list-style: none;">
                                        <li>
                                            <label style="color: #A0A0A5">
                                                <input type="checkbox" id="stockOut">
                                                <span>Out of Stock <span>({{$count_stock_out}})</span> </span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" id="srockIn" value="1">
                                                <span>In Stock <span class="count">({{$count_stock}})</span></span>
                                            </label>
                                        </li>

                                    </ol>
                                </div>
                        </div>
                    </div> -->
                    <!-- <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-title"><strong>Product Options</strong></div>
                            <div class="filter-options-content"
                                style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                <ol style="list-style: none;">
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span>Ready to Ship<span class="count"> (105)</span> </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span>Customizable<span class="count"> (43)</span> </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label style="color: #A0A0A5">
                                            <input type="checkbox" disabled>
                                            <span>Built to Order</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span>Bundles<span class="count"> (1)</span> </span>
                                        </label>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div> -->
                    <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-title"><strong>Screen Size</strong></div>
                            <div class="filter-options-content"
                                style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                <ol style="list-style: none;">

                                    @foreach($screen_size as $key=>$screen)
                                    @php
                                    $screen_size = App\Models\Product::where('screen_size',
                                    $screen->screen_size)->where('status','1')->count();
                                    @endphp

                                    <li>@if($screen_size !='0')
                                        <label>
                                            <input type="checkbox" class="screen" value="{{$screen->screen_size}}">
                                            <span>{{$screen->screen_size}}" ({{$screen_size}})</span>
                                        </label>
                                        @elseif($screen_size =='0')
                                        <label style="color: #A0A0A5">
                                            <input type="checkbox" class="screen" value="{{$screen->screen_size}}"
                                                disabled>
                                            <span>{{$screen->screen_size}}" ({{$screen_size}})</span>
                                        </label>

                                        @endif
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-title"><strong>Use</strong></div>
                            <div class="filter-options-content"
                                style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                <ol style="list-style: none;">
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span>Home<span class="count"> (43)</span> </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">
                                            <span>Home and home office (112)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label style="color: #A0A0A5">
                                            <input type="checkbox" disabled>
                                            <span>Business</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label style="color: #A0A0A5">
                                            <input type="checkbox" disabled>
                                            <span>Enterprise</span>
                                        </label>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div> -->

                    <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-title"><strong>Processor</strong></div>
                            <div class="filter-options-content"
                                style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                <ol style="list-style: none;">
                                    <!-- <li>
                                        <label style="color: #A0A0A5">
                                            <input type="checkbox" disabled>
                                            <span>Intel Xeon</span>
                                        </label>
                                    </li> -->

                                    @foreach($processor as $key=>$processors)
                                    @php
                                    $processor = App\Models\Product::where('processor',
                                    $processors->processor)->where('status','1')->count();
                                    @endphp
                                    <li>@if($processor !='0')
                                        <label>
                                            <input type="checkbox" class="processor" value="{{$processors->processor}}">
                                            <span>{{$processors->processor}} ({{$processor}})</span>
                                        </label>
                                        @elseif($processor =='0')
                                        <label style="color: #A0A0A5">
                                            <input type="checkbox" class="processor" value="{{$processors->processor}}"
                                                disabled>
                                            <span>{{$processors->processor}} ({{$processor}})</span>
                                        </label>

                                        @endif
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-content"
                                style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                <p>
                                    <label for="amount">Price range:</label>
                                    <input type="text" id="amount_start" name="start_price" readonly
                                        style="border:0; color:#f6931f; font-weight:bold;">
                                    <input type="text" id="amount_end" name="end_price" readonly
                                        style="border:0; color:#f6931f; font-weight:bold;"> </p>
                                <div class="range">
                                    <div class="sliderValue">
                                    </div>
                                    <div class="">
                                        <div id="slider-range"></div>
                                    </div>
                                    <!-- <button onclick="send()">click</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="filter-options-item filter-options-categori">
                            <div class="filter-options-content"
                                style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                <div class="accordion accordion-flush">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Memory
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="block-content">
                                                <div class="filter-options-item filter-options-categori">
                                                    <div class="filter-options-title"><strong>Ram</strong></div>
                                                    <div class="filter-options-content"
                                                        style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                                        <ol style="list-style: none;">

                                                            @foreach($ram as $key=>$rams)
                                                            @php
                                                            $ram = App\Models\Product::where('ram',
                                                            $rams->ram)->where('status','1')->count();
                                                            @endphp
                                                            <li>@if($ram !='0')
                                                                <label>
                                                                    <input type="checkbox" class="ram"
                                                                        value="{{$rams->ram}}">
                                                                    <span>{{$rams->ram}} ({{$ram}}) </span>
                                                                </label>
                                                                @elseif($ram =='0')
                                                                <label style="color: #A0A0A5">
                                                                    <input type="checkbox" class="ram"
                                                                        value="{{$rams->ram}}" disabled>
                                                                    <span>{{$rams->ram}} ({{$ram}}) </span>
                                                                </label>

                                                                @endif
                                                            </li>
                                                            @endforeach
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Storage
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="block-content">
                                                <div class="filter-options-item filter-options-categori">
                                                    <div class="filter-options-title"><strong>Storage</strong></div>
                                                    <div class="filter-options-content"
                                                        style="border-bottom: 1px solid rgba(223, 221, 221, 0.7);">
                                                        <ol style="list-style: none;">

                                                            @foreach($storage as $key=>$storages)
                                                            @php
                                                            $storage = App\Models\Product::where('storage',
                                                            $storages->storage)->where('status','1')->count();
                                                            @endphp
                                                            <li>@if($storage !='0')
                                                                <label>
                                                                    <input type="checkbox" class="storage"
                                                                        value="{{$storages->storage}}">
                                                                    <span>{{$storages->storage}}"({{$storage}}) </span>
                                                                </label>
                                                                @elseif($storage =='0')
                                                                <label style="color: #A0A0A5">
                                                                    <input type="checkbox" class="storage"
                                                                        value="{{$storages->storage}}" disabled>
                                                                    <span>{{$storages->storage}}"({{$storage}}) </span>
                                                                </label>

                                                                @endif
                                                            </li>

                                                            @endforeach
                                                        </ol>
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

            <div class="col-sm-9 col-sidebar" id="updateDiv">

                <div class="row">
                    @foreach($products as $key=>$product)


                    <div class="col-sm-6" style="margin-bottom:40px">
                        <div class="sigma-category-contant-section">
                            <div class="card" style="padding-bottom: 20px;box-shadow: 0px 1.2px 1px 0px #70707040;">
                                <div class="sigma-category-image-section">
                                    <div class="item" style="padding: 30px;"><img
                                            src="{{ asset($product->galary_photo) }}" style="width: 400px;height:193px;"
                                            alt="The Last of us" class="img-fluid"></div>
                                </div>
                                <div class="container">
                                    <a href="{{ route('product_details',$product->slug)}}"
                                        style="text-align: center;margin-top:20px;font-size: 22px;text-decoration:none;">{{ $product->name}}</a>
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
                                    <ul>
                                        @foreach (json_decode($product->attributes) as $key => $text)
                                        @if($text->attribute_name == 'processor' || $text->attribute_name == 'ram' ||
                                        $text->attribute_name == 'storage' || $text->attribute_name == 'display')
                                        <li>{{$text->attribute_value}}</li>
                                        @endif
                                        @endforeach
                                        </ui>
                                </div>
                                <div class="container" style="text-align:center;margin-bottom:20px;">
                                    <a href="#" style="text-decoration: none;">See all offers</a>
                                </div>
                                <div class="container" style="text-align:center;margin-bottom:20px;">
                                    <a href="#" style="text-decoration: none;font-size:24px;">Starting at
                                        ৳{{ $product->unit_price}}</a>
                                </div>
                                <div class="container" style="text-align:center;margin-bottom:20px;">

                                    <a href="{{ route('product_details',$product->slug)}}"
                                        style="text-decoration: none">
                                        <button type="button" class="btn btn-default btn-lg"
                                            style="background-color: #2699FB;border-radius: 20px;color:#FFFFFF;padding:10px 60px;">Buy
                                            Now</button>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function () {

        $("#owl-demo").owlCarousel({

            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1,
            nav: true,
            //   "singleItem:true" is a shortcut for:
            //   items : 1, 
            //   itemsDesktop : false,
            //   itemsDesktopSmall : false,
            //   itemsTablet: false,
            //   itemsMobile : false

        });

        $("#owl-demo1").owlCarousel({

            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1,
            nav: true,
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
    inputSlider.oninput = (() => {
        let value = inputSlider.value;
        slideValue.textContent = value;
        slideValue.style.left = (value / 2) + "%";
        slideValue.classList.add("show");
    });
    inputSlider.onblur = (() => {
        slideValue.classList.remove("show");
    });

</script>
<script>
    $(function () {

        $("#slider-range").slider({
            range: true,
            min: 0,
            max: '{{$max}}',
            values: [0, '{{$max}}'],
            slide: function (event, ui) {
                $("#amount_start").val(ui.values[0]);
                $("#amount_end").val(ui.values[1]);
                var start = $('#amount_start').val();
                var end = $('#amount_end').val();
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "start=" + start + "& end=" + end,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            }
        });
        $('.screen').click(function () {
            var screen_size = [];
            var all = []
            $('.screen').each(function () {
                if ($(this).is(":checked")) {
                    screen_size.push($(this).val());
                } else {
                    all.push($(this).val());
                }
            });
            finalscreen_size = screen_size.toString();
            all_size = all.toString();
            console.log(all_size);
            if (finalscreen_size != 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "screen_size=" + finalscreen_size,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            } else {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "screen_size=" + all_size,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            }

        });
        $('.processor').click(function () {
            var processor = [];
            var all = []
            $('.processor').each(function () {
                if ($(this).is(":checked")) {
                    processor.push($(this).val());
                } else {
                    all.push($(this).val());
                }
            });
            finalprocessor = processor.toString();

            all_processor = all.toString();

            if (finalprocessor != 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "processor=" + finalprocessor,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            } else {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "processor=" + all_processor,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            }

        });
        $('.ram').click(function () {
            var ram = [];
            var all = []
            $('.ram').each(function () {
                if ($(this).is(":checked")) {
                    ram.push($(this).val());
                } else {
                    all.push($(this).val());
                }
            });
            finalram = ram.toString();

            all_ram = all.toString();

            if (finalram != 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "ram=" + finalram,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            } else {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "ram=" + all_ram,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            }

        });
        $('.storage').click(function () {
            var storage = [];
            var all = []
            $('.storage').each(function () {
                if ($(this).is(":checked")) {
                    storage.push($(this).val());
                } else {
                    all.push($(this).val());
                }
            });
            finalstorage = storage.toString();

            all_storage = all.toString();

            if (finalstorage != 0) {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "storage=" + finalstorage,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            } else {
                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "storage=" + all_storage,
                    success: function (response) {
                        $('#updateDiv').html(response);

                    }
                });
            }

        });
    });

</script>
@endsection
