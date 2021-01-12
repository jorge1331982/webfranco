<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable =['fecha','Oservicio','Cliente','Tipo_Producto','tipo_servicio','tipo_unidad','vendedor','precio','comentarios','user_id','fechaentrega'];
    public function producciones(){
        return $this->hasMany(Produccion::class);
    }
  public function user(){
      return $this->belongsTo(User::class);
  }
  public function almacen(){
      return $this->hasMany(Almacen::class);
  }
  public function salidas(){
    return $this->hasMany(Salida::class);
}

}
