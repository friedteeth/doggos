@extends('main')

@section('styles')

<link href="{{ asset('css/form_adopcion.style.css') }}" rel="stylesheet" type="text/css" >

@endsection

@section('content')

<div class="container h-100" id="page-container">

  <div class="row h-100 text-center">

    <div class="col-5 offset-1" id="main-title">

      <h1 class="text-white big-font">
        ¡Te podemos ayudar!
      </h1>

    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2">
        <h1 class="list-title text-white text-center">Llena tus datos y los del perro</h1>
        <form action="{{ url('adopcion') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
          {{ csrf_field() }}
          @include('common.errors')
          <br>
          <div class="card rounded-lg shadow">
            <div class="card-header">
              <h3>Datos Personales</h3>
            </div>
            <div class="card-body">
              <label for="nombreDueno">Nombre:</label>
              <input type="text" name="nombre_dueno" id="nombreDueno" class="form-control">
                    
              <label for="apellidosDueno">Apellidos:</label>
              <input type="text" name="apellidos_dueno" id="apellidosDueno" class="form-control">
      
              <label for="motivoAdopcion">Motivo:</label>
              <textarea name="motivo" id="motivoAdopcion" class="form-control" rows="3"></textarea>
            </div>
          </div>
          <br>
          <div class="card rounded-lg shadow">
            <div class="card-header">
              <h3>Datos de Contacto</h3>
            </div>
            <div class="card-body">
                <label for="telefonoDueno">Teléfono:</label>
                <input type="text" name="telefono_dueno" id="telefonoDueno" class="form-control">
            </div>
          </div>
          <br>
          <div class="card rounded-lg shadow">
            <div class="card-header">
              <h3>Datos del Perro</h3>
            </div>
            <div class="card-body">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre_perro" id="nombre-perro" class="form-control">
              <label for="descripcion">Descripción:</label>
              <textarea name="descripcion_perro" id="descripcion-perro" class="form-control" rows="3"></textarea>
              <label for="imagen">Imagen:</label>
              <div class="custom-file">
                <input type="file" name="imagen_perro" id="imagen-perro" class="custon-file-input">
              </div>
              
            </div>
          </div>
          <br>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-xl logins shadow">
              Dar en adopción
            </button>
          </div>
      
        </form>
    </div>
  </div>
</div>
    
  

  
@endsection