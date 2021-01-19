<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $fillable=['fechaB','anticipo','dato_id','razonsocial2','regi_id'];
    public function dato(){
        return $this->belongsTo(Dato::class);
    }
    public function regi(){
        return $this->belongsTo(Regi::class);
    }
}
