<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    use HasFactory;
    protected $fillable=['fecha','empleado','kminicial','kmfinal','kilometraje','costogas','gasto','gasolina_id','litros'];
    public function gasolina(){
        return $this->hasMany(Gasolina::class);
    }
}
