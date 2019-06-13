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
Route::post('/deleteProduct', 'ProductController@delete')->middleware('auth');
Route::post('/edit/{id}', 'ProductController@update')->middleware('auth');
Route::get('/edit/{id}', 'ProductController@edit')->middleware('auth');
Route::get('/agregarProducto', 'ProductController@agregarProducto')->middleware('auth');
Route::post('/agregarProducto', 'ProductController@agregar')->middleware('auth');
Route::post('/agregarCarrito', 'CartController@agregar')->middleware('auth');
Route::get('/england', 'ProductController@index');

Route::get('/france', 'ViewController@france');
Route::get('/spain', 'ViewController@spain');
Route::get('/italy', 'ViewController@italy');
Route::get('/contact', 'ViewController@contact');
Route::get('/faqs', 'ViewController@faqs');
Route::get('/', 'ViewController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
