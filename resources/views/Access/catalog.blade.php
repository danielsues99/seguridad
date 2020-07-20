@extends('layouts.inicionavbar')

@section('content')

<div class="row">

    <div class="col-sm-4">
        @foreach( $arrayaccesscontrols as $accesscontrols )
        <img src="{{$accesscontrols['imagen']}}" class="img-responsive" style="width:200px;height:400px;"/>
        <h2>
            {{$accesscontrols['name']}}
        </h2>
        <p>
            <strong>Marca:</strong> {{$accesscontrols['mark']}}
        </p>
         <p>
            <strong>Model:</strong> {{$accesscontrols['model']}}
        </p>
        <p>
            <strong>Precio:</strong> {{$accesscontrols['cost']}}
        </p> 
        @endforeach
    </div>
</div>
@endsection