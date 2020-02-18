<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provedor;
class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $provedor= provedor::paginate(4);
        // dd prueba traer todos los datos
        //return dd($cliente);
        return view('provedor.index',compact('provedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provedor = new provedor;
        $provedor->name = $request->nombre;
        $provedor->location = $request->ubicacion;
        $provedor->save();
        return redirect()->route('provedor.index')->with('datos', 'Registro guardado Correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provedor=provedor::findOrFail($id);
        return view ('provedor.edit',compact('provedor'));
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
        $provedor=provedor::findOrFail($id);
        $provedor->name = $request->nombre;
        $provedor->location = $request->ubicacion;
        $provedor->save();
        return redirect()->route('provedor.index')->with('datos', 'Registro Actualizado Correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provedor = provedor::findOrFail($id);
        //return dd($cliente);
        $provedor->delete();
        return redirect()->route('provedor.index')->with('datos', 'Registro Eliminado Correctamente!');
    }

    public function confirm($id)
    {
        $provedor = provedor::findOrFail($id);
        return view('provedor.confirm', compact('provedor'));
    }
}
