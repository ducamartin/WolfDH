<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

  public function agregar(Request $req){

    $this->validate( $req, [
          'name' => 'required|unique:products',
          'price' => 'required|numeric:products',
          'description' => 'required:products',
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

    return redirect('/england')->with('mensaje', 'Producto creado exitosamente!');

  }

  public function agregarProducto(){
    return view('agregarProducto');
  }

  public function index(){
    $products = Product::all();
    return view('england')
    ->with([
      'products' => $products,
    ]);
  }

  public function edit($id)
    {
      $products = Product::find($id);
        return view('edit')
          ->with([
            'products' => $products
          ]);
    }

    public function update($id, Request $request)
      {
        $this->validate($request,
          [
            'name'=> 'required',
            'price'=> 'required|numeric',
            'description'=> 'required',
            'imgProduct' => 'nullable|image'
          ],
          [
            'required' => 'Campo obligatorio',
            'numeric' => 'Debe ser un numero',
            'image' => 'Imagen invalida'
          ]
        );
          //dd($request->title);
          //me traigo a la pelicula usando el find
          $productoAEditar = Product::find($id);
          //le cambio los atributos o valores al objeto que me traje arriba
          $productoAEditar->name = $request->name;
          $productoAEditar->price = $request->price;
          $productoAEditar->description = $request->description;

          if($request->file('imgProduct')){
            //al archivo que subi lo voy a guardar en el filesystem de laravel
            $rutaDelArchivo = $request->file('imgProduct')->store('public');
            //le saco solo el nombre
            $nombreArchivo = basename($rutaDelArchivo);
            //guardo el nombre del archivo en el campo poster
            $productoAEditar->imgProduct = $nombreArchivo;
          }

          //lo mando a guardar
          $productoAEditar->save();

          return redirect('/england')->with('mensaje', 'Producto modificado exitosamente!');


      }

      public function delete(Request $request)
      {
        $id = $request['id'];

        $productoAEliminar = Product::find($id);

        $productoAEliminar -> delete();

        return redirect('/england')->with('mensaje', 'Producto eliminadoi exitosamente!');
      }


}
