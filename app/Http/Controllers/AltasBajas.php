<?php

namespace App\Http\Controllers;

use App\Models\AltaBaja;
use App\Models\Categoria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AltasBajas extends Controller
{
    public function __construct()
    {
       $this->middleware(['auth'])->only(['index']); 
    }

    public function index()
    {
        $items = AltaBaja::all();
        $titulo = 'Altas y Bajas';
        return view('modules/altasBajas/index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar alta o baja';
        $items = Categoria::all();
        return view('modules/altasBajas/create', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new AltaBaja();
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->save();
        Alert::success('Exito!', 'Se inserto con exito el registro nuevo!');
        return redirect()->route('altasBajas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = 'Eliminar registro';
        $items = AltaBaja::find($id);
        return view('modules/altasBajas/show', compact('titulo', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Editar alta o baja';
        $items = AltaBaja::find($id);
        $categorias = Categoria::all();

        return view('modules/altasBajas/edit', compact('titulo', 'items', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = AltaBaja::find($id);
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->save();
        Alert::success('Exito!', 'Se actualizo con exito el registro!');
        return redirect()->route('altasBajas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = AltaBaja::find($id);
        $item->delete();
        Alert::success('Exito!', 'Se elimino con exito el registro!');
        return redirect()->route('altasBajas');
    }
}
