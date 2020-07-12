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
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            @foreach( $arrayproducts as $product )
            <tbody>
                <td>{{$product['nameproduct']}}</td>
                <td>{{$product['mark']}}</td>
                <td>{{$product['model']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['cost']}}</td>
                <td><a class="btn btn-warning" href="{{ url('products/'.$product['id'].'/edit') }}"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                <td><form action="{{action('ProductController@destroy', $product->id)}}" method="POST" style="display:inline">
                    {{ method_field('delete') }}
                    @csrf
                    <button class='btn btn-danger'>
                        Eliminar
                    </button>
                </form></td>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection