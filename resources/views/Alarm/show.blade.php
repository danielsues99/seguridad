@extends('layouts.inicionavbar')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="{{$alarm['imagen']}}" class="img-responsive" style="height:400px" style="width:3000px"/>

        </div>
        <div class="col-sm-8">
            <h2>
                {{$alarm['name']}}
            </h2>
            <p>
                <strong>Marca:</strong> {{$alarm['mark']}}
            </p>
             <p>
                <strong>Modelo:</strong> {{$alarm['model']}}
            </p>
            <p>
                <strong>Tecnología:</strong> {{$alarm['tecnology']}}
            </p>
            <p>
                <strong>Precio:</strong> {{$alarm['cost']}} <strong> $ COP</strong>
            </p> 
            <a href="{{ url('/alarms') }}">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span> Volver al listado
                </button>
            </a>    
        </div>
    </div>

@stop