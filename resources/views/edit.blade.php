@extends('layouts.main')

@section('content')
       <div class="container-fluid registro justify-content-center">

           <form id="formulario" method="post" action="" enctype="multipart/form-data">
               @csrf
               <h2>Edición de Productos</h2>
               <div class="row justify-content-center">
              <div class="form-group col-md-7">
                  <label for="name">Nombre de la Camiseta</label>
                  <input class="form-control" type="text" id="name" name="name"
                  id="title" value="{{old('name', $products->name)}}">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
              </div>
              </div>
              <div class="row justify-content-center">
              <div  class="form-group col-md-7">
                  <label for="price">Precio</label>
                  <input class="form-control" type="text" name="price" id="price" value="{{old('price',$products->price)}}">
                  @error('price')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
              <div class="row justify-content-center">

              <div class="form-group col-md-7">
                <label for="">Liga</label>
                <select class="form-control" id="league" name="league_id">
                  @foreach ($leagues as $league)
                    <option value="{{$league->id}}" {{($league->id == $products->league_id)?'selected':''}}>{{$league->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row justify-content-center">

              <div class="form-group col-md-7">
                <label for="">Marca</label>
                <select class="form-control" id="brand" name="brand_id">
                  @foreach ($brands as $brand)
                    <option value="{{$brand->id}}" {{($brand->id == $products->brand_id)?'selected':''}}>{{$brand->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row justify-content-center">


              <div  class="form-group col-md-7">
                  <label for="description">Descripcion</label>
                  <textarea class="form-control" name="description" id="description"  value="" rows="8" cols="80">{{old('description',$products->description)}}</textarea>
                  @error('description')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="row justify-content-center">
              <div  class="form-group col-md-7">
                  <label for="imgProduct">Imagen del Producto</label>
                  Cambiar imagen:<input id="imgProduct" class="form-control" type="file" name="imgProduct" value="">
                  @error('imgProduct')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="form-group col-md-7 ">
                <label for="">Talle</label>
                <select class="form-control" id="size" name="size_id">
                  @foreach ($sizes as $size)
                   <option value="{{$size->id}}" {{($size->id == $products->size_id)?'selected':''}}>{{$size->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
              <button type="submit" name="button" class="btn btn-primary">Guardar</button>

          </form>
          <form class="" action="/deleteProduct" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$products->id}}">
              <button type="submit" name="button" class="btn btn-danger">Eliminar Producto</button>
          </form>

      </div>

<script type="text/javascript" src="/js/validaciones/productos.js"></script>

@endsection
