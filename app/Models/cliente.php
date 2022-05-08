<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $hidden = ['codigo_asesor'];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'id_cliente');
    }
}
