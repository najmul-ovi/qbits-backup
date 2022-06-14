<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductRegisterController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\MillerController;
use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\districtController;
use App\Http\Controllers\Admin\upazilaController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PurchaseOrderController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    if(Auth::check()) {
        return redirect(url('/admin'));
    }
    return view("auth.login");
});

 Route::get('/', function () {
        
        return view("frontend.index");
    })->name('index');


Route::get('/sigma', function () {
    
    return view("frontend.sigma");
})->name('sigma');

Route::get('/tech_spec', function () {
    
    return view("frontend.tech_spec");
})->name('tech_spec');

Route::get('/driver', function () {
    
    return view("frontend.driver");
})->name('driver');


Route::get('/signup', function () {
    
    return view("frontend.signup_new");
})->name('signup');

Route::get('/signin', function () {
    
    return view("frontend.signin_new");
})->name('signin');

Route::get('/warranty', function () {
    return view("frontend.warranty");
})->name('warranty');

Route::get('/tour', function () {
    return view("frontend.tour");
})->name('tour');

Route::get('/tour_result', function () {
    return view("frontend.tour_result");
})->name('tour_result');

Route::get('/product/registration', function () {
    return view("frontend.product_registration");
})->name('product_registration');
Route::get('/product/verification', function () {
    return view("frontend.product_registration_verification");
})->name('product.registration.verification');


// Route::get('/product', function () {
//     return view("frontend.product");
// })->name('product');



Route::get('/checkout-login', function () {
    return view("frontend.checkout_login");
})->name('checkout-login');

Route::get('/checkout_registration', function () {
    return view("frontend.checkout_regi");
})->name('checkout_registration');


Route::get('/checkout-process', function () {
    return view("frontend.checkout_process");
})->name('checkout-process');

Route::get('/contact', function () {
    return view("frontend.contact");
})->name('contact');

Route::get('/caliph', function () {
    return view("frontend.caliph");
})->name('caliph');

Route::get('/qbits_business', function () {
    return view("frontend.qbits_business");
})->name('qbits_business');

Route::get('/qbits_education', function () {
    return view("frontend.qbits_education");
})->name('qbits_education');

Route::get('/about', function () {
    return view("frontend.about");
})->name('about');

Route::get('/checkout_print', function () {
    return view("frontend.checkout_print");
})->name('checkout_print');

Route::get('/privacy', function () {
    return view("frontend.privacy");
})->name('privacy');

Route::get('/term', function () {
    return view("frontend.term");
})->name('term');

Route::get('/shipping', function () {
    return view("frontend.shipping");
})->name('shipping');

Route::get('/faq', function () {
    return view("frontend.faq");
})->name('faq');

Route::get('/return_policy', function () {
    return view("frontend.return_policy");
})->name('return_policy');

Route::get('/accessries_category', function () {
    return view("frontend.accessries_category");
})->name('accessries_category');

Route::get('/caliph_category', function () {
    return view("frontend.caliph_category");
})->name('caliph_category');

Route::get('/caliph_tech_specs', function () {
    return view("frontend.caliph_tech_specs");
})->name('caliph_tech_specs');


Route::get('/abc', function () {
    return "Hello";
})->name('abc');


// Route::get('/product', function () {
//     return view("frontend.product");
// })->name('product');

//nrshagor 
Route::group(['prefix' => 'dashboard'], function() {
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/user/profile', [HomeController::class, 'profile'])->name('user-profile');
Route::get('/user/profile/edit', [HomeController::class, 'profileEdit'])->name('user-profile-edit');
});
// Route::post('/user-profile-update/{id}', [HomeController::class, 'updateProfile'])->name('user-profile-update');
Route::group(['prefix' => 'category'], function() {
    Route::get('/sigma', [HomeController::class, 'buy'])->name('buy');
});

