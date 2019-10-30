@extends('main')

@section('styles')

#content {
    background: linear-gradient(rgba(22, 22, 22, 0.3), rgba(34, 34, 34, 1)), url('storage/stock/dogs_bg.jpg');
    /* background: url('storage/stock/main_bg.jpg'); */
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
}

.dog-image {
    width: 100%;
    height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
}

.card {
    background: #EEEEEE;
}

#child-content {
    height: 100%;
}

#main-title {
    padding-top: 210px;
    opacity: 0.7; 
}

.big-font {
    font-size: 3rem;
}

#dog-list {
    padding-top: 50px;
}

.list-title {
    font-size: 5rem;
}

body {
    background: #222222;
}

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
                    <div class="container dog-image rounded-lg" style="background-image: url('storage/{{$perro->imagen_perro}}');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $perro->nombre_perro }}</h5>
                        <p class="card-text">{{ $perro->descripcion_perro }}</p>
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