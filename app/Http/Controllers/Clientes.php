<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Clientes extends Controller
{
    public function index() {
        $titulo = 'Registrar usuario';
        return view('modules/client/index', compact('titulo'));
    }
    public function agregarUsuario(Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect()->route('auth-login');
    }
}
