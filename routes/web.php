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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Administrator area
Route::middleware(['auth','admin'])->prefix('control')->group(function () {

	// Administrator home
	Route::get('/', 'Control\Control@home')->name('control');

	// Product related links
	Route::get('products', 'Control\Products@index')->name('products');
	Route::get('products/create', 'Control\Products@create_product_view')->name('create_product');
	Route::post('products/create', 'Control\Products@create_product_submit')->name('create_product_submit');

	// Attributes
	Route::get('attributes/create', 'Control\Products@create_attribute_view')->name('create_attribute');
	Route::post('attributes/create', 'Control\Products@create_attribute_submit')->name('create_attribute_submit');

});

//// Product routing
$isProduct = ProductHelper::check_product_routing(request()->path());

if($isProduct){
	Route::get(request()->path(), function (){
		echo 'Basic product routing!';
	});
}