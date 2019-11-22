@extends('main')

@section('styles')

<link href="{{ asset('css/asociacion.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container h-100" id="page-container">

    <div class="row h-100 justify-content-center">

        <div class="col-md-5 col-12 text-center" id="main-title">
            <h1 class="text-white big-font">
                ¡Estamos para ayudarte!
            </h1>
        </div>

    </div>

    @if (count($asociaciones) > 0)

    <div class="row justify-content-center" id="dog-list">

        <div class="col-md-10 col-12 mb-3">
            <p class="text-white low-title text-center">Contáctanos</p>
            @foreach ($asociaciones as $asociacion)

            <div class="card mb-4 shadow mt-3">
                <div class="container dog-image rounded-lg"
                    style="background-image: url('storage/{{$asociacion->imagen_asociacion}}');">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $asociacion->nombre_asociacion }}</h5>
                    <p class="card-text">{{ $asociacion->actividades }}</p>
                    <a href="{{ url('asociacion/'.$asociacion->id) }}" class="btn logins">Más Información</a>
                </div>
            </div>

            @endforeach
        </div>


    </div>
    @else
    <div class="row justify-content-center" id="dog-list">

        <div class="col-md-10 col-12 mb-3">
            <h1 class="list-title text-white text-center">Aún no hay asociaciones disponibles</h1>
        </div>
    </div>
    @endif

</div>

@endsection