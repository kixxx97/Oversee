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


Route::get('/', function () {
    return view('index');
});

Route::get('/shop', 'oversee@shop');
Route::get('/custjoborder','oversee@custJobOrder');
Route::get('/employee','oversee@employee');
Route::get('/inventory','oversee@inventory');
Route::get('/joborder','oversee@jobOrder');
Route::get('/purchase','oversee@purchase');
Route::get('/reports','oversee@report');
Route::get('/stockjoborder','oversee@stockJobOrder');
Route::get('/supplier', 'oversee@supplier');
Route::get('/viewjoborder','oversee@viewJobOrder');
Route::get('/dashboard','oversee@dashboard');
Route::post('/shop/create','oversee@cart');
Route::post('/inventory/rawmats/create','oversee@rawMatsCreate');
Route::post('/inventory/prod/create','oversee@prodCreate');
Route::get('/rawmats/{id}/edit','oversee@editRawMat');
Route::get('/prod/{id}/edit', 'oversee@editProduct');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index');
