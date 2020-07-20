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
Route::resource('/customers', 'CustomerController');
Route::resource('/camaras', 'CamaraController');
Route::resource('/alarms', 'AlarmController');
Route::resource('/accesscontrols', 'AccesscontrolController');
Route::resource('/intercoms', 'IntercomController');

Auth::routes();
//Rutas para administracion
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/alarmsadmin', 'AlarmController@index');
Route::get('/camarasadmin', 'CamaraController@index');
Route::get('/accesscontrolsadmin', 'AccesscontrolController@index');
Route::get('/intercomsadmin', 'IntercomController@index');

//Rutas catalogos para cliente
Route::get('/alarms', 'AlarmController@catalog');
Route::get('/alarms/{alarm}', 'AlarmController@show');
Route::get('/camaras', 'CamaraController@catalog');
Route::get('/camaras/{camara}', 'CamaraController@show');
Route::get('/accesscontrols', 'AccesscontrolController@catalog');
Route::get('/accesscontrols/{accesscontrol}', 'AccesscontrolController@show');
Route::get('/intercoms', 'IntercomController@catalog');
Route::get('/aintercoms/{intercom}', 'IntercomController@show');
Route::get('/inicio', function () {
    return view('inicio');
});
