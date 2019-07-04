<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Size;
use App\Brand;
use App\League;
use App\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function agregar(Request $req)
    {
      $user = \Auth::user();
      $product_id = $req->product_id;

      $user->cart()->attach($product_id);

      return redirect ('/england')->with('mensaje', 'Producto agregado exitosamente al carrito!');
    }

    public function listar(Request $req){
      $products = Cart::all();
      $sizes = Size::all();
      $brands = Brand::all();
      $leagues = League::all();
      return view('carrito')
      ->with([
        'products' => $products,
        'sizes' =>$sizes,
        'brands' =>$brands,
        'leagues' =>$leagues

      ]);



      return view('/carrito');
      }



    }
