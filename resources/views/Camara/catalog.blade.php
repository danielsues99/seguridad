@extends('layouts.inicionavbar')

@section('content')

<div class="row">

@foreach( $arraycamaras as $camara )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/camaras/'.$camara['id'] ) }}">
        <img src="{{$camara['imagen']}}" style="height:200px" style="width:1500px"/>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$camara['name']}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop