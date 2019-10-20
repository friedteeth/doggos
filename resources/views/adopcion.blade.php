@extends('main')

@section('content')

    <div class="container-fluid">
        <h1 class="mt-4">¡Felicidades! Tu perro
            {{ $nombre }}
            ahora esta en estado de adopcion</h1>
        <p>
            Solo falta esperar y ver si alguien quiere tu chingadera.
        </p>
        <p>
            Otro perro que quieras dar en adopcion?
        </p>
        <form action="/form_adopcion">
            <button type="submit" class="btn btn-dark"> 
                Haz click aqui
            </button>
        </form>
    </div>

@endsection