@extends('main')

@section('styles')

<link href="{{ asset('css/adoptar_perro.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container-fluid h-100">
    <div class="row align-items-center h-100">
        <div class="col-12 text-center">
            <h1 class="dog-title">
                {{ $perro->nombre_perro ?? 'Perro sin nombre' }}
            </h1>
        </div>

        <div class="col-md-4 col-12 pb-3">
            <img src="{{ url('storage/'.$perro->imagen_perro) }}"
                class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-md-8 col-12 pr-3">
            <div class="row pb-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <h4>Complexión:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $perro->complexion }}
                    </li>
                </div>
                <div class="col-md-8 col-sm-6 col-12">
                    <h4>Descripción de colores:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $perro->descripcion_color }}
                    </li>
                </div>
            </div>
            <div class="row pb-3">
                @if ($perro->esterilizado == 1 || $perro->vacunado == 1 || $perro->desparasitado == 1)
                    <div class="col">
                        <h4>Estado:</h4>
                        <ul class="list-group">
                            @if ($perro->esterilizado == 1)
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    Esterilizado
                                </li>
                            @endif
                            @if ($perro->desparasitado == 1)
                                <li class="list-group-item bg-transparent rounded shadow mb-1">
                                    Desparasitado
                                </li>
                            @endif
                            @if ($perro->vacunado == 1)
                                <li class="list-group-item bg-transparent rounded shadow">
                                    Vacunado
                                </li>
                            @endif
                        </ul>
                    </div>
                @endif
                @if(!is_null($perro->edad))
                <div class="col">
                    <h4>Edad:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $perro->edad }} meses
                    </li>
                </div>
                @endif
                <div class="col">
                    <h4>Género:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $perro->genero }}
                    </li>
                </div>
            </div>
            <div class="row pb-3">
                @if(!is_null($perro->comportamiento))
                <div class="col">
                    <h4>Comportamiento:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $perro->comportamiento }}
                    </li>
                </div>
                @endif
                @if(!is_null($perro->otros_detalles))
                <div class="col">
                    <h4>Otros detalles:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $perro->otros_detalles }}
                    </li>
                </div>
                @endif
            </div>
            @if(!is_null($adopcion->requisito))
            <div class="row pb-3">
                <div class="col">
                    <h4>Requisitos para adopción:</h4>
                    <li class="list-group-item bg-transparent rounded shadow">
                        {{ $adopcion->requisito }}
                    </li>
                </div>
            </div>
            @endif

            <br><br>
            <a href="{{ url()->previous() }}" class="btn logins-return">Regresar</a>
            <button type="button" class="btn logins" data-toggle="modal" data-target="#mod">
                ¡Adóptame!
            </button>
        </div>

        <div class="modal fade h-100" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    @guest
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Espera un momento...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Debes estar registrado para conocer los datos de contacto del dueño.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('login') }}" class="btn logins">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="btn logins">Crear cuenta</a>
                        <button type="button" class="btn logins-return" data-dismiss="modal">Cerrar</button>
                    </div>
                    @else
                        <div class="modal-header info-title">
                            <h2 class="modal-title text-white" id="exampleModalLabel">Información de contacto</h2>
                            
                        </div>
                        <div class="modal-body">
                            <h5>Nombre del dueño:</h5>
                            <li class="list-group-item bg-transparent rounded shadow mb-3">
                                {{ $dueno }}
                            </li>
                            <h5>Teléfono:</h5>
                            <li class="list-group-item bg-transparent rounded shadow">
                                {{ $adopcion->telefono_dueno }}
                            </li>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" type="button" class="btn logins-return">Cerrar</button>
                        </div>

                    @endguest

                </div>
            </div>
        </div>
    </div>

</div>

@endsection