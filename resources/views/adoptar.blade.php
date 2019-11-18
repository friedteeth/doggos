@extends('main')

@section('styles')

<link href="{{ asset('css/adoptar.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container h-100" id="page-container">

    <div class="row h-100 text-center">

        <div class="col-5 offset-1" id="main-title">
            <h1 class="text-white big-font">
                ¡Encontremos a tu nuevo amigo!
            </h1>
        </div>

    </div>

    @if (count($perros) > 0)

    <div class="row" id="dog-list">

        <div class="col-10 offset-1 mb-3">
            <h1 class="list-title text-white text-center">Un perro para todos</h1>
            @foreach ($perros as $perro)

            <div class="card mb-4 shadow mt-3">
                <div class="container dog-image rounded-lg"
                    style="background-image: url('storage/{{$perro->imagen_perro}}');">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $perro->nombre_perro }}</h5>
                    <p class="card-text">{{ $perro->comportamiento }}</p>
                    <a href="{{ url('adoptar/'.$perro->id) }}" class="btn logins">Más Información</a>
                </div>
            </div>

            @endforeach
        </div>


    </div>
    @else
    <div class="row" id="dog-list">

        <div class="col-10 offset-1 mb-3">
            <h1 class="list-title text-white text-center">Aún no hay perros disponibles</h1>
        </div>
    </div>
    @endif

</div>

@endsection