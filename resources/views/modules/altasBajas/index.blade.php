@extends('../../layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Altas y bajas</h2>
                <a href="{{ route('create') }}" class="btn btn-primary">Agregar registro</a>
                <hr>
                <table class="table table-sm table-hover" id="tabla-altas-bajas">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Descripcion</th>
                            <th>Fecha</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->tipo }}</td>
                                <td>{{ $item->categoria }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('show',  $item->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-square-minus"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function(){
                $('#tabla-altas-bajas').DataTable();
            })
        </script>   
    @endpush

@endsection