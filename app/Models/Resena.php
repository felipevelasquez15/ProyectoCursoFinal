<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;
    protected $fillable = array('asunto','descripcion','user_id');

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');//Esta relación facilita el acceso a los datos del usuario asociado a una reseña y permite realizar operaciones relacionadas, como obtener el nombre del usuario o cualquier otro atributo del modelo User
    }
}

