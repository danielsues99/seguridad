@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:20px">
 	<div class="col-md-offset-3 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Actualizar datos del Producto
				</h3>
            </div>
            <div class="panel-body" style="padding:30px">
                <form action="{{ url('products/'.$product['id'] )}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    @csrf
                    {{-- TODO: Protección contra CSRF --}}
    
                    <div class="form-group">
    					<label for="nameproduct">Nombre del Producto</label>
    					<input type="text" name="nameproduct" id="nameproduct" class="form-control" value="{{$product['nameproduct']}}">
					</div>
 					<div class="form-group">
						{{-- TODO: Completa el input para marca del producto --}}
                        <label for="mark">Marca</label>
                        <input type="text" name="mark" id="mark" class="form-control" value="{{$product['mark']}}">
					</div>
 					<div class="form-group">
						{{-- TODO: Completa el input para el modelo --}}
                        <label for="model">Modelo</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{$product['model']}}">
					</div>
					<div class="form-group">
						<label for="description">Descripción</label>
						<textarea name="description" id="description" class="form-control" rows="3" value="{{$product['description']}}"></textarea>
					</div>
 					<div class="form-group">
                        <label for="cost">Costo</label>
                        <input type="number" name="cost" id="cost" class="form-control" value="{{$product['cost']}}">
						{{-- TODO: Completa el input para el costo --}}
					</div>
                     <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Actualizar producto
                        </button>
                    </div>
                 {{-- TODO: Cerrar formulario --}}
                </form>
            </div>

@endsection