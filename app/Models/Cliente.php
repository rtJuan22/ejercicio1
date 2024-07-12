<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // Relacion uno a muchos (inversa)
    public function proyectos(){
        return $this->hasMany('App\Models\Proyecto');
    }
}
