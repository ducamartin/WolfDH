<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editarProducto extends Controller
{
    public function vistaProductos(){
      $products = Product::all();

    }

    public function agregar(Request $req){
      $productoEditado= new Product();

      $productoEditado->name = $req->input('name');
      $productoEditado->description = $req->input('description');
      $productoEditado->price = $req->input('price');

      $productoEditado->save();

      return redirect('/agregarProducto');
    }
}
