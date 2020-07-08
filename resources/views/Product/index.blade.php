@extends('layouts.master')

@section('content')

    <div class="container" class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Nombre del Producto</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Descripción</th>
                <th>Costo</th>
            </thead>
            @foreach( $arrayproducts as $product )
            <tbody>
                <td>{{$product['nameproduct']}}</td>
                <td>{{$product['mark']}}</td>
                <td>{{$product['model']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['cost']}}</td>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection