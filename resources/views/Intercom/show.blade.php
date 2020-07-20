@extends('layouts.inicionavbar')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <img src="{{$intercom['imagen']}}" class="img-responsive" style="height:400px" style="width:3000px"/>

        </div>
        <div class="col-sm-8">
            <h2>
                {{$intercom['name']}}
            </h2>
            <p>
                <strong>Marca:</strong> {{$intercom['mark']}}
            </p>
             <p>
                <strong>Modelo:</strong> {{$intercom['model']}}
            </p>
            <p>
                <strong>Precio:</strong> {{$intercom['cost']}} <strong> $ COP</strong>
            </p> 
            <a href="{{ url('/intercoms') }}">
                <button type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-chevron-left"></span> Volver al listado
                </button>
            </a>    
        </div>
    </div>

@stop