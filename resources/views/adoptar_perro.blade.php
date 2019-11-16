@extends('main')

@section('styles')

<link href="{{ asset('css/adoptar_perro.style.css') }}" rel="stylesheet" type="text/css" >

@endsection

@section('content')

<div class="container h-100">
    <div class="row align-items-center h-100">
    
        <div class="col-5">
            <img src="{{ url('storage/'.$perro->imagen_perro) }}" class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-7">
            <h1>Conoce más sobre {{ $perro->nombre_perro }}</h1>
            {{ $perro->nombre_perro }}
            {{ $perro->descripcion_perro }}
            <br><br>
            <a href="{{ url()->previous() }}" class="btn logins-return">Regresar</a>
            <button type="button" class="btn logins" data-toggle="modal" data-target="#exampleModal">
                ¡Adóptame!
            </button>
        </div>

        <div class="modal fade h-100" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            Debes estar registrado para conocer información de adopción.
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
                            <a href="{{ route('register') }}" class="btn btn-primary">Crear cuenta</a>
                            <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Cerrar</button>
                        </div>
                    @else
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Información del dueño</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Nombre:</h3>
                            <p>
                                {{ $adopcion->nombre_dueno }}
                                {{ $adopcion->apellidos_dueno }}
                            </p>
                            <h3>Teléfono:</h3>
                            <p>{{ $adopcion->telefono_dueno }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary text-center" data-dismiss="modal">Cerrar</button>
                        </div>
                    
                    @endguest

                </div>
            </div>
        </div>
    </div>

</div>



@endsection