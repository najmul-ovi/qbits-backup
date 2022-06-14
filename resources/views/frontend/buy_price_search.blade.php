<div class="row">
    @foreach($products as $key=>$product)




    <div class="col-sm-6" style="margin-bottom:40px">
        <div class="sigma-category-contant-section">
            <div class="card" style="padding-bottom: 20px;box-shadow: 0px 1.2px 1px 0px #70707040;">
                <div class="sigma-category-image-section">
                    <div class="item" style="padding: 30px;"><img src="{{ asset($product->galary_photo) }}"
                            style="width: 400px;height:193px;" alt="The Last of us" class="img-fluid"></div>
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
                    <a href="#" style="text-decoration: none;font-size:24px;">Starting at ৳{{ $product->unit_price}}</a>
                </div>
                <div class="container" style="text-align:center;margin-bottom:20px;">

                    <a href="{{ route('product_details',$product->slug)}}" style="text-decoration: none">
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
