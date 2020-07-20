@extends('layouts.inicionavbar')

@section('content')

    <div class="container" class="table-responsive">
            @foreach( $arrayalarms as $alarm )
            <p>{{$alarm['name']}}</p>
            <img src="{{$alarm['imagen']}}" alt="descripcion" title="prueba">
            @endforeach
    </div>
@endsection