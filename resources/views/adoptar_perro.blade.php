@extends('main')

@section('content')

<div class="container-fluid">
  
  {{-- @if (count($perro)) --}}
        <div class="panel panel-default">
            <div class="panel-heading">
                Este es un perro unico
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Perro</th>
                        <th>Decripcion</th>
                        <th>Imagen</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $perro->nombre_perro }}</div>
                                </td>

                                <td>
                                    <div>{{ $perro->descripcion_perro }}</div>
                                </td>
                                <td>
                                    <img src="{{ url('storage/'.$perro->imagen_perro) }}" style="width: 100px;">
                                </td>
                            </tr>
                    </tbody>
                </table>
                <a href="" class="btn btn-primary">Conocelo Ahora!</a>
                <div>
                    <h2>Informacion de contacto:</h2>
                    <h4>{{ $adopcion->telefono_dueno }}</h4>
                    <h2>Nombre:</h2>
                    <p>
                    {{ $adopcion->nombre_dueno }}
                    {{ $adopcion->apellidos_dueno }}
                </p>
                </div>
            </div>
        </div>
    {{-- @endif --}}

</div>

@endsection