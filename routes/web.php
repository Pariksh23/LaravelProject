<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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
Route::get('/example/{first}/{second}',function ($first,$second) {
    $sum = $first + $second;
    return view( 'example',['firstval'=> $first, 'secondval'=> $second,'sum'=>$sum ]);
});

Route::get('/multiply/{num1}/{num2}',function ($num1,$num2){
   $mul =  $num1 * $num2;
   return view('multiply',['firstnum'=>$num1,'secondnum'=>$num2,'pro'=>$mul]);
});
Route::post("users",[UsersController::class,'getdata']);
Route::view("login","form");


