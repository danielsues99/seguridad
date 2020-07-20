@extends('layouts.accessnavbar')

@section('content')


    <div class="row" style="margin-top:20px">
 	<div class="col-md-offset-3 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Editar Control de Acceso
				</h3>
			</div>
 			<div class="panel-body" style="padding:30px">
				<form action="{{ url('accesscontrols/'.$accesscontrol['id']) }}" method="POST">
					<input type="hidden" name="_method" value="PUT">
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
					@csrf
					{{-- TODO: Protección contra CSRF --}}
    
    				<div class="form-group">
    					<label for="name">Nombre</label>
    					<input type="text" name="name" id="name" class="form-control" value="{{$accesscontrol['name']}}">
					</div>
 					<div class="form-group">
						{{-- TODO: Completa el input para la marca --}}
                        <label for="mark">Marca</label>
                        <input type="text" name="mark" id="mark" class="form-control" value="{{$accesscontrol['mark']}}">
					</div>
                    <div class="form-group">
						{{-- TODO: Completa el input para el modelo --}}
                        <label for="model">Modelo</label>
                        <input type="text" name="model" id="model" class="form-control" value="{{$accesscontrol['model']}}">
					</div>
					<div class="form-group">
    					<label for="imagen">Imagen</label>
    					<input type="text" name="imagen" id="imagen" class="form-control" value="{{$accesscontrol['imagen']}}">
					</div>
					<div class="form-group">
    					<label for="cost">Precio</label>
    					<input type="number" name="cost" id="cost" class="form-control" value="{{$accesscontrol['cost']}}">
					</div>
					<div class="form-group">
						<label for="description">Descripción</label>
						<textarea name="description" id="description" class="form-control" rows="3"> {{$accesscontrol['description']}}</textarea>
					</div>
 					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
							Actualizar
						</button>
					</div>
 				{{-- TODO: Cerrar formulario --}}
                </form>
			</div>
		</div>
	</div>
</div>
@endsection