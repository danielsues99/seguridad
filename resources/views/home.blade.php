@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        @include('admon')
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!') }}
                </div>
                <div class="form-group text-center">
                    <a href="{{ url('/customers') }}"><button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Clientes
                    </button></a>
                </div>
                <div class="form-group text-center">
                    <a href="{{ url('/alarms') }}"><button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Alarmas
                    </button></a>
                </div>
                <div class="form-group text-center">
                    <a href="{{ url('/camaras') }}"><button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Camaras
                    </button></a>
                </div>
                <div class="form-group text-center">
                    <a href="{{ url('/accesscontrols') }}"><button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Control de Acceso
                    </button></a>
                </div>
                <div class="form-group text-center">
                    <a href="{{ url('/intercoms') }}"><button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Videoporteros
                    </button></a>
                </div>
        </div>
    </div>
</div>
@endsection
