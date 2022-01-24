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

Route::get('/',"DashboardController@index")->name("home");


route::resource('about',"aboutcontroller");
route::prefix('about')->group(function(){
   route::post('search',"aboutcontroller@search")->name("about.search");

   
});