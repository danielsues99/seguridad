@extends('layouts.inicionavbar')

@section('content')

<div class="row">

@foreach( $arrayalarms as $alarm )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/alarms/'.$alarm['id'] ) }}">
        <img src="{{$alarm['imagen']}}" style="height:200px" style="width:1500px"/>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$alarm['name']}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop