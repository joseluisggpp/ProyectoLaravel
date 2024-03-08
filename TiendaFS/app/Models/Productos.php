<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipoProducto',
        'imagen',
        'proveedores_idProveedor',
        'descripcion',
        'precio',
        'stock',
    ];

    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class);
    }
}
