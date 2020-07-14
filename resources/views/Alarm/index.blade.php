@extends('layouts.master')

@section('content')

    <div class="container" class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Tecnología</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            @foreach( $arrayalarms as $alarm )
            <tbody>
                <td>{{$alarm['name']}}</td>
                <td>{{$alarm['mark']}}</td>
                <td>{{$alarm['model']}}</td>
                <td>{{$alarm['tecnology']}}</td>
                <td>{{$alarm['imagen']}}</td>
                <td>{{$alarm['cost']}}</td>
                <td><a class="btn btn-warning" href="{{ url('alarms/'.$alarm['id'].'/edit') }}"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                <td><form action="{{action('AlarmController@destroy', $alarm->id)}}" method="POST" style="display:inline">
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