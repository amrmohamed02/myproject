<?php

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

Route::post('/welcome',"usercontrol@welcome");

Route::get('/login',function ()
 { 
        return view('login');
 }); 

Route::get('/register',"usercontrol@register");

Route::post('/login',"usercontrol@login");
