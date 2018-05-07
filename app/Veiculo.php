<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'veiculo',
        'marca',
        'ano',
        'descricao',
        'vendido'
    ];
    
}
