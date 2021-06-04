<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\car_repair_controller;
use App\Http\Controllers\customer_viewcontroller;
use App\Http\Controllers\mechanics;
use App\Http\Controllers\Admin;
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
Route::get("login_admin",[car_repair_controller::class,"admin"]);
Route::get("index",[car_repair_controller::class,"home"]);
Route::get("customer_insert",[car_repair_controller::class,"customeregister"]);
Route::get("customer_view",[car_repair_controller::class,"viewCustomer"]);
Route::get("customer_login",[customer_viewcontroller::class,"customer_login1"]);
Route::get("customer_index",[customer_viewcontroller::class,"customer_index1"]);
//Route::post("Customer_registration",[car_repair_controller::class,"Customer_registration"]);
Route::post("customer_insert",[car_repair_controller::class,"Customer1"]);
//Route::resource('',car_repair_controller::class);
Route::post("login_admin",[car_repair_controller::class,"check_login"] );
Route::get("login_mechanics",[mechanics::class,"mechanic_login"]);
Route::get("customer_request_machanics",[customer_viewcontroller::class,"customer_request_mechanics1"]);
Route::post("customer_request_machanics",[customer_viewcontroller::class,"customer_request_mechanics2"]);
Route::get("customer_view_response",[customer_viewcontroller::class,"customer_view_response1"]);
Route::get("admin_Descision",[Admin::class,"admin_Descision1"]);
Route::get("created_acc",[customer_viewcontroller::class,"created_acc1"]);