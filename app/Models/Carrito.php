<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = array('user_id','auto_id','name','email','marca','modelo','anio','precio','descripcion','imagen');

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function auto()
    {
        return $this->belongsTo(Auto::class, 'auto_id');
    }
}
