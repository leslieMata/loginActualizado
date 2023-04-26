@extends('../../layouts/main_login')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Login de usuario</h3>
            <form action="{{ route('logear') }}" method="post">
                @csrf
                @method('POST')
                <label for="">Usuario</label>
                <input type="text" class="form-control" name="name" required>
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" required>
                <button class="btn btn-primary mt-3"> Entrar</button>
            </form>
        </div>
    </div>
</div>
@endsection