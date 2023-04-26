@extends('../../layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Actualizar nuevo registro</h2>
                <form action="">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control">
                        <option value="">Selecciona una opcion</option>
                        @if ($items->tipo == 'Pago')
                            <option selected value="Pago">Pago</option>
                        @else
                            <option value="Pago">Pago</option>
                        @endif
                        @if ($items->tipo == 'Gasto')
                            <option selected value="Gasto">Gasto</option>
                        @else
                            <option value="Gasto">Gasto</option>
                        @endif
                    </select>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" class="form-select">
                            <option value="">Selecciona una opcion</option>
                        @foreach ($categorias as $item)
                            @if ($items->categoria == $item->nombre)
                            <option selected value="{{$item->nombre}}">{{$item->nombre}}</option>
                            @endif
                            <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $items->cantidad }}">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion">{{ $items->descripcion }}</textarea>
                    
                    <button class="btn btn-warning mt-3">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection