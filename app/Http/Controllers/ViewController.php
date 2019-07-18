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
  public function updateProfile(Request $request)
  {
      $UpdateProfile = \Auth::user();

      $UpdateProfile->avatar = $request['avatar'];
      $UpdateProfile->name = $request['name'];
      $UpdateProfile->street =  $request['street'];
      $UpdateProfile->town = $request['town'];
      $UpdateProfile->state = $request['state'];

      $UpdateProfile->save();

    return redirect('perfil');
  }
}
