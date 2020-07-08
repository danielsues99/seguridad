@extends('layouts.master')

@section('content')

    <div class="container" class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Nombre</th>
                <th>Documento</th>
                <th>Tipo de Documento</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Direccion</th>
                <th>Ciudad</th>
            </thead>
            @foreach( $arraycustomers as $customer )
            <tbody>
                <td>{{$customer['name']}}</td>
                <td>{{$customer['document']}}</td>
                <td>{{$customer['typedocument']}}</td>
                <td>{{$customer['phone']}}</td>
                <td>{{$customer['email']}}</td>
                <td>{{$customer['address']}}</td>
                <td>{{$customer['city']}}</td>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection