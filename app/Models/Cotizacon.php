<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacon extends Model
{
    use HasFactory;
    protected $fillable=['fecha','folio','n_cliente','correo','telefono','producto','imagen','asesor','largo','ancho','alto','sugeridos','calibres','intandext','techo','precio','accesorios','copete','tipo'];
   
}
