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
Route::post('/deleteProduct', 'ProductController@delete');
Route::post('/edit/{id}', 'ProductController@update');
Route::get('/edit/{id}', 'ProductController@edit');
Route::get('/agregarProducto', 'ProductController@agregarProducto');
Route::post('/agregarProducto', 'ProductController@agregar');
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
