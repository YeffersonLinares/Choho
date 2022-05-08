<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\User;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    public function index(Request $request)
    {
        // return $request;
        $asesores = User::with(['clientes.pedidos.productos'])
            ->where(function ($query) use ($request) {
                if (!empty($request->id)) $query->find($request->id);
            })
            ->get()
            ->map(function ($value) {
                return [
                    'codigo_asesor' => $value->id,
                    'name' => $value->name,
                    'clientes_asignados' => $value->cliente_asignados,
                    'total_pedidos' => $value->total_pedidos,
                    'clientes' => $value->clientes?->map(function ($cliente) {
                        return [
                            'id_cliente' => $cliente->id,
                            'total_pedidos' => $cliente->total_pedidos,
                            'name' => $cliente->name,
                            'detalle_pedidos' => $cliente->pedidos?->map(function ($pedido) {
                                return [
                                    'id_pedido' => $pedido->id,
                                    'total_productos' => $pedido->total_productos,
                                    'total_pedido' => $pedido->total_pedido,
                                    'estado' => $pedido->estado,
                                    'fecha_pago' => $pedido->fecha_de_pago,
                                    'productos' => $pedido->productos?->map(function ($pedido) {
                                        return [
                                            'id_producto' => $pedido->id,
                                            'tipo' => $pedido->tipo,
                                            'cantidad' => $pedido->cantidad,
                                            'valor_unitario' => $pedido->valor_unitario,
                                            'total' => $pedido->cantidad * $pedido->valor_unitario,
                                        ];
                                    })
                                ];
                            })
                        ];
                    })
                ];
            });
        return response()->json([
            'asesores' => $asesores,
        ]);
    }
}
