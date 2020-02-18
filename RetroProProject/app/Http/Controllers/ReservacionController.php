<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservacion;

class ReservacionController extends Controller
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
        $reservacion= reservacion::paginate(4);
        // dd prueba traer todos los datos
        //return dd($cliente);
        return view('reservacion.index',compact('reservacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservacion = new reservacion;
        $reservacion->id_customer = $request->id_customer;
        $reservacion->id_product = $request->id_product;
        $reservacion->save();
        return redirect()->route('reservacion.index')->with('datos', 'Registro guardado Correctamente!');
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
        $reservacion=reservacion::findOrFail($id);
        return view ('reservacion.edit',compact('reservacion'));
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
        $reservacion=reservacion::findOrFail($id);
        $reservacion->id_customer = $request->id_customer;
        $reservacion->id_product = $request->id_product;
        $reservacion->save();
        return redirect()->route('reservacion.index')->with('datos', 'Registro Actualizado Correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservacion = reservacion::findOrFail($id);
        //return dd($cliente);
        $reservacion->delete();
        return redirect()->route('reservacion.index')->with('datos', 'Registro Eliminado Correctamente!');
    }

    public function confirm($id)
    {
        $reservacion = reservacion::findOrFail($id);
        return view('reservacion.confirm', compact('reservacion'));
    }
}
