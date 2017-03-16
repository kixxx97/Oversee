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

Route::get('/shop', function () {
    return view('shop');
});

Route::post('/create', 'oversee@create');
Route::get('/checkprod', function () {
    return view('checkprod');
});
Route::get('/custjoborder', function () {
    return view('custJobOrder');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/inventory', function () {
    return view('inventory');
});
Route::get('/joborder', function () {
    return view('joborder');
});
Route::get('/purchase', function () {
    return view('purchase');
});
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/stockjoborder', function () {
    return view('stockJobOrder');
});
Route::get('/supplier', function () {
    return view('supplier');
});
Route::get('/viewjoborder', function () {
    return view('viewjoborder');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/shop/create','oversee@cart');

Auth::routes();

Route::get('/home', 'HomeController@index');
