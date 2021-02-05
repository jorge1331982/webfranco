<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registo extends Model
{
    use HasFactory;
    protected $fillable=['fecha','empresa','mes','vendedor','seriep','cliente','producto','estatus','fechaentradaProduccion','fechaProgramadaEntrega','fechaEntrega','control_id'];
    public function controls(){
        return $this->hasMany(Control::class);
    }
}
