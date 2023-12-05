<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });

Route::get('/',[AuthController::class,'home'])->name('home');


Route::group(['middleware'=>'guest'], function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');

    Route::get('forget-password',[ForgetPasswordController::class,'forgetPassword'])->name('forget.password');
    Route::post('forget-password-post',[ForgetPasswordController::class,'forgetPasswordPost'])->name('forget.password.post');
    
    Route::get('reset-password/{token}',[ForgetPasswordController::class,'resetPassword'])->name('reset.password');
    Route::post('reset-password',[ForgetPasswordController::class,'resetPasswordPost'])->name('reset.password.post');

});

Route::group(['middleware'=>'auth'], function(){
    // Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
    Route::get('home',[UserController::class,'index'])->name('home');
});