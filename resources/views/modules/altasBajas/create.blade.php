@extends('../../layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Agregar nuevo registro</h2>
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    @method('POST')
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="">Selecciona una opcion</option>
                        <option value="Pago">Pago</option>
                        <option value="Gasto">Gasto</option>
                    </select>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select">
                            <option value="">Selecciona una opcion</option>
                        @foreach ($items as $item)
                            <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
                    
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection