@extends('main')

@section('styles')

<link href="{{ asset('css/adoptar.style.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<div class="container h-100" id="page-container">

    <div class="row h-100 justify-content-center">

        <div class="col-md-5 col-12 text-center" id="main-title">
            <h1 class="text-white big-font">
                ¡Encontremos a tu nuevo amigo!
            </h1>
        </div>

    </div>

    @if (count($perros) > 0)

    <div class="row justify-content-center" id="dog-list">

        <div class="col-md-10 col-12 mb-3">
            <p class="text-white low-title text-center">Un perro para todos</p>
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

        <div class="col-md-10 col-12 mb-3">
            <h1 class="list-title text-white text-center">Aún no hay perros disponibles</h1>
        </div>
    </div>
    @endif

</div>

@endsection