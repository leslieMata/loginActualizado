@extends('../../layouts/main_login')
@section('contenido')
    <div class="container">
        <div class="row">
            <h2 class="text-center">Agregar Usuario</h2>
            <div class="col">
                <form action="{{ route('usuario') }}" method="post">
                    @csrf
                    @method('POST')
                    <label for="">Usuario</label>
                    <input type="text" name="name" class="form-control" required>
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <button  class="btn btn-primary mt-3">Registrar</button>
                    <a href="{{ route('auth-login') }}" class="btn btn-secondary mt-3">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection