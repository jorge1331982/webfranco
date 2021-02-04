<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasolina extends Model
{
    use HasFactory;
    protected $fillable=['vehiculo','marca','modelo','year','placas'];
    public function rendimiento(){
        return $this->belongsTo(Rendimiento::class);
    }
}
