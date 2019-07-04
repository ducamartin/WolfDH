@extends('layouts.main')

@section('content')


<div class="container-fluid">

  <div class="registro">
    <div class="row justify-content-center">
    <h1>Tu Carrito</h1>
    </div>

      <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                  <div class="col-md-4">
                        <img src="..." class="card-img" alt="...">
                  </div>
                  @foreach($products as $product)
                      <div class="col-md-4">
                          <div class="card-body">
                              <h5 class="card-title"> {{$product->name}}  </h5>
                              <p class="card-text">Precio</p>
                              <p class="card-text"><small class="text-muted">Precio {{$product->price}}</small></p>
                              <p class="card-text"><small class="text-muted">Talle {{$product->size->name}}</small></p>
                              <p class="card-text"><small class="text-muted">Marca {{$product->brand->name}}</small></p>
                          </div>
                        </div>
                        @endforeach
            </div>
      </div>
  </div>

</div>



@endsection
