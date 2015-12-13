<?php

namespace App;

use Illuminate\Database\Eloquent\Model;	

class Vagas extends Model
{
    protected $fillable = [
    	'titulo',
    	'corpo',
    	'area',
    	'semestre',
    	'auxilio',
    	'carga_horaria',
    	'nome_empresa',
    	'publicacao'
    ];
}
