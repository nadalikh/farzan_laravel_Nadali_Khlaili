<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['controller' => \App\Http\Controllers\RouteController::class], function(){
   Route::get('/', 'home')->name("home");
   Route::get('/dateTime/{dateTime}', 'dateTimeSort')->name("dateTimeSort");
   Route::get('/price/{price}', 'priceSort')->name("priceSort");
   Route::get("/motorBike/{motorBike}", "getMotorBike")->name("getMotorBike");
   Route::get("login", "login")->name("adminLogin");
   Route::group(["middleware"=>"auth"], function(){
       Route::get("create", "create")->name("createMotorBike");
   });
});
Route::group(["prefix"=>"user",'controller'=>\App\Http\Controllers\UserController::class], function(){
    Route::post('login', "login")->name("user.login");
});
Route::group(["prefix" => "motorBike",'controller' => \App\Http\Controllers\MotorBikeController::class], function (){
    Route::post("filter", "filter")->name('motorBike.filter');
    Route::post("create", "create")->name('motorBike.create');
});

