@extends('layouts.main')
@section('content')
<div class="container-fluid ">
  <div class="registro">
    <form method="post" action="" enctype="multipart/form-data">
      @csrf
      <div class="row justify-content-center">
        <h2>PRODUCTO A AGREGAR</h2>
      </div>

      <div class="row justify-content-center">
        <div class="form-group col-md-7">
          <label for="name">Nombre de la Camiseta</label>
          <input class="form-control" type="text" name="name"
          id="name" value="{{ old('name') }}">
          @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div  class="form-group col-md-7">
          <label for="price">Precio</label>
          <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
          @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-7">
          <label for="">Marca</label>
          <select class="" name="brand_id">
            <option disabled selected>Seleccionar Marca</option>
            @foreach ($brands as $brand)
              <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group col-md-7">
          <label for="">Liga</label>
          <select class="" name="league_id">
            <option disabled selected>Seleccionar Liga</option>
            @foreach ($leagues as $league)
              <option value="{{$league->id}}">{{$league->name}}</option>
            @endforeach
          </select>
        </div>

        <div  class="form-group col-md-7">
          <label for="description">Descripcion</label>
          <textarea class="form-control" name="description" id="description"  value="" rows="8" cols="80">{{ old('description') }}</textarea>
          @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div  class="form-group col-md-7">
          <label for="imgProduct">Imagen del Producto</label>
          Cambiar imagen:<input class="form-control" type="file" name="imgProduct" value="">
          @error('imgProduct')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group col-md-7">
          <label for="">Talle</label>
          <select class="" name="size_id">
              <option disabled selected>Seleccionar Talle</option>
            @foreach ($sizes as $size)
              <option value="{{$size->id}}">{{$size->name}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group col-md-7">
          <button type="submit" name="button" class="btn btn-primary">Agregar Producto</button>
        </div>


      </div>
    </form>
  </div>
</div>

<script type="text/javascript" src="/js/validaciones/agregarProducto.js"></script>


@endsection
