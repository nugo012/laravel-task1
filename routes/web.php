<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/name',function (){
    return "nugo";
});
Route::get('/lastname',function (){
    return "rostiashvili";
});
Route::get('/age',function (){
    return 21;
});
Route::get('/hobby',function (){
    return "Football";
});
Route::get('/city',function (){
    return "Tbilisi";
});
Route::delete('user/{id}',function($id){
    return response()->json(['msg'=>"delete request is successfull"]);
});