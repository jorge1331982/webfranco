<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;
    protected $fillable=['folio','unidad','copete','largo','ancho','alto','adicionales'];
    public function regist(){
        return $this->belongsTo(Registo::class);
    }
}
