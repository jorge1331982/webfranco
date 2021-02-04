<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LLamada extends Model
{
    use HasFactory;
    protected $fillable=['fecha','empresa','contacto','telefono','correo','medio','requerimiento','comentario','asesor'];
}
