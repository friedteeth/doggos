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
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($perros as $perro)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $perro->nombre }}</div>
                                </td>

                                <td>
                                    <div>{{ $perro->descripcion }}</div>
                                </td>
                                <td>
                                    <img src="storage/crying.jpg" style="width: 100px;">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

</div>

@endsection