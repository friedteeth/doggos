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
            <img src="{{ url('storage/'.$asociacion->imagen_asociacion) }}" class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
        </div>
        <div class="col-7">
            <h1>Conoce más sobre {{ $asociacion->nombre_asociacion }}</h1>
            {{ $asociacion->nombre_asociacion }}
            {{ $asociacion->desc_asociacion }}
            <br><br>
            <a href="{{ url()->previous() }}" class="btn logins-return">Regresar</a>
        </div>
</div>
@endsection