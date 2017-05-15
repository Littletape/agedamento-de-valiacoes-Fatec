<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{	
	protected $table = 'usuarios';
    protected $fillabe = [
    	'nome',
    	'cidade',
    	'endereco',
    	'email',
    	'senha',
    	'cel',
    	'permisao_id'
    ];
}
