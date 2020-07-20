@extends('layouts.inicionavbar')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="{{$accesscontrol['imagen']}}" class="img-responsive" style="height:400px" style="width:3000px"/>

        </div>
        <div class="col-sm-8">
            <h2>
                {{$accesscontrol['name']}}
            </h2>
            <p>
                <strong>Marca:</strong> {{$accesscontrol['mark']}}
            </p>
             <p>
                <strong>Modelo:</strong> {{$accesscontrol['model']}}
            </p>
            <p>
                <strong>Precio:</strong> {{$accesscontrol['cost']}}
            </p>
            <p>
                <strong>Descripción:</strong> {{$accesscontrol['description']}}
            </p>
            <a href="{{ url('/accesscontrols') }}">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span> Volver al listado
                </button>
            </a>    
        </div>
    </div>

@stop