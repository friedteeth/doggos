@extends('main')

@section('content')

<div class="container-fluid d-flex justify-content-center">

  <div class="card w-50">

    <h5 class="card-header text-center">
      ¡Conozcamonos!
    </h5>

    <div class="card-body">

      <form action="{{ url('adopcion') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h5>Datos Personales</h5>
        <br>
        
        <label for="nombreDueno">Nombre:</label>
        <input type="text" name="nombre_dueno" id="nombreDueno" class="form-control">
              
        <label for="apellidosDueno">Apellidos:</label>
        <input type="text" name="apellidos_dueno" id="apellidosDueno" class="form-control">

        <label for="motivoAdopcion">Adopcion:</label>
        <input type="text" name="motivo" id="motivoAdopcion" class="form-control">

        <br>
        <h5>Datos de Contacto</h5>
        <br>
        
        <label for="telefonoDueno">Telefono:</label>
        <input type="text" name="telefono_dueno" id="telefonoDueno" class="form-control">
        
        <br>
        <h5>Datos del Perro</h5>
        <br>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre_perro" id="nombre-perro" class="form-control">
        <label for="descripcion">Descripcion:</label>
        <input type="text" name="descripcion_perro" id="descripcion-perro" class="form-control">
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen_perro" id="imagen-perro" class="form-control">
        
        <div class="form-gorup">
          <button type="submit" class="btn btn-dark">
            Dar en adopcion
          </button>
        </div>
    
      </form>

    </div>

  </div>

    
  @include('common.errors')


</div>
  
@endsection