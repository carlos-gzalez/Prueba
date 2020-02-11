<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetroPro extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function galeria()
    {
        return view('template.galeria');
    }

    public function servicios()
    {
        return view('template.servicios');
    }

    public function nosotros()
    {
        return view('template.nosotros');
    }

    public function contacto()
    {
        return view('template.contacto');
    }
}
