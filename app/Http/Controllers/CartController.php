<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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
}
