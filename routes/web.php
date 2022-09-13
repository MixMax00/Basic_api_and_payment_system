<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductController as BackendProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PayPalController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/posts', [PostController::class, 'index'])->name('frontend.post');
Route::get('/posts/single/{id}', [PostController::class, 'show'])->name('post.single');
Route::get('/product', [ProductController::class, 'index'])->name('frontend.product');
Route::get('/product/details/{id}', [ProductController::class, 'details'])->name('product.details');
Route::post('/add-cart', [CartController::class, 'addCart'])->name('add.cart');
Route::get('/cart', [CartController::class, 'cart'])->name('frontend.cart');

Route::get('/frontend/login', [LoginController::class, 'login'])->name('frontend.login');



// localaization

Route::get('lang/change', [LangController::class, 'change'])->name('changelog');


Route::get('/payment/ssl', [OrderController::class, 'ssl'])->name('payment.ssl');
Route::get('/payment/ajax-pay', [OrderController::class, 'ajaxPay'])->name('payment.ajaxPay');
Route::get('/payment/stripe', [OrderController::class, 'stripe'])->name('payment.stripe');
// Route::get('/payment/paypal', [OrderController::class, 'paypal'])->name('payment.paypal');

//sslcommerz
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax'])->name('ajaxPay.Pay');

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



// stripe payment


//Route::get('stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');


//paypal payment

Route::get('payment', [PayPalController::class, 'payment'])->name('payment');

Route::get('cancel',[PayPalController::class, 'cancel'])->name('payment.cancel');

Route::get('payment/success',  [PayPalController::class, 'success'])->name('payment.success');














Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [BackendController::class, 'index'])->name('home');
    Route::get('/theme', [BackendController::class, 'theme'])->name('admin.theme');
    Route::post('/theme', [BackendController::class, 'update'])->name('admin.save');

    // Product Route
    Route::get('/product', [BackendProductController::class, 'index'])->name('admin.product');
    Route::get('/product/add', [BackendProductController::class, 'create'])->name('product.add');
    Route::post('/product/save', [BackendProductController::class, 'store'])->name('product.save');
    Route::post('/product/update', [BackendProductController::class, 'update'])->name('product.update');
    Route::get('/product/edit/{id}', [BackendProductController::class, 'edit'])->name('product.edit');
    Route::get('/product/delete/{id}', [BackendProductController::class, 'destroy'])->name('product.delete');

 
 });
