@extends('layouts.customernavbar')

@section('content')

    <div class="row" style="margin-top:20px">
 	<div class="col-md-offset-3 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Actualizar datos de Cliente
				</h3>
            </div>
            <div class="panel-body" style="padding:30px">
                <form action="{{ url('customers/'.$customer['id']) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                {{-- TODO: Abrir el formulario e indicar el método POST --}}
                    @csrf
                    {{-- TODO: Protección contra CSRF --}}
    
                    <div class="form-group">
                        <label for="name">Nombre del Cliente</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$customer['name']}}">
                    </div>
                     <div class="form-group">
                        {{-- TODO: Completa el input para el documento --}}
                        <label for="document">NIT o Documento</label>
                        <input type="number" name="document" id="document" class="form-control" value="{{$customer['document']}}">
                    </div>
                    <div class="form-group">
						{{-- TODO: Completa el input para el tipo de documento --}}
						<label for="typedocument" id="typedocument">Tipo de Documento</label>
						<select name="typedocument" class="custom-select" value="{{$customer['typedocument']}}">
							<option value="Nit">NIT</option>
							<option value="Cedula">Cédula de ciudadanía</option>
						  </select>
					</div>
                     <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{$customer['phone']}}">
                        {{-- TODO: Completa el input para el telefono --}}
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$customer['email']}}">
						{{-- TODO: Completa el input para el correo --}}
					</div>
					<div class="form-group">
    					<label for="address">Dirección</label>
    					<input type="text" name="address" id="address" class="form-control" value="{{$customer['address']}}">
					</div>
					<div class="form-group">
    					<label for="city">Ciudad</label>
    					<input type="text" name="city" id="city" class="form-control" value="{{$customer['city']}}">
					</div>
                     <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Actualizar cliente
                        </button>
                    </div>
                 {{-- TODO: Cerrar formulario --}}
                </form>
            </div>

@endsection