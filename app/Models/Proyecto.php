<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    // Relacion uno a muchos
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }

    // Relacion muchos a muchos
    public function colaboradors(){
        return $this->belongsToMany('App\Models\Colaborador');
    }
}
