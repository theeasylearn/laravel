<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

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
Route::get('/contactus2/{name?}/{email?}/{mobile?}',[FirstController::class,'contactus2']);
Route::get('/contactus3/{name?}/{email?}/{mobile?}',[FirstController::class,'contactus3']);
Route::get('/contactus4/{name?}/{email?}/{mobile?}',[FirstController::class,'contactus4']);
Route::get('/child',[FirstController::class,'child']);
Route::get('/child2',[FirstController::class,'child2']);
Route::get('/child3',[FirstController::class,'child3']);
Route::get('/maths',[MathController::class,'index']);
Route::post('/calculate',[MathController::class,'calculate']);
Route::get('/register',[RegisterController::class,'register']);
Route::post('/register',[RegisterController::class,'validate_input']);
Route::get("/insert/{email}/{password}/{mobile}",function(Request $request)
{
    $data = array($request->email,$request->password,$request->mobile);
    DB::insert("insert into customers (email,password,mobile) values (?,?,?)",$data);    
});

Route::get("/update/{email}/{password}/{mobile}/{id}",function(){
    
});

Route::get("/delete/{id}",function(){
    
});

Route::get("/select/",function(){
    
});

Route::get("/any/",function(){
    
});