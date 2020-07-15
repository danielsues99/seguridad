@extends('layouts.navigation')

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
            @foreach( $arrayintercoms as $intercoms )
            <tbody>
                <td>{{$intercoms['name']}}</td>
                <td>{{$intercoms['mark']}}</td>
                <td>{{$intercoms['model']}}</td>
                <td>{{$intercoms['imagen']}}</td>
                <td>{{$intercoms['cost']}}</td>
                <td><a class="btn btn-warning" href="{{ url('intercoms/'.$intercoms['id'].'/edit') }}"><span class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                <td><form action="{{action('IntercomController@destroy', $intercoms->id)}}" method="POST" style="display:inline">
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