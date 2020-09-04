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

Route::get('/','loginController@loginPage');



Route::get('/gitHubCallBack','loginController@gitHubCallBack');
Route::get('/gitLogin','loginController@gitLogin');
Route::get('/logout','loginController@logout');


Route::get('/redirectProfile','profileController@redirectProfile')->middleware('check');






