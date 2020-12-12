<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\plato;

class Platocontroller extends Controller
{
    public function index(Request $request)
    {
        $Plato=plato::orderBy('id','nombre ','costo','cantidad')->get();
        return [
            'Plato'=>$Plato
        ];
    }

    public function store(Request $request)
    {
        $Plato = new plato();
        $Plato->nombre = $request->nombre;
        $Plato->costo = $request->costo;
        $Plato->cantidad = $request->cantidad;
        $Plato->save();
    }

    public function update(Request $request)
    {
        $Plato = plato::findOrFail($request->id);
        $Plato->nombre = $request->nombre;
        $Plato->costo = $request->costo;
        $Plato->cantidad = $request->cantidad;
        $Plato->save();
    }
    public function destroy(Request $request)
    {
        $Plato = plato::findOrFail($request->id);
        $Plato->nombre = $request->nombre;
        $Plato->costo = $request->costo;
        $Plato->cantidad = $request->cantidad;
        $Plato->delete();
    }
}
