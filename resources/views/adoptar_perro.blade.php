@extends('main')

@section('styles')

#child-content {
    height: 100%;
    background: #EEEEEE;
}

.modal {
    text-align: center;
}

.modal-open {
    overflow: hidden;
}

.modal-dialog {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
}

.imagen-perro {
    width: 100%;
    height: 100%;
}

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
                </div>
            </div>
        </div>
    </div>

</div>



@endsection