@extends('layouts.cotizacionnavbar')

@section('content')


    <div class="row" style="margin-top:20px">
 	<div class="col-md-offset-3 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title text-center">
					<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
					Consultar cliente
				</h3>
			</div>
			 <div class="panel-body" style="padding:30px">
				<form>
                    {{-- TODO: Abrir el formulario e indicar el método POST --}}
                        @csrf
                        {{-- TODO: Protección contra CSRF --}}
						<div align="center">
							<?php
                            $docconsulta = $_POST['customerdocument'];
                            echo '¿Generar consulta para '.$docconsulta .'?';
						?>
						</div>
						<div align="center">
							<a class="btn btn-success" href="{{ url('cotizacions/'.$_POST['customerdocument'].'/consulta') }}"><span class="glyphicon glyphicon-pencil"></span> Consultar</a>
						<a class="btn btn-warning" href="{{ url('cotizacions/') }}"><span class="glyphicon glyphicon-pencil"></span> Volver</a>
						</div>		
                     {{-- TODO: Cerrar formulario --}}
                    </form>
			</div>
		</div>
	</div>
</div>
@endsection