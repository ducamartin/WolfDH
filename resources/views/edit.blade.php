@extends('layouts.main')

@section('content')
       <div class="container-fluid registro">

           <form method="post" action="" enctype="multipart/form-data">
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
                      <label for="league_id">Liga</label>
                      <input class="form-control" type="text" name="league_id" id="league_id"  value="{{old('league_id',$products->league_id)}}">
                      @error('league_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div  class="form-group col-md-4">
                      <label for="brand_id">Marca</label>
                      <input class="form-control" type="text" name="brand_id" id="brand_id"  value="{{old('brand_id',$products->brand_id)}}">
                      @error('brand_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div  class="form-group col-md-4">
                      <label for="description">Descripcion</label>
                      <textarea class="form-control" name="description" id="description"  value="" rows="8" cols="80">{{old('description',$products->description)}}</textarea>
                      @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>

                  <div  class="form-group col-md-4">
                    <label for="imgProduct">Imagen del Producto</label>
                    <img src="/storage/{{$products->poster}}" width="100px" alt="">
                    Cambiar imagen:<input class="form-control" type="file" name="imgProduct" value="">
                    @error('imgProduct')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-4">
                  <label for="">Talle</label>
                  <select class="" name="size_id">
                    @foreach ($sizes as $size)
                      <option value="{{$size->id}}">{{$size->name}}</option>
                    @endforeach
                  </select>
                </div>

                {{-- MUESTRO TALLES  DISPONIBLES --}}
                {{-- <ul>
                  @foreach ($sizeStocks as $sizeStock)
                    <li>{{$sizeStock->name}}</li>
                  @endforeach
                </ul> --}}

              <button type="submit" name="button" class="btn btn-primary">Guardar</button>

          </form>
          <form class="" action="/deleteProduct" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$products->id}}">
              <button type="submit" name="button" class="btn btn-danger">Eliminar Producto</button>
          </form>

      </div>

@endsection
