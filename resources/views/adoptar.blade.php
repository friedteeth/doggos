@extends('main')

@section('content')

<div class="container-fluid">
  
  @if (count($perros) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Perros en adopcion
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Perro</th>
                        <th>Decripcion</th>
                        <th>Imagen</th>
                        <th></th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($perros as $perro)
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
                                <td>
                                <a class="btn btn-primary" href="{{ url('adoptar/'.$perro->id) }}">Mas informacion</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="panel panel-default">
            <h3>Aun no hay perro en adopcion viejo.</h3>
        </div>
    @endif

</div>

@endsection