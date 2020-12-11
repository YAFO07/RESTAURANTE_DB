<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class Clientecontroller extends Controller
{
    public function index(Request $request)
    {
        $Cliente=cliente::orderBy('id','nombre ','direccion',"telefono","email")->get();
        return [
            'Cliente'=>$Cliente
        ];
    }

    public function store(Request $request)
    {
        $Cliente = new cliente();
        $Cliente->color = $request->color;
        $Cliente->marca = $request->marca;
        $Cliente->save();
    }

    public function update(Request $request)
    {
        $Cliente = Clienteliente::findOrFail($request->id);
        $Cliente->color = $request->color;
        $Cliente->marca = $request->marca;
        $Cliente->save();
    }
    public function destroy(Request $request)
    {
        $Cliente = cliente::findOrFail($request->id);
        $Cliente->color = $request->color;
        $Cliente->delete();
    }
}
