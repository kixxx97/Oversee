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
Route::get('/shop', 'ecommerce@shop');
Route::group(['middleware' => ['web']], function () {
    
Route::get('/checkprod','oversee@checkProd');
Route::get('/custjoborder','oversee@custJobOrder');
Route::get('/employee','oversee@employee');
Route::post('/employee','oversee@storeEmployee');
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

Route::post('/inventory/prod/update','oversee@prodUpdate');
Route::post('/inventory/workflow/add','oversee@workflowCreate');
Route::post('/inventory/rawmats/update','oversee@rawMatsUpdate');
Route::post('/inventory/rawmats/delete','oversee@rawMatsDelete');
Route::post('/inventory/prod/delete','oversee@prodDelete');
Route::post('/joborder/create', 'oversee@jobOrderCreate');
Route::post('/getEmployees', 'oversee@getEmployees');
Route::post('/inventory/workflow/assign/','oversee@assign');
Auth::routes();
});
Route::get('/home', 'HomeController@index');
