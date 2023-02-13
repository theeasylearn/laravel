<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
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

Route::get('/first',function(){
    return '<h1>first route</h1>';
});



//get post put delete 
Route::get("/table/{number?}",function($number=2){
    $base = $number;
    $output=null;
    for($i=1; $i<=10 ; $i++) 
    {
        $result = $base * $i;
        $output .= "$base X $i = $result <br/>";
    }
    return $output;
});
Route::get('/second','App\Http\Controllers\FirstController@index');
// or
Route::get('/third',[FirstController::class,'third']);
Route::get('/fourth',[FirstController::class,'fourth']);
Route::get('/contactus/{name}/{email}/{mobile}',[FirstController::class,'contactus']);