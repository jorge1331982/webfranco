<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable=['fechaB','asesor','ordenP','factura','metodoP','formaP','cfdi','precioN','producto','dato_id'];
}