Route::get('/product/details/{slug}', [HomeController::class, 'product_details'])->name('product_details');
// support center
Route::group(['prefix' => 'support'], function() {
Route::get('/enter', [HomeController::class, 'overview'])->name('support.center');
Route::get('/basicEmail', [MailController::class, 'send_basic_email'])->name('email');
Route::post('/send', [MailController::class, 'send'])->name('send.email');
Route::get('/send/success', [MailController::class, 'sendSuccess'])->name('send.email.success');
Route::get('/error', [HomeController::class, 'orderNotFound'])->name('order.not.found');
Route::get('/ticket/create', [HomeController::class, 'ticketCreate'])->name('support.ticket.create');
Route::post('/ticket/store', [HomeController::class, 'ticketStore'])->name('support.ticket.store');
Route::get('/ticket/lists', [HomeController::class, 'ticketList'])->name('support.ticket.list');
Route::get('/ticket/view/', [HomeController::class, 'ticketView1'])->name('support.ticket.view');
Route::get('/ticket/info/{id}', [HomeController::class, 'ticketView'])->name('support.ticket.userInfo');
Route::get('/ticket/{id}', [HomeController::class, 'ticketEdit'])->name('support.ticket.edit');
Route::post('/ticket/update/{id}', [HomeController::class, 'ticketUpdate'])->name('support.ticket.update');
Route::post('/ticket/status/Update/{id}', [HomeController::class, 'statusUpdate'])->name('support.ticket.status');
Route::get('/faq', [HomeController::class, 'faq'])->name('support.faq');
Route::get('/warranty', [HomeController::class, 'licenses'])->name('support.licenses');
Route::get('/contact', [HomeController::class, 'contact'])->name('support.contact');
});
// Sales
Route::group(['prefix' => 'order'], function() {
Route::get('/listing', [HomeController::class, 'listing'])->name('order.listing');
Route::get('/add', [HomeController::class, 'orderAdd'])->name('order.add');
Route::get('/edit', [HomeController::class, 'orderEdit'])->name('order.edit');
Route::get('/details/{id}', [HomeController::class, 'orderDetails'])->name('order.details');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('order.update');

});

// Product Register 
Route::group(['prefix' => 'register'], function() {

// Route::get('/edit', [HomeController::class, 'orderEdit'])->name('order.edit');
// Route::get('/details/{id}', [HomeController::class, 'orderDetails'])->name('order.details');
// Route::post('/update/{id}', [HomeController::class, 'update'])->name('order.update');

});
Route::post('product-registration-submit', [ProductRegisterController::class, 'product_reg_submit']);
Route::post('product_reg_code_submit', [ProductRegisterController::class, 'code_submit']);
//My Product List 
Route::group(['prefix' => 'my'], function() {
Route::get('/Product/list', [ProductRegisterController::class, 'view'])->name('view');
// Route::post('/Product/store', [ProductRegisterController::class, 'Productstore'])->name('my.product.Product.store');
// Route::get('/edit', [HomeController::class, 'orderEdit'])->name('order.edit');
// Route::get('/details/{id}', [HomeController::class, 'orderDetails'])->name('order.details');
// Route::post('/update/{id}', [HomeController::class, 'update'])->name('order.update');

});
Route::post('product_store', [ProductRegisterController::class, 'Productstore']);

//end nrshagor

//start najmul ovi
Route::post('add_to_cart',[CartsController::class,'store']);
Route::post('signup_submit',[HomeController::class,'reg_submit']);
Route::post('code_submit',[HomeController::class,'code_submit']);
Route::post('login_submit',[HomeController::class,'login_submit']);
Route::view('/demo','frontend.demo');

Route::group(['prefix' => 'carts'], function() {
    Route::get('/', [CartsController::class, 'index'])->name('carts');
    Route::post('/store', [CartsController::class, 'store'])->name('carts.store');
    Route::post('/update', [CartsController::class, 'update'])->name('carts.update');
    Route::post('/update_product', [CartsController::class, 'update_product'])->name('carts.update_product');
    Route::delete('/delete', [CartsController::class, 'destroy'])->name('carts.delete');
});


Route::group(['prefix' => 'checkout'], function() {
    Route::get('/', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/done', [CheckoutController::class, 'checkout_done'])->name('checkout_done');
    Route::get('/order_confirmed', [CheckoutController::class, 'order_confirmed'])->name('order_confirmed');
});







// Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Routes
Route::group(['prefix'=>'admin','middleware' => 'auth', 'isAdmin'],function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/customer', [DashboardController::class, 'customerList'])->name('admin.customer');
    Route::get('/customer/view/{id}', [DashboardController::class, 'customerView'])->name('admin.customer.view');
    Route::get('/delete/{id}',[DashboardController::class, 'delete'])->name('customer.delete');
    Route::resource('product','App\Http\Controllers\Admin\ProductController');
    Route::resource('customers','App\Http\Controllers\Admin\DashboardController');
    
    
});


Route::post('/users/login/cart', [HomeController::class, 'cart_login'])->name('cart.login.submit');
Route::post('/users/signup/cart', [HomeController::class, 'cart_regi'])->name('cart.signup.submit');
Route::post('/customer/update/profile', [HomeController::class, 'customer_update_profile'])->name('customer.profile.update');
Route::get('/search', [HomeController::class, 'search'])->name('search');







Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// generate Invoice

Route::get('/invoice/{id}', [HomeController::class, 'generateUserInvoice'])->name('invoice');
//nrshagor
//Default Controller
//default 
Route::get('/back', [HomeController::class, 'back'])->name('back');
Route::post('/get/product/',[HomeController::class, 'getProduct'])->name('get-products');
// nrshagor
