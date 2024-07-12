<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    // Relacion uno a muchos
    public function colaborador(){
        return $this->belongsTo('App\Models\Colaborador');
    }

    // Relacion uno a muchos (inversa)
    public function tipopagos(){
        return $this->hasMany('App\Models\Tipo_Pago');
    }
}
