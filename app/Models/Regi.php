<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regi extends Model
{
    use HasFactory;
    protected $fillable=['fechaA','asesor','ordenP','formaP','metodoP','precioN','serieU','serieC','dato_id','facturaR','producto'];
    public function dato(){
        return $this->belongsTo(Dato::class);
    }
    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
