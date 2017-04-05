<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriasPrimas extends Model
{
    public function Industrias()
    {
    	protected $table='materias_primas';
    	return $this->belongsToMany('App\Industrias');
    }
}
