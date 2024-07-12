<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    // Relacion muchos a muchos (inversa)
    public function proyectos(){
        return $this->belongsToMany('App\Models\Proyecto');
    }

    // Relacion uno a muchos (inversa)
    public function pagos(){
        return $this->hasMany('App\Models\Pago');
    }
}
