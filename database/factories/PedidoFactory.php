<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'total_productos' => 50,
            'total_pedido' => 40000,
            'estado' => "Pagado",
            'fecha_de_pago' => now(),
            'id_cliente' => cliente::factory(),
        ];
    }
}
