<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\det_pedido;

class Det_pedidocontroller extends Controller
{
    public function index(Request $request)
    {
        $Det_pedido=det_pedido::orderBy('id','id_cliente')->get();
        return [
            'Det_pedido'=>$Det_pedido
        ];
    }

    public function store(Request $request)
    {
        $Det_pedido = new det_pedido();
        $Det_pedido->id_cliente = $request->id_cliente;
        $Det_pedido->save();
    }

    public function update(Request $request)
    {
        $Det_pedido = det_pedido::findOrFail($request->id);
        $Det_pedido->id_cliente = $request->id_cliente;
        $Det_pedido->save();
    }
    public function destroy(Request $request)
    {
        $Det_pedido = det_pedido::findOrFail($request->id);
        $Det_pedido->id_cliente = $request->id_cliente;
        $Det_pedido->delete();
    }
}
