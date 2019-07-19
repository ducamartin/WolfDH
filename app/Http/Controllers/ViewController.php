<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\League;
use App\User;


class ViewController extends Controller
{

  public function index(){
    $products = Product::all();
    $leagues = League::all();
    return view('index')
    ->with([
      'products' => $products,
      'leagues' =>$leagues
    ]);
  }

  public function faqs(){
    $products = Product::all();
    $leagues = League::all();
    return view('faqs')
    ->with([
      'products' => $products,
      'leagues' =>$leagues
    ]);
  }

  public function contact(){
    $products = Product::all();
    $leagues = League::all();
    return view('contact')
    ->with([
      'products' => $products,
      'leagues' =>$leagues
    ]);
  }

  public function profile(){
    return view('perfil');
  }

  public function updateProfile(Request $request){

    $this->validate( $request, [
      'name' => 'required:users',
      'street' => 'required:users',
      'town' => 'required:users',
      'state' => 'required:users',
      'zipcode' => 'required:users',
      'avatar' => 'nullable|image'
    ],
    [
      'name.required' => 'El campo Nombre es Obligatorio',
      'street.required' => 'El campo Domicilio es Obligatorio',
      'town.required' => 'El campo Ciudad debe es Obligatorio',
      'state.required' => 'El campo Provincia es Obligatorio',
      'zipcode.required' => 'El campo Codigo Postal es Obligatorio',
      'image' => 'Imagen invalida'
   ]);

    $UpdateProfile = \Auth::user();
    $UpdateProfile->name = $request['name'];
    $UpdateProfile->street =  $request['street'];
    $UpdateProfile->town = $request['town'];
    $UpdateProfile->state = $request['state'];
    $UpdateProfile->zipcode = $request['zipcode'];

    $UpdateProfile->avatar = $request['avatar'];
    if($request->file('avatar')){
      //al archivo que subi lo voy a guardar en el filesystem de laravel
      $rutaDelArchivo = $request->file('avatar')->store('public');
      //le saco solo el nombre
      $nombreArchivo = basename($rutaDelArchivo);
      //guardo el nombre del archivo en el campo poster
      $UpdateProfile->avatar = $nombreArchivo;
    }
    $UpdateProfile->save();

    return redirect('/perfil')
    ->with(
      'mensaje', 'Perfil editado exitosamente!'
    );
  }
}
