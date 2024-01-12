<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'auto_id',
        'marca',
        'modelo',
        'anio',
        'precio',
        'descripcion',
        'imagen',
        // Otros campos que puedas necesitar en la tabla de compras
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Auto
    public function auto()
    {
        return $this->belongsTo(Auto::class);
    }
}
