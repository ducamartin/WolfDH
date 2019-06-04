@extends('layouts.main')
@section('content')
<div class="container-fluid registro">

  <form class="" action="" method="post">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br>
    <label for="price">Precio</label>
    <input type="text" name="price" id="price" value="{{ old('price') }}">
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br>
    <label for="description">Descripcion</label>
    <input type="text" name="description" id="description" value="{{ old('description') }}">
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror<br>
    <input type="submit" name="" value="Enviar">
  </form>

</div>


@endsection
