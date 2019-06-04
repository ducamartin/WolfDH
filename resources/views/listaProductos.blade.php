@extends('layouts.main')
@section('content')
<div class="container-fluid registro">

  @foreach ($products as $product)
    {{ $product->name }}<br>
  @endforeach

</div>


@endsection
