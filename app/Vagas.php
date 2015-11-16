<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    protected $fillable = [
    	'titulo',
    	'corpo',
    	'min_salario',
    	'max_salario',
    	'nome_empresa',
    	'publicacao'
    ];
}
