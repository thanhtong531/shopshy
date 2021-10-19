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



Route::get('/', 'HomeController@index');
Route::get('/trangchu', 'HomeController@index');
Route::get('/details', function () {
    return view('pages.details');
});
Route::get('/payments', function () {
    return view('pages.payments');
});


// Backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');

// Category product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/edit-category-product', 'CategoryProduct@edit_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product');
Route::get('/unactive-category-product/{category_product_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProduct@active_category_product');
Route::post('/save-category-product', 'CategoryProduct@save_category_product');
