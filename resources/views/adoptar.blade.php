@extends('main')

@section('styles')

.dog-image {
    width: 100%;
    height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
}

.card {
    background: #D6FADF;
}

@endsection

@section('content')

<div class="container">
  
  @if (count($perros) > 0)

        <div class="row">

            <div class="col-10 offset-1">
                @foreach ($perros as $perro)
                
                    <div class="card mb-3 shadow">
                        <div class="container dog-image rounded-lg" style="background-image: url('storage/{{$perro->imagen_perro}}');">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $perro->nombre_perro }}</h5>
                            <p class="card-text">{{ $perro->descripcion_perro }}</p>
                            <a href="{{ url('adoptar/'.$perro->id) }}" class="btn btn-primary">Mas Informacion</a>
                        </div>
                    </div>
    
                @endforeach
            </div>


        </div>
    @else
        
    @endif

</div>

@endsection