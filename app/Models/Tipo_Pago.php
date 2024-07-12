<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Pago extends Model
{
    use HasFactory;
    // Relacion uno a muchos 
    public function pago(){
        return $this->belongsTo('App\Models\Pago');
    }
}
