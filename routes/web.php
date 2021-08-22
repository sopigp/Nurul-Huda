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
Route::get('/administratorx_santri/detil/{id_santri}','SantriController@detil');
Route::get('/administratorx_santri/create','SantriController@create');
Route::post('/administratorx_santri/store','SantriController@store');
Route::get('/administratorx_santri/delete/{id_santri}','SantriController@delete');
Route::get('/administratorx_santri/edit/{id_santri}','SantriController@edit');
Route::put('/administratorx_santri/update/{id_santri}','SantriController@update');
 

// DATA Guru
Route::get('/administratorx_guru','GuruController@index');
Route::get('/administratorx_guru/detil/{id_guru}','GuruController@detil');
Route::get('/administratorx_guru/create','GuruController@create');
Route::post('/administratorx_guru/store','GuruController@store');
Route::get('/administratorx_guru/delete/{id_guru}','GuruController@delete');
Route::get('/administratorx_guru/edit/{id_guru}','GuruController@edit');
Route::put('/administratorx_guru/update/{id_guru}','GuruController@update');
// });
