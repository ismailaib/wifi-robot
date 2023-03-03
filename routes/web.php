<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BookplaceController;
use App\Http\Controllers\AdmindashboardController;
use App\Http\Controllers\AdminloginController;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    return view('welcome');
});



/*  user auth  */ 
Route::get('studentdashboard',[StudentDashboardController::class,'index'])->middleware(['auth','isStudent']);
Route::get('bookplace',[BookplaceController::class,'index']);



Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login']);

Route::get('signup',[SignupController::class,'index']);
Route::post('signup',[SignupController::class,'signup']);

Route::get('logout',[LogoutController::class,'index']);





/*  admin auth  */ 
Route::get('admindashboard',[AdminDashboardController::class,'show'])->Middleware(['auth','isAdmin']);
/*  admin add student  */ 
Route::post('admindashboard',[AdminDashboardController::class,'add']);
/*  admin delete student  */ 
Route::get('delete/{id}',[AdminDashboardController::class,'delete']);
/*  admin edit student  */ 


 

