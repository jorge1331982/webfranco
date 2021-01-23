<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;
    protected $fillable=['nombreC','correo','telefono','calle','num','colonia','mpio','estado','ciudad','razonsocial','codigoP'];
    public function regis(){
        return $this->hasMany(Regi::class);
    }
    public function pagos(){
        return $this->hasMany(Pago::class);
    }
}
