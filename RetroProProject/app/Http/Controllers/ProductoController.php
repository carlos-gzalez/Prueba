<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = producto::paginate(4);
        // dd prueba traer todos los datos
        //return dd($cliente);
        return view('producto.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return dd($request);
        $producto = new producto;
        $producto->name = $request->nombre;
        $producto->brand = $request->marca;
        $producto->description = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->cost = $request->costo;
        $producto->save();
        return redirect()->route('producto.index')->with('datos', 'Registro guardado Correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=producto::findOrFail($id);
        return view ('producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = producto::findOrFail($id);
        //$producto = new producto;
        $producto->name = $request->nombre;
        $producto->brand = $request->brand;
        $producto->description = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->cost = $request->costo;
        $producto->save();
        return redirect()->route('producto.index')->with('datos', 'Registro Actualizado Correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::findOrFail($id);
        //return dd($cliente);
        $producto->delete();
        return redirect()->route('producto.index')->with('datos', 'Registro Eliminado Correctamente!');

    }

    public function confirm($id)
    {
        $producto = producto::findOrFail($id);
        return view('producto.confirm', compact('producto'));
    }


}
