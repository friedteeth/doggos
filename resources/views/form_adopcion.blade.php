@extends('main')

@section('content')

<div class="container-fluid">

    
  @include('common.errors')

  <form action="/adopcion" method="post" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre-perro" class="form-control">
      <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion" id="descripcion-perro" class="form-control">
    </div>

    <div class="form-gorup">
      <button type="submit" class="btn btn-dark">
        Dar en adopcion
      </button>
    </div>

  </form>

</div>

@endsection