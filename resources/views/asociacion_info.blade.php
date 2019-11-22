@extends('main')

@section('styles')

<link href="{{ asset('css/asociacion_info.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container-fluid h-100">
    <div class="row align-items-center h-100">
        <div class="col-12 text-center">
            <h1 class="dog-title">
                {{ $asociacion->nombre_asociacion }}
            </h1>
        </div>

        <div class="col-md-4 col-12 pb-3">
            <img src="{{ url('storage/'.$asociacion->imagen_asociacion) }}"
                class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-md-8 col-12 pr-3">
            <div class="row pb-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <h4>Teléfono:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $asociacion->telefono }}
                    </li>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <h4>Actividades:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $asociacion->actividades }}
                    </li>
                </div>
            </div>
            <div class="row pb-3">
                @if (!is_null($asociacion->facebook) || !is_null($asociacion->twitter) || !is_null($asociacion->correo) || !is_null($asociacion->pag_web))
                    <div class="col">
                        <h4>Otros contactos:</h4>
                        <ul class="list-group">
                            @if (!is_null($asociacion->facebook))
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    <a href="{{ $asociacion->facebook }}" class="text-primary stretched-link">{{ $asociacion->facebook }}</a>
                                </li>
                            @endif
                            @if (!is_null($asociacion->twitter))
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    <a href="{{ $asociacion->twitter }}" class="text-primary stretched-link">{{ $asociacion->twitter }}</a>
                                </li>
                            @endif
                            @if (!is_null($asociacion->correo))
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    <a href="mailto:{{ $asociacion->correo }}" class="text-primary stretched-link">{{ $asociacion->correo }}</a>
                                </li>
                            @endif
                            @if (!is_null($asociacion->pag_web))
                                <li class="list-group-item bg-transparent rounded shadow">
                                    <a href="{{ $asociacion->pag_web }}" class="text-primary stretched-link">{{ $asociacion->pag_web }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                @endif
            </div>
            
            <div class="row pb-3">
                <div class="col">
                    <h4>Datos de donación:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $asociacion->inf_donativos }}
                    </li>
                </div>
            </div>

            <br><br>
            <a href="{{ url()->previous() }}" class="btn logins-return">Regresar</a>
        </div>
    </div>
    @endsection