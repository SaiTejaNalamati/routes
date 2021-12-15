<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostsController;
use App\Http\Controllers\democontroller;
use App\Http\Controllers\wopcontroller;
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
Route::get('/',function(){
   return view("welcome");
});
Route::get('/first/{name}',[democontroller::class,'withparam']);
Route::get('/first/{name}',function($name){
    return view("first",["name"=>$name]);
});
Route::get('/second',[wopcontroller::class,'withoutparam']);
Route::get('/optional/{name?}',function($name="Satya"){
    return view("optional",["name"=>$name]);
});