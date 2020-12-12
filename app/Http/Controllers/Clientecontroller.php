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
        $Cliente->nombre = $request->nombre;
        $Cliente->direccion = $request->direccion;
        $Cliente->telefono = $request->telefono;
        $Cliente->email = $request->email;
        $Cliente->save();
    }

    public function update(Request $request)
    {
        $Cliente = cliente::findOrFail($request->id);
        $Cliente->nombre = $request->nombre;
        $Cliente->direccion = $request->direccion;
        $Cliente->telefono = $request->telefono;
        $Cliente->email = $request->email;
        $Cliente->save();
    }
    public function destroy(Request $request)
    {
        $Cliente = cliente::findOrFail($request->id);
        $Cliente->nombre = $request->nombre;
        $Cliente->direccion = $request->direccion;
        $Cliente->telefono = $request->telefono;
        $Cliente->email = $request->email;
        $Cliente->delete();
    }
}
