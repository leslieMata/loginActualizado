@extends('../../layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Eliminar un registro</h2>
                <ul>
                    <li>Tipo: {{ $items->tipo }}</li>
                    <li>Categoria: {{ $items->categoria }}</li>
                    <li>Cantidad: {{ $items->cantidad }}</li>
                    <li>Descripcion: {{$items->descripcion}}</li>
                    <li>Fecha:{{ $items->created_at }} </li>
                </ul>
                <hr>
                <form action="{{ route('destroy', $items->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Eliminar registro</button>
                </form>
            </div>
        </div>
    </div>
@endsection