<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\League;


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

}
