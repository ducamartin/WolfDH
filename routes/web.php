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
Route::get('/edit/{id}', 'ProductController@edit')->middleware(['auth', 'admin']);
Route::get('/agregarProducto', 'ProductController@agregarProducto')->middleware(['auth', 'admin']);
Route::post('/agregarProducto', 'ProductController@agregar')->middleware('auth');
Route::post('/agregarCarrito', 'CartController@agregar')->middleware('auth');
Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@filterLeague');

Route::get('login/facebook', 'Auth\LoginController@redirectToProviderFB');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFB');
Route::get('login/google', 'Auth\LoginController@redirectToProviderGG');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGG');

Route::post('/perfil', 'ViewController@updateProfile');
Route::get('/perfil', 'ViewController@profile');

Route::get('/carrito', 'CartController@listar');
Route::get('/contact', 'ViewController@contact');
Route::get('/faqs', 'ViewController@faqs');
Route::get('/', 'ViewController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
