<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable=['cotizacion','fecha','id_cliente','empresa','contacto','tipo_unidad','telefono1','correo','medio','asesor','tipo_servicio','productos'];
    public function registros(){
        return $this->hasMany(Seguimiento::class);
    }
}
