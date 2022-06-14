<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name','desc')->get();
        return view('admin.product.Index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
        
    //     $this->validate($request,[
    //         'name'=>'required',
    //         'unit'=>'required',
    //         'min_qty'=>'required',
    //         'max_qty'=>'required',
    //         'sku'=>'required',
    //         'current_stock'=>'required',
    //         'description'=>'required',
    //         'variations'=>'required',
    //         'cash_on_delivery'=>'required',
    //         'shipping_type'=>'required',
    //         'status'=>'required',
    //       ]);
  
    //       $product = new Product();
    //       $product->name = $request->name;
    //       $product->unit = $request->unit;
    //       $product->slug = $request->slug;
    //       $product->min_qty = $request->min_qty;
    //       $product->max_qty = $request->max_qty;
    //       $product->unit_price = 10;
    //       $product->sku = $request->sku;
    //       $product->current_stock = $request->current_stock;
    //       $product->description=$request->description;
    //       $product->variations=$request->variations;
    //       $product->meta_title=$request->meta_title;
    //       $product->meta_description=$request->meta_description;
    //       $product->cash_on_delivery=$request->cash_on_delivery;
    //       $product->shipping_type=$request->shipping_type;
    //       $product->status=$request->status;
          
  


    //       $image = array();
  
    //       if ($files = $request->t_image) {
             
    //           foreach ($files as $file) {
    //               $image_name = md5(rand(1000, 10000));
    //               # insert the image
    //               $ext = strtolower($file->getClientOriginalExtension());
    //               $image_full_name = $image_name. '.'.$ext;
    //               $upload_path = 'backend/assets/images/products/multiple_images/';
    //               $image_url = $upload_path.$image_full_name;
    //               $file->move($upload_path, $image_full_name);
    //               $image[] = $image_url;
    //           }
    //       }
    //       $product->photos = implode('|', $image);


    //     if ($single_image=$request->g_image) {

    //         $destinationPath = 'backend/assets/images/products/single_image/';

    //         $profileImage = date('YmdHis') . "." . $single_image->getClientOriginalExtension();

    //         $image_url = $destinationPath.$profileImage;

    //         $single_image->move($destinationPath, $profileImage);

            

    //     }
    //       $product->galary_photo = $image_url;

    //       if (!empty($request->kt_ecommerce_add_product_options)) {
    //         $product->attributes = json_encode($request->kt_ecommerce_add_product_options);
    //     }
    //     else {
    //         $product->attributes = json_encode(array());
    //     }

       

    //     $product->save();
  
  
      

    //     return redirect()->route('product.index')->with('successMsg','Product Successfully Saved');

       
    // }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            't_image'=>'required',
            'g_image'=>'required',

        ]);
  
          $product = new Product();
          $product->name = $request->name;
          $product->category = $request->category;
          $product->sub_category = $request->sub_category;
          $product->status = $request->status;
          $product->series_name = $request->series_name;
          $product->unit = $request->unit;
          $product->slug = $request->slug;
          $product->min_qty = $request->min_qty;
          $product->max_qty = $request->max_qty;
          $product->unit_price = $request->unit_price;
          $product->discount = $request->dicsounted_price;
          $product->sku = $request->sku;
          $product->current_stock = $request->current_stock;
          $product->description=$request->description;
          $product->meta_title=$request->meta_title;
          $product->meta_description=$request->meta_description;
          $product->cash_on_delivery=$request->cash_on_delivery;
          $product->shipping_type=$request->shipping_type;
          $product->status=$request->status;
          $product->ram=strtoupper($request->ram);
          $product->processor=$request->processor;
          $product->screen_size=$request->screen_size;
          $product->storage=strtoupper($request->storage);

          $image = array();
  
          if ($files = $request->t_image) {
             
              foreach ($files as $file) {
                  $image_name = md5(rand(1000, 10000));
                  # insert the image
                  $ext = strtolower($file->getClientOriginalExtension());
                  $image_full_name = $image_name. '.'.$ext;
                  $upload_path = 'backend/assets/images/products/multiple_images/';
                  $image_url = $upload_path.$image_full_name;
                  $file->move($upload_path, $image_full_name);
                  $image[] = $image_url;
              }
          }
          $product->photos = implode('|', $image);


        if ($single_image=$request->g_image) {

            $destinationPath = 'backend/assets/images/products/single_image/';

            $profileImage = date('YmdHis') . "." . $single_image->getClientOriginalExtension();

            $image_url = $destinationPath.$profileImage;

            $single_image->move($destinationPath, $profileImage);

        }
          $product->galary_photo = $image_url;

          if (!empty($request->kt_ecommerce_add_product_options)) {
            $product->attributes = json_encode($request->kt_ecommerce_add_product_options);
        }
        else {
            $product->attributes = json_encode(array());
        }

        $product->save();
 

        return redirect()->route('product.index')->with('successMsg','Product Successfully Saved');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);

        $products = Product::where('id',$id)->first();
        return view('admin.product.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'name'=>'required',
        //     'unit'=>'required',
        //     'min_qty'=>'required',
        //     'max_qty'=>'required',
        //     'sku'=>'required',
        //     'description'=>'required',
        //     'variations'=>'required',
        //     'current_stock'=>'required',
        //     'cash_on_delivery'=>'required',
        //     'shipping_type'=>'required',
        //     'status'=>'required',
        //   ]);
        // dd($request->all());
          $product = Product::find($id);
          $product->name = $request->name;
          $product->category = $request->category;
          $product->sub_category = $request->sub_category;
          $product->status = $request->status;
          $product->series_name = $request->series_name;
          $product->unit = $request->unit;
          $product->slug = $request->slug;
          $product->min_qty = $request->min_qty;
          $product->max_qty = $request->max_qty;
          $product->unit_price = $request->unit_price;
          $product->discount = $request->dicsounted_price;
          $product->sku = $request->sku;
          $product->current_stock = $request->current_stock;
          $product->description=$request->description;
          $product->meta_title=$request->meta_title;
          $product->meta_description=$request->meta_description;
          $product->cash_on_delivery=$request->cash_on_delivery;
          $product->shipping_type=$request->shipping_type;
          $product->status=$request->status;
          $product->ram=strtoupper($request->ram);
          $product->processor=$request->processor;
          $product->screen_size=$request->screen_size;
          $product->storage=strtoupper($request->storage);

          $image = array();
  
          if ($files = $request->t_image) {
             
              foreach ($files as $file) {
                  $image_name = md5(rand(1000, 10000));
                  # insert the image
                  $ext = strtolower($file->getClientOriginalExtension());
                  $image_full_name = $image_name. '.'.$ext;
                  $upload_path = 'backend/assets/images/products/multiple_images/';
                  $image_url = $upload_path.$image_full_name;
                  $file->move($upload_path, $image_full_name);
                  $image[] = $image_url;
              }
              $product->photos = implode('|', $image);
          }
         


        if ($single_image=$request->g_image) {

            $destinationPath = 'backend/assets/images/products/single_image/';

            $profileImage = date('YmdHis') . "." . $single_image->getClientOriginalExtension();

            $image_url = $destinationPath.$profileImage;

            $single_image->move($destinationPath, $profileImage);

            
            $product->galary_photo = $image_url;
        }
          
          if (!empty($request->kt_ecommerce_add_product_options)) {
            $product->attributes = json_encode($request->kt_ecommerce_add_product_options);
        }
        else {
            $product->attributes = json_encode(array());
        }


          $product->save();
          return redirect()->route('product.index')->with('successMsg','Product Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        return redirect()->back()->with('successMsg','Product successfully Deleted');

        // dd($id);

        
        // $find_miller = Product::where('id', $request->product)->first();
        // if($find_miller) {
        //     $find_miller->delete();
        //     return response()->json(['message'=>"Successfully Deleted $find_miller->name"]);
        // }
    }
}
