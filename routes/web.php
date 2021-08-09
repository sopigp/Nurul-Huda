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

// HOME USER

Route::get('/','FrontendController@home');



Route::get('/administratorx_login',['as'=>'login','uses'=>'AuthController@showFormLogin']);
// Route::get('/404',['as'=>'error','uses'=>'LoginController@error']);
Route::post('/administratorx_postlogin', 'AuthController@postlogin');
Route::get('/administratorx_dashboard', 'DashboardController@index')->name('dashboard');


// Route::group(['middleware' => 'auth'], function () {


Route::get('/administratorx_logout', 'AuthController@logout')->name('logout');

// DATA SANTRI
Route::get('/administratorx_santri','SantriController@index');
 

// DATA Guru
Route::get('/administratorx_guru','GuruController@index');
// });
