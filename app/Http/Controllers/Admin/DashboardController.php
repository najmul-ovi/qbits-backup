<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Ticket;
use Auth;
use DB;
use PDF;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['order'] = Order::orderBy('id','desc')->get();
        $res = DB::table('order_details')->first();
        if($res != ''){
            $data['date'] = OrderDetail::orderBy('created_at','desc')->first()->created_at;
               
        // $data['date'] = date('Y-m-d',strtotime($data['collectDate']));
        //month and date
        $data['sdate'] = date('Y-m-01',strtotime($data['date']));
        $data['edate'] = date('Y-m-30',strtotime($data['date']));
        $data['everyday'] = OrderDetail::where('created_at',$data['date'])->sum('price');
        $data['everydayOrder'] = OrderDetail::where('created_at',$data['date'])->get()->count();
        $data['everyMonth'] = OrderDetail::whereBetween('created_at',[$data['sdate'],$data['edate']])->sum('price');
        $data['everyMonthOrder'] = OrderDetail::whereBetween('created_at',[$data['sdate'],$data['edate']])->get()->count();
        //year 
        $data['sMonth'] = date('Y-01-01',strtotime($data['date']));
        $data['eMonth'] = date('Y-12-30',strtotime($data['date']));
        $data['everyYear'] = OrderDetail::whereBetween('created_at',[$data['sMonth'],$data['eMonth']])->sum('price');
        $data['everyYearOrder'] = OrderDetail::whereBetween('created_at',[$data['sMonth'],$data['eMonth']])->get()->count();
        $data['customer'] = User::whereBetween('created_at',[$data['sdate'],$data['edate']])->where('user_type','customer')->get();
        $data['customerCount'] = User::whereBetween('created_at',[$data['sdate'],$data['edate']])->where('user_type','customer')->get()->count();
        return view('admin.pages.dashboard.index',$data);
    }else{
        $data['sdate'] = date('Y-m-01');
        $data['edate'] = date('Y-m-30');
        $data['customer'] = User::whereBetween('created_at',[$data['sdate'],$data['edate']])->where('user_type','customer')->get();
        $data['customerCount'] = User::whereBetween('created_at',[$data['sdate'],$data['edate']])->where('user_type','customer')->get()->count();
        return view('admin.pages.dashboard.index',$data);
    }
    }
    public function customerList(){
        $customer = User::where('user_type','customer')->orderBy('name','desc')->get();
        
        return view('admin.layouts.customers.index',compact('customer'));

    }
    public function customerView($id){
        $data['customer'] = User::find($id);
        $data['id'] = User::where('id',$id)->get('id');
        $data['sellerId'] = Order::where('user_id',$id)->get();
        $data['ticket'] = Ticket::where('user_id',$id)->get();
        return view('admin.layouts.customers.view',$data);

    }
    public function delete($id){
      
        $user = User::find($id);

        // if(file_exists('public/upload/user_img/' . $user->img) AND ! empty($user->img)) {
        //   unlink('public/upload/user_img/' . $user->img);
        // }
        $user->delete();
        return redirect()->route('admin.customer')->with('success','Data Delete Successfully');
      }


}
