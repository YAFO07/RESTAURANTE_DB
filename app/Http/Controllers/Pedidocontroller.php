<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pedido;

class Pedidocontroller extends Controller
{
    public function index(Request $request)
    {
        $Pedido=pedido::orderBy('id','id_cliente')->get();
        return [
            'Pedido'=>$Pedido
        ];
    }

    public function store(Request $request)
    {
        $Pedido = new pedido();
        $Pedido->id_cliente = $request->id_cliente;
        $Pedido->save();
    }

    public function update(Request $request)
    {
        $Pedido = pedido::findOrFail($request->id);
        $Pedido->id_cliente = $request->id_cliente;
        $Pedido->save();
    }
    public function destroy(Request $request)
    {
        $Pedido = pedido::findOrFail($request->id);
        $Pedido->id_cliente = $request->id_cliente;
        $Pedido->delete();
    }
}
