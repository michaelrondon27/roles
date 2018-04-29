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

// ROutes

Route::middleware(['auth'])->group(function() {

	// Rples
	Routes::post('roles/store', 'RoleController@store')->name('roles.store')->middleware('permission:roles.create');

	Routes::get('roles', 'RoleController@index')->name('roles.index')->middleware('permission:roles.index');

	Routes::get('roles/create', 'RoleController@create')->name('roles.create')->middleware('permission:roles.create');

	Routes::put('roles/{role}', 'RoleController@update')->name('roles.update')->middleware('permission:roles.edit');

	Routes::get('roles/[role]', 'RoleController@show')->name('roles.show')->middleware('permission:roles.show');

	Routes::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

	Routes::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')->middleware('permission:roles.edit');

	// Product
	Routes::post('products/store', 'ProductController@store')->name('products.store')->middleware('permission:products.create');

	Routes::get('products', 'ProductController@index')->name('products.index')->middleware('permission:products.index');

	Routes::get('products/create', 'ProductController@create')->name('products.create')->middleware('permission:products.create');

	Routes::put('products/{role}', 'ProductController@update')->name('products.update')->middleware('permission:products.edit');

	Routes::get('products/[role]', 'ProductController@show')->name('products.show')->middleware('permission:products.show');

	Routes::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')->middleware('permission:products.destroy');

	Routes::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')->middleware('permission:products.edit');

	// Users
	Routes::get('users', 'UserController@index')->name('users.index')->middleware('permission:users.index');

	Routes::put('users/{role}', 'UserController@update')->name('users.update')->middleware('permission:users.edit');

	Routes::get('users/[role]', 'UserController@show')->name('users.show')->middleware('permission:users.show');

	Routes::delete('users/{role}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

	Routes::get('users/{role}/edit', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');

});