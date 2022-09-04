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
//Frontend
Route::get('/', 'Homecontroller@index');

Route::get('/trang-chu','Homecontroller@index' );



//backend
Route::get('/admin','AdminController@index' );
Route::get('/dashboard','AdminController@show_dashboard' );
Route::get('/logout','AdminController@logout' );
Route::post('/admin-dashboard','AdminController@dashboard' );

//category Product
Route::get('/add-category-product','CategoryProduct@add_category_product' );
Route::get('/all-category-product','CategoryProduct@all_category_product' );