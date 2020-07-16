@extends('layouts.accessnavbar')

@section('content')

    <div class="container" class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            @foreach( $arrayaccesscontrols as $accesscontrol )
            <tbody>
                <td>{{$accesscontrol['name']}}</td>
                <td>{{$accesscontrol['mark']}}</td>
                <td>{{$accesscontrol['model']}}</td>
                <td>{{$accesscontrol['imagen']}}</td>
                <td>{{$accesscontrol['cost']}}</td>
                <td><a class="btn btn-warning" href="{{ url('accesscontrols/'.$accesscontrol['id'].'/edit') }}"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                <td><form action="{{action('AccesscontrolController@destroy', $accesscontrol->id)}}" method="POST" style="display:inline">
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