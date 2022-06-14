<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Ticket;
use App\Models\Conversation;
use App\Models\ProductRegister;
use App\Models\Mail;
use Auth;
use DB;
use PDF;
use Crypt;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
class ProductRegisterController extends Controller
{
    public function view(){
        $data['email'] = Auth::user()->email;
        $data['model_name'] = Product::select('series_name')->groupby('series_name')->get('series_name');
        $data['myproduct'] = ProductRegister::with(['productname'])->where('email',$data['email'])->get();
        
        return view('frontend.user.dashboard.item.my_list',$data);
    }
    public function Productstore(Request $request){
        $data['product_sl'] = ProductRegister::where('serial_no', $request->serial_no)->first('serial_no');
        echo $data['product_sl'];
        die();

        if($data['product_sl'] != ''){
            return response()->json(['status'=>'error','msg'=>'This serial number already exist.']);
        } else {
                $data = new ProductRegister();
                $data->model_name= $request->model_name;
                $data->serial_no= $request->serial_no;
                $data->name= $request->username;
                $data->email= $request->email;
                $data->save();
                // return response()->json(['status'=>'success','msg'=>'']);
                return redirect()->route('view');
            }
    }
    public function store(Request $request)
    {
        $data['email']= $request->email;
        $data['code']= $request->code;
        $data['model_name']= $request->email;
        $data['serial_no']= $request->email;
        $data['name']= $request->email;
        
        $data['useremail']  = User::where('email',$data['email'])->first('email');
        
        if($data['useremail'] != ''){
            Toastr::info('You Alreday have an account. please Login', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
       
            return redirect()->route('product_registration');
        }elseif($data['code'] != ''){

            $data = new ProductRegister();
            $data->model_name =  $data['model_name'];
            $data->serial_no  = $data['serial_no'];
            $data->name  =  $data['name'];
            $data->email  = $data['email'];
            
            $data->save();
            Toastr::info('Product register successfully', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
       
            return redirect()->route('product_registration');
        }else{
            return redirect()->route('product.registration.verification');
        }
        

    }

    public function product_reg_submit (Request $request){
        
        $data['product_sl'] = ProductRegister::where('serial_no', $request->serial_no)->first('serial_no');

        if($data['product_sl'] != ''){
            return response()->json(['status'=>'error','msg'=>'This serial number already exist.','type'=>'serial']);
        } else {
            $data['useremail']  = User::where('email',$request->customer_email)->first('email');

            if($data['useremail'] != ''){
                return response()->json(['status'=>'error','msg'=>'You Alreday have an account. Please Login','type'=>'email']);
            } else {
                $rand_code=rand(111111,999999);
                $user = new User();
                $user->name = $request->customer_name;
                $user->email= $request->customer_email;
                $user->password = Hash::make($request->customer_password);
                $user->verification_code = $rand_code;
                $user->save();
                $userId = $user->id;
                $request->session()->put('USER_ID',$user->id);
                $request->session()->put('MODEL_NO',$request->model_name);
                $request->session()->put('SERIAL_NO',$request->serial_no);
                $request->session()->put('CUSTOMER_NAME',$request->customer_name);
                $request->session()->put('CUSTOMER_EMAIL',$request->customer_email);
                return response()->json(['status'=>'success','msg'=>'']);
            }
        }
      }

      public function code_submit(Request $request){
        
        if($request->session()->has('USER_ID')){
            $uid=$request->session()->get('USER_ID');
            $c_email=$request->session()->get('CUSTOMER_EMAIL');
            $c_name=$request->session()->get('CUSTOMER_NAME');
            $model_name=$request->session()->get('MODEL_NO');
            $sl_no=$request->session()->get('SERIAL_NO');
            $data  = User::where('id',$uid)->get();
            if($data[0]['verification_code'] == $request->verify_code){
                $user = User::whereIn('user_type', ['customer', 'seller'])->where('email', $c_email)->orWhere('phone', $c_email)->first();
                auth()->login($user, true);
                // dd($user->id);
                DB::table('users')->where('id',$uid )->update(array('email_verified' => 1, 'verification_code' => ""));
                $arr=[
                    "model_name"=>$model_name,
                    "serial_no"=>$sl_no,
                    "email"=>$request->email,
                    "name"=>$c_name,
                    "email"=>$c_email,
                    "created_at"=>date('Y-m-d h:i:s'),
                    "updated_at"=>date('Y-m-d h:i:s'),
                ];
                DB::table('product_registers')->insert($arr);
                $request->session()->forget('USER_ID');
                $request->session()->forget('MODEL_NO');
                $request->session()->forget('SERIAL_NO');
                $request->session()->forget('CUSTOMER_NAME');
                $request->session()->forget('CUSTOMER_NAME');

                Toastr::Success('Product Registration Successfully and Continue', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
                return response()->json(['status'=>'success','msg'=>'']);
                
            }else{
                return response()->json(['status'=>'error','msg'=>'Please give a valid code.']);  
            }
        } else {

        }
        return back;  
      }
}
