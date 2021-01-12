<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable=['fechac','Ocompra','provedorc','nombreM','cantidadM','fechaLL','precio'];
    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
