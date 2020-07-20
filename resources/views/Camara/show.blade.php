@extends('layouts.inicionavbar')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="{{$camara['imagen']}}" class="img-responsive" style="height:400px" style="width:3000px"/>

        </div>
        <div class="col-sm-8">
            <h2>
                {{$camara['name']}}
            </h2>
            <p>
                <strong>Marca:</strong> {{$camara['mark']}}
            </p>
             <p>
                <strong>Modelo:</strong> {{$camara['model']}}
            </p>
            <p>
                <strong>Resolución:</strong> {{$camara['resolution']}}
            </p>
            <p>
                <strong>Tecnología:</strong> {{$camara['tecnology']}}
            </p>
            <p>
                <strong>Precio:</strong> {{$camara['cost']}} <strong> $ COP</strong>
            </p> 
            <a href="{{ url('/camaras') }}">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span> Volver al listado
                </button>
            </a>    
        </div>
    </div>

@stop