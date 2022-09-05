<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresa_name',
        'pais_id',
        'ciudad_id',
    ];


public function pais(){

    return $this->hasOne(Paises::class, 'id','pais_id');
}


public function ciudad(){

    return $this->hasOne(Ciudad::class, 'id','ciudad_id');
}


}
