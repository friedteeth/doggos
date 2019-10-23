@extends('main')

@section('content')

<div class="container-fluid">
  <h1 class="mt-4">Ver lista de asociaciones</h1>
</div>
<div class="panel-body">
    <table class="table table-striped task-table">

        <!-- Table Headings -->
        <thead>
            <th>Nombre</th>
            <th>Decripcion</th>
            <th>Imagen</th>
            <th></th>
        </thead>
<!-- Table Body -->
<tbody>
  @foreach ($asociacion as $asociacion)
      <tr>
          <!-- Task Name -->
          <td class="table-text">
              <div>{{ $asociacion->nombre_asociacion }}</div>
          </td>
          <td>
              <div>{{ $asociacion->desc_asociacion }}</div>
          </td>
          <td>
            <img src="{{ url('storage/'.$asociacion->imagen_asociacion) }}" style="width: 100px;">
          </td>

          <td>
          <a class="btn btn-primary" href="{{ url('asociacion/'.$asociacion->id) }}">Mas informacion</a>
          </td>
      </tr>
  @endforeach
</tbody>

@endsection