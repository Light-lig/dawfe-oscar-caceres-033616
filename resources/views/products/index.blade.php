{{-- <ul>
    @foreach ($products as $product)
    <li>{{$product}}</li>   
   @endforeach
</ul>
<ul>
    @foreach ($proveedores as $proveedor)
    <li>{{$proveedor}}</li>   
   @endforeach
</ul> --}}


@extends('layouts.app')

@section('css')

@endsection

@section('content')

<h2 class="text-center mb-5">Administración de productos</h2>
<div class="col-md-10 mx-auto bg-white p-3">
<table class="table">
    <thead class="bg-danger text-light">
        <tr>
            <th scole="col">Codigo</th>
            <th scole="col">Nombre</th>
            <th scole="col">Acciones</th>
        </tr>

    </thead>
</table>
</div>



@endsection

@section('js')

@endsection
