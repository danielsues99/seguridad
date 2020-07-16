@extends('layouts.cameranavbar')

@section('content')

    <div class="container" class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Resolución</th>
                <th>Tecnología</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            @foreach( $arraycamaras as $camara )
            <tbody>
                <td>{{$camara['name']}}</td>
                <td>{{$camara['mark']}}</td>
                <td>{{$camara['model']}}</td>
                <td>{{$camara['resolution']}}</td>
                <td>{{$camara['tecnology']}}</td>
                <td>{{$camara['imagen']}}</td>
                <td>{{$camara['cost']}}</td>
                <td><a class="btn btn-warning" href="{{ url('camaras/'.$camara['id'].'/edit') }}"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                <td><form action="{{action('CamaraController@destroy', $camara->id)}}" method="POST" style="display:inline">
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