<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreProveedor',
        'contacto',
        'direccion',
        'paginaWeb',
    ];
    public function productos()
    {
        return $this->hasMany(Productos::class);
    }
}
