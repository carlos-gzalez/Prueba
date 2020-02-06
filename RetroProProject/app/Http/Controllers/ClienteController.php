<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente= cliente::paginate(4);
        // dd prueba traer todos los datos
        //return dd($cliente);
        return view('cliente.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // para verificar return dd($request);
        //return dd($request);
        $cliente= new cliente;
        $cliente->name= $request->nombre;
        $cliente->last_name= $request->apellido;
        $cliente->cc= $request->cedula;
        $cliente->city= $request->ciudad;
        $cliente->address= $request->direccion;
        $cliente->phone= $request->telefono;
        $cliente->birth= $request->fecha;
        $cliente->save();
        //return 'Registros guardados';
        return redirect()->route('cliente.index')->with('datos','Registro guardado Correctamente!');
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
        $cliente=cliente::findOrFail($id);
        return view ('cliente.edit',compact('cliente'));

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
        $cliente = cliente::findOrFail($id);
        //$cliente->fill($request->all());

        $cliente->name= $request->nombre;
        $cliente->last_name= $request->apellido;
        //$cliente->cc= $request->cedula;
        $cliente->city= $request->ciudad;
        $cliente->address= $request->direccion;
        $cliente->phone= $request->telefono;
        $cliente->birth= $request->fecha;

        $cliente->save();
        //return 'Registros guardados';
        return redirect()->route('cliente.index')->with('datos','Registro Actualizado Correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = cliente::findOrFail($id);
                //return dd($cliente);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('datos','Registro Eliminado Correctamente!');

    }
    public function confirm($id)
    {
        $cliente = cliente::findOrFail($id);
        return view('cliente.confirm',compact('cliente'));
    }
}
