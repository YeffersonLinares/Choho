<?php

namespace Database\Seeders;

use App\Models\Pedidos;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pedidos::factory(5)->create();
        Producto::factory(5)->create();
        $this->call(ProductoFactorySeed::class);
        // User::factory(5)->create();
        // cliente::factory(5)->create();
    }
}
