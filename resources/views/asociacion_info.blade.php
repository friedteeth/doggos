@extends('main')

@section('styles')

<link href="{{ asset('css/asociacion_info.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container h-100">
    <div class="row align-items-center h-100">

        <div class="col-5">
            <img src="{{ url('storage/'.$asociacion->imagen_asociacion) }}"
                class="img-thumbnail rounded-lg shadow imagen-perro p-0 m-0">
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