@extends('layouts.inicionavbar')

@section('content')

<div class="row">

@foreach( $arrayintercoms as $intercom )
<div class="col-xs-6 col-sm-4 col-md-3 text-center">

    <a href="{{ url('/intercoms/'.$intercom['id'] ) }}">
        <img src="{{$intercom['imagen']}}" style="height:200px" style="width:1500px"/>
        <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$intercom['name']}}
        </h4>
    </a>

</div>
@endforeach

</div>

@stop