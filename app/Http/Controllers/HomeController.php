<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Ticket;
use App\Models\Conversation;
use App\Models\Mail;
use Auth;
use DB;
use PDF;
use Crypt;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }


    public function dashboard()
    {
        if(Auth::user()->user_type == 'customer'){
            $data['id'] = Auth::user()->id;
            $data['customer'] = User::where('id',$data['id'])->get();
         
            return view('frontend.user.customer.profile',$data);
            // return view('frontend.user.customer.dashboard');
            // return view('admin.pages.dashboard.index');
        }
       
    }

    public function profile()
    {
        if(Auth::user()->user_type == 'customer'){
            $data['id'] = Auth::user()->id;
            $data['customer'] = User::where('id',$data['id'])->get();
        //  dd($data['customer']);
            return view('frontend.user.customer.profile',$data);
            // return view('admin.pages.dashboard.index');
        }
       
    }

    public function profileEdit()
    {
        if(Auth::user()->user_type == 'customer'){
            $data['id'] = Auth::user()->id;
            $data['editData'] = User::where('id',$data['id'])->get();
            // dd( $data['editData']);
            return view('frontend.user.customer.profileEdit',$data);
            // return view('admin.pages.dashboard.index');
        }
       
    }
    public function updateProfile(Request $request, $id)
{
      $data = User::find($id);
    
      $data->save();

      return redirect()->route('user-profile')->with('successMsg','Product Successfully Updated');
}






    // support Centers Admin


    // support Centers Customer
    public function orderNotFound(){
        
        return view('frontend.user.dashboard.supportCenters.tickets.noOrderMessage');
    }

    public function overview()
    {
        if(Auth::user()->user_type == 'customer'){
        return view('frontend.user.dashboard.supportCenters.overview');
        }else{
        return view('admin.layouts.supportCenters.overview');
        }
    }
    public function ticketCreate()
    {
        if(Auth::user()->user_type == 'customer'){
            $id = Auth::user()->id;
            
            $data['products'] = OrderDetail::where('seller_id',$id)->get();
            $data['order'] = Order::where('user_id',$id)->first();
            $data['order_id'] = Order::where('user_id',$id)->get();
            
            if($data['order'] != ''){
                return view('frontend.user.dashboard.supportCenters.tickets.create',$data);
            }else{
                return view('frontend.user.dashboard.supportCenters.tickets.noOrderMessage');
            }

            }else{
            return view('admin.layouts.supportCenters.tickets.create');
            }
        
    }
    public function ticketList()
    {
        $data['list'] = Ticket::orderBy('id','desc')->get();
        
        if(Auth::user()->user_type == 'customer'){
            $data['id'] = Auth::user()->id ;
           
            $data['list'] = Ticket::where('user_id',$data['id'])->orderBy('id','desc')->get();
            return view('frontend.user.dashboard.supportCenters.tickets.list',$data);
            }else{
            return view('admin.layouts.supportCenters.tickets.list',$data);
            }
        
    }
    public function ticketView($id)
    {   $data['Ticket'] = Ticket::find($id);
  
        $data['message'] = Conversation::where('Tracking_number',$data['Ticket']->Tracking_number)->get();
        return view('admin.layouts.supportCenters.tickets.userInfo',$data);
    }
    public function ticketEdit($id)
    {   $data['Ticket'] = Ticket::find($id); 
        $res = DB::table('conversations')->where('Tracking_number',$data['Ticket']->Tracking_number)->first();
        if($res != ''){
            $data['message'] = Conversation::where('Tracking_number',$data['Ticket']->Tracking_number)->get();
        }else{
            $data['message'] = '';
        }
        
        
        return view('frontend.user.dashboard.supportCenters.tickets.edit',$data);
    }
    public function statusUpdate(Request $request, $id)

    {   
        $request->validate([
            't_image'=>'required|max:1024',
        ]);
        $data = Ticket::find($id);
        $data->status = $request->status; 
        $data->save();
        $email = Ticket::where('id',$data->id)->first()->email;
        $subject = Ticket::where('id',$data->id)->first()->subject;

        $ticket = new Conversation();
        $ticket->Tracking_number = $data->Tracking_number; 
        $ticket->user_id = $request->user_id; 
        $ticket->user_type = $request->user_type; 
        $ticket->status = $request->status; 
        $ticket->Conversation = $request->message;
        $image = array();
              if ($files = $request->t_image) {
                 
                  foreach ($files as $file) {
                      $image_name = md5(rand(1000, 10000));
                      # insert the image
                      $ext = strtolower($file->getClientOriginalExtension());
                      $image_full_name = $image_name. '.'.$ext;
                      $upload_path = 'backend/assets/images/TicketIssuImage/';
                      $image_url = $upload_path.$image_full_name;
                      $file->move($upload_path, $image_full_name);
                      $image[] = $image_url;
                    
                  }
      
              } else{
                $image_url = './avatar.png';
              }
              $ticket->photo = implode('|', $image); 
        $ticket->save();
         
        if($this->isOnline()){
            $mail_data = [
                'recipient' => 'nrshagor.isharify@gmail.com', //get email
                'Tracking' =>$data->Tracking_number,
                'fromEmail' => $email,
                'Qbits' => 'Qbits',
                'status' => $request->status,
                'fromName' => $request->name,
                'status' => $request->status,
                'subject' => $subject,
                'body'=>'you received a new sms'
 
            ];
            if($request->status == 'Close'){
                \Mail::send('close-email',$mail_data,function($message) use($mail_data){
                    $message->to($mail_data['fromEmail'])
                    ->from($mail_data['fromEmail'],$mail_data['Qbits'])            
                    ->subject($mail_data['subject']);
                });
            }else{
                \Mail::send('userconversation-email',$mail_data,function($message) use($mail_data){
                    $message->to($mail_data['fromEmail'])
                    ->from($mail_data['fromEmail'],$mail_data['Qbits'])            
                    ->subject($mail_data['subject']);
                }); 
            }

            return redirect()->route('support.ticket.list')->with('success','email sent');
         }else{
             return redirect()->back()->withInput()->with('error', 'Check your internet');
         }
         return redirect()->route('support.ticket.list')->with('successMsg','Product Successfully Updated');

    }
    public function isOnline($site = "https://youtube.com"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
    public function ticketUpdate(Request $request, $id)
    {            $request->validate([
        't_image' => 'max:510', //5MB 
    ]);
        
        $data = Ticket::find($id);
        
        $ticket = new Conversation();
        $ticket->Tracking_number = $data->Tracking_number; 
        $ticket->user_id = $data->user_id; 
        $ticket->user_type = $request->user_type; 
        $ticket->status = $data->status; 
        $ticket->Conversation = $request->message;
        $image = array();
              if ($files = $request->t_image) {
                 
                  foreach ($files as $file) {
                      $image_name = md5(rand(1000, 10000));
                      # insert the image
                      $ext = strtolower($file->getClientOriginalExtension());
                      $image_full_name = $image_name. '.'.$ext;
                      $upload_path = 'backend/assets/images/TicketIssuImage/';
                      $image_url = $upload_path.$image_full_name;
                      $file->move($upload_path, $image_full_name);
                      $image[] = $image_url;
                    
                  }
      
              } else{
                $image_url = './avatar.png';
              }
              $ticket->photo = implode('|', $image);  
        $ticket->save();
        return redirect()->route('support.ticket.list')->with('successMsg','Product Successfully Updated');
    }


    public function faq()
    {
        if(Auth::user()->user_type == 'customer'){
            return view('frontend.user.dashboard.supportCenters.faq');
            }else{
            return view('admin.layouts.supportCenters.faq');
            }
        
    }
    public function licenses()
    {
        if(Auth::user()->user_type == 'customer'){
            return view('frontend.user.dashboard.supportCenters.licenses');
            }else{
            return view('admin.layouts.supportCenters.licenses');
            }
        
    }
    public function contact()
    {
        if(Auth::user()->user_type == 'customer'){
            return view('frontend.user.dashboard.supportCenters.contact');
            }else{
            return view('admin.layouts.supportCenters.contact');
            }
        
    }

    public function ticketStore(Request $request){
        $res = DB::table('tickets')->first();
        if($res != ''){
            $number =  Ticket::orderBy('id','desc')->first()->id;
        }else{
            $number = 1;
        }
        
        $data = new Ticket();
        $data->Tracking_number = 'QBTN'.$number+1;
        $data->user_id = $request->user_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->product_catagory = $request->product_catagory;
        $data->product_name = $request->product_name;
        $data->status = $request->status;
        $data->date =  date('Y-m-d',strtotime($request->date));
        $data->description = $request->description;
        $image = array();
  
          if ($files = $request->t_image) {
             
              foreach ($files as $file) {
                  $image_name = md5(rand(1000, 10000));
                  # insert the image
                  $ext = strtolower($file->getClientOriginalExtension());
                  $image_full_name = $image_name. '.'.$ext;
                  $upload_path = 'backend/assets/images/TicketIssuImage/';
                  $image_url = $upload_path.$image_full_name;
                  $file->move($upload_path, $image_full_name);
                  $image[] = $image_url;
                
              }
        
          }
          $data->photo = implode('|', $image);
       
        $data->save();
        return redirect()->route('support.ticket.list');
    }
// Sales

public function listing()
{
    if(Auth::user()->user_type == 'customer'){
        $id = Auth::user()->id;
        $order = Order::where('user_id',$id)->get();
        return view('frontend.user.dashboard.sales.listing',compact('order'));

    }else{
        $order = Order::orderBy('id','desc')->get();
        return view('admin.layouts.sales.listing',compact('order'));
    }

}
public function orderAdd()
{
    return view('admin.layouts.sales.add-order');
}
public function orderEdit(){ 
    $id = Auth::user()->id;
    $data['orderData'] = Order::where('user_id',$id)->get();
 // $data['products'] = Product::orderBy('name','desc')->get();
    $data['products'] = Product::orderBy('name','desc')->get();

    return view('frontend.user.dashboard.sales.edit-order',$data);
}
public function update(Request $request, $id)
{
      $product = Order::find($id);
      if(Auth::user()->user_type == 'customer'){
        $product->shipping_address = $request->address;
        $product->zilla = $request->zilla;
        $product->city = $request->city;
        $product->postal_code = $request->postal_code;
        $product->country = $request->country;
      }
      $product->delivery_status = $request->delivery_status;      
      $product->invoice = $request->invoice;      
      $product->save();

      return redirect()->route('order.listing')->with('successMsg','Product Successfully Updated');
}
public function orderDetails($id)
{   $data['orderData'] = Order::find($id);
    $data['products'] = Product::orderBy('name','desc')->get();
    $data['OrderDetail'] = OrderDetail::where('order_id',$id)->get();
    $data['OrderPrice'] = OrderDetail::where('order_id',$id)->sum('price');
    if(Auth::user()->user_type == 'customer'){
        return view('frontend.user.dashboard.sales.details',$data);
    }else{
        return view('admin.layouts.sales.details',$data);
    }
    
}

    public function buy(Request $request)
    {
       
        if($request->ajax() && isset($request->start)){
            $start = $request->start;
            $end = $request->end;
            $products = Product::where('sub_category','Sigma')->where('status','1')->whereBetween('unit_price', [$start, $end])->orderBy('unit_price','asc')->get();
            // $products = Product::where('sub_category','Sigma')->where('unit_price', '>=', $start)->where('unit_price', '<=', $end)->orderBy('unit_price','asc')->get();
             response()->json($products);
             return view("frontend.buy_price_search",compact('products'));
  

        }else if(isset($request->screen_size) ){
            $size = $request->screen_size;
            $products = Product::where('sub_category','Sigma')->where('status','1')->whereIn('screen_size', explode(',', $size) )->get();
            response()->json($products);
            return view("frontend.buy_price_search",compact('products'));
        }
        else if(isset($request->processor) ){
            $processor = $request->processor;
            $products = Product::where('sub_category','Sigma')->where('status','1')->whereIn('processor', explode(',', $processor) )->get();
            response()->json($products);
            return view("frontend.buy_price_search",compact('products'));
        }
        else if(isset($request->ram) ){
            $ram = $request->ram;
            $products = Product::where('sub_category','Sigma')->where('status','1')->whereIn('ram', explode(',', $ram) )->get();
            response()->json($products);
            return view("frontend.buy_price_search",compact('products'));
        }
        else if(isset($request->storage) ){
            $storage = $request->storage;
            $products = Product::where('sub_category','Sigma')->where('status','1')->whereIn('storage', explode(',', $storage) )->get();
            response()->json($products);
            return view("frontend.buy_price_search",compact('products'));
        }
        else{
            $max = Product::where('sub_category','Sigma')->max('unit_price');           
            $ram = Product::where('sub_category','Sigma')->select('ram')->groupBy('ram')->orderBy('ram','asc')->get('ram');
            $screen_size = Product::where('sub_category','Sigma')->select('screen_size')->groupBy('screen_size')->orderBy('screen_size','asc')->get('screen_size');
            $processor = Product::where('sub_category','Sigma')->select('processor')->groupBy('processor')->orderBy('processor','asc')->get('processor');
            $storage = Product::where('sub_category','Sigma')->select('storage')->groupBy('storage')->orderBy('storage','asc')->get('storage');          
            $products = Product::where('sub_category','Sigma')->where('status','1')->get();
            return view("frontend.buy",compact('products','max','ram','screen_size','processor','storage'));
        }


    }

    public function product_details($slug)
    {
   
        $products = Product::where('slug',$slug)->first();
      
        return view("frontend.product",compact('products'));

    }

    public function shopping_cart($id)
    {

        $products = Product::where('id',$id)->first();

        return view("frontend.shopping_cart",compact('products'));
        // dd($id);

    }

    public function cart_login(Request $request)
    {
        // dd($request->all());
        $user = User::whereIn('user_type', ['customer', 'seller'])->where('email', $request->email)->orWhere('phone', $request->email)->first();

       

        if($user != null){


            if(Hash::check($request->pwd, $user->password)){

                 auth()->login($user, true);
                // dd($user->id);

                $carts = Cart::where('ip_address', request()->ip())
                ->where('order_id', NULL)
                ->get();

                DB::table('carts')->where('ip_address', request()->ip())->update(array('user_id' => $user->id)); 

                Toastr::Success('Login Successfully and Continue', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);

                return view("frontend.checkout_process");

                // dd("You are logged in");
                // if($request->has('remember')){
                //     auth()->login($user, true);
                // }
                // else{
                //     auth()->login($user, false);
                // }

                // dd(Auth::check());

            }
            else {
                dd('Hello');
            }
        }
        return back;
    }

    public function cart_regi(Request $request){
        // dd($request->all());

        // $this->validate($request,[
        //     'f_name'=>['required', 'string', 'max:255'],
        //     'l_name'=>['required', 'string', 'max:255'],
        //     'email'=>['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'phone'=>['required', 'max:13', 'min:8', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        //     'password_confirmation' => ['required', 'string', 'min:8', 'confirmed'],
        //   ]);

        
        //   DB::table('useres')
        //     ->where(['user_id'=>$uid])
        //     ->where(['user_type'=>$user_type])
        //     ->get();
        //   dd($data);
        //   if($data['useremail']){
        //     return view('frontend.checkout_process',$data);
        //   } else{
        //     $data['useremail'] = "New Email";
        //     return view('frontend.checkout_process',$data);
        //   }

        //   $user = new User();
        //   $user->name = $request->f_name;
        //   $user->lname = $request->l_name;
        //   $user->email = $request->email;
        //   $user->phone = $request->phone;
        //   $user->address = $request->address;
        //   $user->password  = Hash::make($request->password);

        //   $user->save();

        //   if($user){


        //     if(Hash::check($request->password, $user->password)){

        //          auth()->login($user, true);
        //         // dd($user->id);

        //         $carts = Cart::where('ip_address', request()->ip())
        //         ->where('order_id', NULL)
        //         ->get();

        //         DB::table('carts')->where('ip_address', request()->ip())->update(array('user_id' => $user->id)); 


        //         Toastr::Success('Customer Registration Successfully and Continue', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);

        //         return view("frontend.checkout_process");

        //         // dd("You are logged in");
        //         // if($request->has('remember')){
        //         //     auth()->login($user, true);
        //         // }
        //         // else{
        //         //     auth()->login($user, false);
        //         // }

        //         // dd(Auth::check());

        //     }
        //     else {
        //         dd('Hello');
        //     }
        // }


        
      
    }


    public function customer_update_profile(Request $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $user->name = $request->first_name;
        $user->lname = $request->last_name;
        // $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->zilla = $request->zilla;
        $user->country = $request->country;
        $user->save();
        if($request->new_password != null && ($request->new_password == $request->confirm_password)){
            $user->password = Hash::make($request->new_password);
        }

   

        if ($single_image=$request->avatar) {

            $destinationPath = 'backend/assets/images/products/single_image/';

            $profileImage = date('YmdHis') . "." . $single_image->getClientOriginalExtension();

            $image_url = $destinationPath.$profileImage;

            $single_image->move($destinationPath, $profileImage);
            $user->avatar = $image_url;
        }

          if($user->save()){
            Toastr::Success('Customer Updated Successfully', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
            return redirect()->route('dashboard');
        }

    }

    public function search(Request $request)
    {

        // dd($request->all());

       $search = $request->search;
        $search_products = Product::orWhere('description','like','%'.$search.'%')
        ->orWhere('slug','like','%'.$search.'%')
        ->orWhere('unit_price','like','%'.$search.'%')
        ->orderBy('id','DESC')
        ->paginate(9);
        return view('frontend.search',compact('search','search_products'));
    }

    public function generateUserInvoice($id)
    {
        // dd($id);
        $order = Order::find($id);

        // dd($order);

        return view('invoice', compact('order'));
        // $pdf = PDF::loadView('invoice',compact('order'));
        // $pdf->download('invoice.pdf');
        return $pdf->stream('invoice.pdf');

        // $pdf->stream('invoice.pdf');
        // return $pdf-> download('invoice.pdf');


    }

    public function back()
    {
        return redirect()->route('dashboard');
    }
    public function getProduct(Request $request){
         $inid = $request->post('inid');
        $product = OrderDetail::with(['product'])->where('order_id',$inid)->get();
        $html='<option value="">Select ...</option>';
        foreach($product as $name){
            $html.='<option value="'.$name['product']['name'].'" selected>'.$name['product']['name'].'</option>';
        }
        echo $html;

      }


      public function reg_submit (Request $request){
        
        $data['email']= $request->email;
        
        $data['useremail']  = User::where('email',$data['email'])->first('email');
        

        if($data['useremail'] != ''){
            return response()->json(['status'=>'error','msg'=>'You Alreday have an account.Please Login']);
        } else {
            $rand_code=rand(111111,999999);
            $user = new User();
            $user->name = $request->name;
            $user->email= $request->email;    
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->verification_code = $rand_code;
            $user->save();
            $userId = $user->id;
            $request->session()->forget('USER_ID');
            $request->session()->forget('USER_EMAIL');
            $uuid  = $request->session()->put('USER_ID',$userId);
            $request->session()->put('USER_EMAIL',$request->email);
            return response()->json(['status'=>'success','msg'=>$uuid]);
        }
      }

      public function login_submit (Request $request){

        // dd($request->all());
        $user = User::whereIn('user_type', ['customer', 'seller'])->where('email', $request->email)->orWhere('phone', $request->email)->first();

       

        if($user != null){

            if(Hash::check($request->password, $user->password)){
                $isVerify = $user->email_verified;
                if($isVerify){
                    auth()->login($user, true);
                    // dd($user->id);

                    $carts = Cart::where('ip_address', request()->ip())
                    ->where('order_id', NULL)
                    ->get();

                    DB::table('carts')->where('ip_address', request()->ip())->update(array('user_id' => $user->id)); 
                    $request->session()->forget('USER_ID');
                    $request->session()->forget('USER_EMAIL');
                    Toastr::Success('Login Successfully and Continue', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
                    return response()->json(['status'=>'success','msg'=>'']);

                    // dd("You are logged in");
                    // if($request->has('remember')){
                    //     auth()->login($user, true);
                    // }
                    // else{
                    //     auth()->login($user, false);
                    // }

                    // dd(Auth::check());
                }else{
                    $request->session()->put('USER_ID',$user->id);
                    $request->session()->put('USER_EMAIL',$request->email);
                    $request->session()->put('FIELD_NAME','Login');
                    $rand_code=rand(111111,999999);
                    DB::table('users')->where('id',$user->id )->update(array('verification_code' => $rand_code));
                    return response()->json(['status'=>'error','msg'=>'','type'=>'verify_err','u_email'=>$request->email]);
                }

            }
            else {
                return response()->json(['status'=>'error','msg'=>'Please give correct password.','type'=>'pass_err']);
            }
        } else{
            return response()->json(['status'=>'error','msg'=>'Please give correct email.','type'=>'email_err']);
        }
        return back;

      }



      public function code_submit(Request $request){
        
        if($request->session()->has('USER_ID')){
            $uid=$request->session()->get('USER_ID');
            $u_email=$request->session()->get('USER_EMAIL');
            $data  = User::where('id',$uid)->get();
            if($data[0]['verification_code'] == $request->verify_code){
                $user = User::whereIn('user_type', ['customer', 'seller'])->where('email', $u_email)->orWhere('phone', $u_email)->first();
                auth()->login($user, true);
                // dd($user->id);

                $carts = Cart::where('ip_address', request()->ip())
                ->where('order_id', NULL)
                ->get();

                DB::table('carts')->where('ip_address', request()->ip())->update(array('user_id' => $user->id)); 
                DB::table('users')->where('id',$uid )->update(array('email_verified' => 1, 'verification_code' => "")); 
                $request->session()->forget('USER_ID');
                $request->session()->forget('USER_EMAIL');

                if($request->session()->has('FIELD_NAME')){
                    Toastr::Success('Login Successfully and Continue', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
                    $request->session()->forget('FIELD_NAME');
                } else {
                    Toastr::Success('Registration Successfully and Continue', '', ["positionClass" => "toast-top-right","progressBar" => "true"]);
                }
                return response()->json(['status'=>'success','msg'=>'']);
                
            }else{
                return response()->json(['status'=>'error','msg'=>'Please give a valid code.']);  
            }
        } else {

        }
        return back;  
      }


}
