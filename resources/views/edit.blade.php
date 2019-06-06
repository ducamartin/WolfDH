@extends('layouts.main')

@section('content')
       <div class="container-fluid registro">

           <form method="post" action="">
             @csrf
             <h2>Edición de Productos</h2>

                  <div class="form-group col-md-4">
                      <label for="name">Nombre de la Camiseta</label>
                      <input class="form-control" type="text" name="name"
                     id="title" value="{{old('name', $products->name)}}">
                     @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                  <div  class="form-group col-md-4">
                      <label for="price">Precio</label>
                      <input class="form-control" type="text" name="price" id="price" value="{{old('price',$products->price)}}">
                      @error('price')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div  class="form-group col-md-4">
                      <label for="description">Descripcion</label>
                      <input class="form-control" type="text" name="description" id="description"  value="{{old('description',$products->description)}}">
                      @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>



              <button type="submit" name="button" class="btn btn-primary">Guardar</button>

          </form>
          <form class="" action="/deleteProduct" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$products->id}}">
              <button type="submit" name="button" class="btn btn-danger">Eliminar Producto</button>
          </form>

      </div>

@endsection
