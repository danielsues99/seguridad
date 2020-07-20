@extends('layouts.inicionavbar')

@section('content')

    <div class="container" class="table-responsive">
            @foreach( $arrayintercoms as $intercom )
            <p>{{$intercom['name']}}</p>
            <img src="{{$intercom['imagen']}}" alt="descripcion" title="prueba">
            @endforeach
    </div>
@endsection