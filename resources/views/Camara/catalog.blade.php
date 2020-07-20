@extends('layouts.inicionavbar')

@section('content')

    <div class="container" class="table-responsive">
            @foreach( $arraycamaras as $camara )
            <p>{{$camara['name']}}</p>
            <img src="{{$camara['imagen']}}" alt="descripcion" title="prueba">
            @endforeach
    </div>
@endsection