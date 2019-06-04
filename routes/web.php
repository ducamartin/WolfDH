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
Route::get('/editarProducto', 'vistaProductos@vistaProductos');
Route::get('/editarProducto', 'ViewController@editarProducto');
Route::post('/editarProducto', 'editarProducto@editar');
Route::get('/agregarProducto', 'ViewController@agregarProducto');
Route::post('/agregarProducto', 'AgregarProducto@agregar');
Route::get('/contact', 'ViewController@contact');
Route::get('/france', 'ViewController@france');
Route::get('/england', 'ViewController@england');
Route::get('/spain', 'ViewController@spain');
Route::get('/italy', 'ViewController@italy');
Route::get('/faqs', 'ViewController@faqs');
Route::get('/', 'ViewController@index');

// Route::get('/', function () {
//     return view('welcome');
// });
