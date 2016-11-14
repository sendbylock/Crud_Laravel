<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $fillable = [
		'nome',
		'cidade_id',
		'estado_id',
		'hobbie_id'
	];
}
