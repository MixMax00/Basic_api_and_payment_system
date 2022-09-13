<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerAuthenticateController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\OrederApiController;
use App\Http\Controllers\SslCommerzPaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// login and register route
Route::post('/register', [CustomerAuthenticateController::class, 'register']);
Route::post('/login', [CustomerAuthenticateController::class, 'login']);


// Rest Password API
Route::post('/rest-password-email', [CustomerAuthenticateController::class, 'resetPassword']);
Route::post('/password-token', [CustomerAuthenticateController::class, 'passwordToken']);
Route::post('/password-change', [CustomerAuthenticateController::class, 'changePassword']);

Route::get('/comments/{post_id}', [CommentController::class, 'comment']);
Route::post('/comments/{post_id}', [CommentController::class, 'store']);
Route::get('/setting', [SettingController::class, 'setting']);




// product api
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/details/{id}', [ProductController::class, 'details']);

// feature product
Route::get('/feature-product', [ProductController::class, 'feature']);
Route::get('/tranding-product', [ProductController::class, 'trending']);
Route::get('/exclusive-product', [ProductController::class, 'exclusive']);
Route::get('/banner-product', [ProductController::class, 'banners']);



//Route::post('/sslPay', [SslCommerzPaymentController::class, 'payViaAjax']);

// Route::post('/add-to-cart', [CartController::class, 'addCart']);

Route::group(["middleware" => ["auth:api"]], function(){
  Route::post('/add-to-cart', [CartController::class, 'addCart']);
  Route::post('/order', [OrederApiController::class, 'orderCOD']);
  Route::get('/profile/{id}', [CustomerAuthenticateController::class, 'profile']);

});


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
