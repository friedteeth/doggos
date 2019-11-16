@extends('main')

@section('styles')

<link href="{{ asset('css/adopcion.style.css') }}" rel="stylesheet" type="text/css" >

@endsection

@section('content')

<div class="container h-100" id="page-container">

  <div class="row h-100 text-center">

    <div class="col-5 offset-1" id="main-title">

        <h1 class="mt-4 text-white">¡Felicidades! Tu perro
            {{ $nombre }}
            ahora esta en estado de adopción</h1>
        <p class="text-white">
            ¿Otro perro que quieras dar en adopción?
        </p>
        <a href="{{ url('adopcion') }}" class="btn btn-xl logins">
            Haz clic aquí
        </a>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2">
        
    </div>
  </div>
</div>

@endsection