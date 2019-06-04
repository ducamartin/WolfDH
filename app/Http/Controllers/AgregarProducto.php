<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;



class AgregarProducto extends Controller
{
    public function agregar(Request $req){

      $this->validate( $req, [
            'name' => 'required|unique:products',
            'price' => 'required|numeric:genres',
            'description' => 'required:genres',
        ],
        [
            'name.required' => 'El campo Nombre es Obligatorio',
            'name.unique' => 'El producto ya existe',
            'price.required' => 'El campo Precio es Obligatorio',
            'price.numeric' => 'El campo Precio debe ser Numerico',
            'description.required' => 'El campo Descripcion es Obligatorio',
         ]);

      $productoNuevo= new Product();

      $productoNuevo->name = $req->input('name');
      $productoNuevo->description = $req->input('description');
      $productoNuevo->price = $req->input('price');

      $productoNuevo->save();

      return redirect('/agregarProducto');

    }
}
