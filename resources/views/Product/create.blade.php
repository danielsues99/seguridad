@extends('layouts.master')

@section('content')


    <div class="row" style="margin-top:20px">
 	<div class="col-md-offset-3 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Añadir Producto
				</h3>
			</div>
 			<div class="panel-body" style="padding:30px">
                <form action="{{ url('catalog/create') }}" method="POST">
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
                    {{ csrf_field() }}
					{{-- TODO: Protección contra CSRF --}}
    
    				<div class="form-group">
    					<label for="name">Nombre del Producto</label>
    					<input type="text" name="nameproduct" id="nameproduct" class="form-control">
					</div>
 					<div class="form-group">
						{{-- TODO: Completa el input para marca del producto --}}
                        <label for="mark">Marca</label>
                        <input type="text" name="mark" id="mark" class="form-control">
					</div>
 					<div class="form-group">
						{{-- TODO: Completa el input para el modelo --}}
                        <label for="model">Modelo</label>
                        <input type="text" name="model" id="model" class="form-control">
					</div>
					<div class="form-group">
    					<label for="description">Descripción</label>
    					<input type="text" name="description" id="description" class="form-control">
					</div>
 					<div class="form-group">
                        <label for="cost">Costo</label>
                        <input type="number" name="cost" id="cost" class="form-control">
						{{-- TODO: Completa el input para el costo --}}
					</div>
 					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Añadir Producto
						</button>
					</div>
 				{{-- TODO: Cerrar formulario --}}
                </form>
			</div>
		</div>
	</div>
</div>
@stop