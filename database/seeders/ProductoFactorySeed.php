<?php

namespace Database\Seeders;

use App\Models\ProductoPedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoFactorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [1,2,3,4,5];

        foreach ($array as $row) {
            $pivot = new ProductoPedido();
            $pivot->id_pedido = $row;
            $pivot->id_producto = $row;
            $pivot->cantidad = 2;
            $pivot->save();
        }
    }
}
