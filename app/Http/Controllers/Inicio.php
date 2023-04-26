<?php

namespace App\Http\Controllers;

use App\Models\AltaBaja;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class Inicio extends Controller
{
    public function __construct()
    {
       $this->middleware(['auth'])->only(['index']); 
    }
    
    public function index() {
        $titulo = 'Inicio';
        $pagos = AltaBaja::where('tipo', '=', 'Pago')->sum('cantidad');
        $gastos = AltaBaja::where('tipo', '=', 'Gasto')->sum('cantidad');
        return view('modules/inicio/index', compact('titulo', 'pagos', 'gastos'));
    }
}
