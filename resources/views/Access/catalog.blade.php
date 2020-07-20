@extends('layouts.inicionavbar')

@section('content')

<div class="row">

@foreach( $arrayaccesscontrols as $accesscontrol )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/accesscontrols/'.$accesscontrol['id'] ) }}">
        <img src="{{$accesscontrol['imagen']}}" style="height:200px" style="width:1500px"/>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$accesscontrol['name']}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop