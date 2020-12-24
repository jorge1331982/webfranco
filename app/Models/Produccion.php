<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;
    protected $fillable =['fechaP','folio','tipo_unidad','marca','modelo','year','serie','tipo_trabajo','serie_caja','venta_id' ];

    public function salidas(){
        return $this->hasMany(Salida::class);
    }

}
