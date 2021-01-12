<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $fillable=['nombre','cate','sku','stock','medida'];

    public function almacen(){
        return $this->hasMany(Almacen::class);
    }
    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
