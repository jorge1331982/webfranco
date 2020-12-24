<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    use HasFactory;
    protected $fillable=['quien_recibe','quien_entrega','revision_calidad','vobo_salida','venta_id','produccion_id','fecha'];
}
