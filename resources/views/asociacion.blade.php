@extends('main')

@section('styles')

<link href="{{ asset('css/asociacion.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container h-100" id="page-container">

    <div class="row h-100 text-center">

        <div class="col-5 offset-1" id="main-title">
            <h1 class="text-white big-font">
                ¡Estamos para ayudarte!
            </h1>
        </div>

    </div>

    @if (count($asociaciones) > 0)

    <div class="row" id="dog-list">

        <div class="col-10 offset-1 mb-3">
            <h1 class="list-title text-white text-center">Contactanos</h1>
            @foreach ($asociaciones as $asociacion)

            <div class="card mb-4 shadow mt-3">
                <div class="container dog-image rounded-lg"
                    style="background-image: url('storage/{{$asociacion->imagen_asociacion}}');">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $asociacion->nombre_asociacion }}</h5>
                    <p class="card-text">{{ $asociacion->actividades }}</p>
                    <a href="{{ url('asociacion/'.$asociacion->id) }}" class="btn logins">Más Informacion</a>
                </div>
            </div>

            @endforeach
        </div>


    </div>
    @else
    <div class="row" id="dog-list">

        <div class="col-10 offset-1 mb-3">
            <h1 class="list-title text-white text-center">Aún no hay asociaciones disponibles</h1>
        </div>
    </div>
    @endif

</div>

@endsection