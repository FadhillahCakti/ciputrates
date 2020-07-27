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

Route::get('/mcustomeredit', 'CustomersController@mcustomeredit');
Route::get('/mcustomer/tambah', 'CustomersController@mcustomer_tambah');
Route::get('/mcustomer/edit/{customer_id}', 'CustomersController@mcustomer_edit');
Route::get('/mcustomer/hapus/{customer_id}', 'CustomersController@mcustomer_hapus');
Route::post('/mcustomer/store', 'CustomersController@mcustomer_store');
Route::put('/mcustomer/update/{customer_id}', 'CustomersController@mcustomer_update');

Route::get('/st', function () {
    return view('st.salestransaction');
});
Route::get('/sr', function () {
    return view('sr.salesreport');
});
