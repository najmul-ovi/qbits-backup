<?php

namespace App\Http\Controllers;

use App\Utility\PayfastUtility;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Auth;
use DB;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\InstamojoController;
use App\Http\Controllers\ClubPointController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\PaytmController;
use App\CommissionHistory;
use App\BusinessSetting;
use App\Coupon;
use App\CouponUsage;
use App\User;
use App\Address;
use Session;
use App\Utility\PayhereUtility;
use App\Http\Controllers\ShurjoPayController as SPay;

class CheckoutController extends Controller
{


    public function index()
    {
        // dd($id);
        // dd("Hello Checkout");
        // $carts = Cart::where('product_id',$id)->first();
        // $products = Product::where('id',$id)->first();

        

        if (Auth::check()) {

            return view("frontend.checkout_process");
            
        }else{
            return view("frontend.checkout");
            // dd('it is not Auth');
        }


        

    }

    public function checkout_done(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'product_id'=>'required',
            'quantity'=>'required',
            'shipping_method'=>'required',
            'shipping_address'=>'required',
            'division'=>'required',
            'payment_method'=>'required',
            
          ]);

          $carts = Cart::where('user_id', Auth::user()->id)
                ->leftJoin('users', 'carts.user_id', '=', 'users.id')
                ->get();

                // dd($carts);

          



  
          $order = new Order();
          $time =  date('y');
          $order->invoice = rand(0000,9999).$time;
          $order->user_id = auth()->user()->id;
          $order->shipping_method = $request->shipping_method;
          $order->shipping_address = json_encode($request->shipping_address);
          $order->zilla = $request->division;
          $order->payment_type = $request->payment_method;
          $order->comments = $request->comments;
          $order->save();

          

          foreach ($carts as $key => $cartItem) {

            $order_detail = new OrderDetail;
                $order_detail->order_id = $order->invoice;
                $order_detail->seller_id = auth()->user()->id;
                $order_detail->product_id = $cartItem['product_id'];
                $order_detail->price = $cartItem['unit_price'] * $cartItem['quantity'];
                //End of storing shipping cost
                $order_detail->quantity = $cartItem['quantity'];
                $order_detail->save();



            
        }

          $orders = OrderDetail::where('order_id',$order->invoice)->get();
          $amount = OrderDetail::where('order_id',$order->invoice)->get()->sum('price');
          $orders_new = Order::where('invoice',$orders[0]->order_id)->first();

        //   dd($orders_new->shipping_method);

         

        //   dd($orders);

          
        DB::table('carts')->where(['user_id'=>Auth::user()->id])->delete();
        

        //   dd($order_details);
        // $this->order_confirmed($orders);

        Toastr::Success('Your order has been successfully placed', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
        return view('frontend.order_confirmed',compact('orders','orders_new','amount'))->with('successMsg','Your Order Has been successfully Placed');

    }


 

    public function order_confirmed($orders)
    {
        $orders = $orders;
        return view('frontend.order_confirmed',compact('orders'))->with('successMsg','Your Order Has been successfully Placed');
    }
}
