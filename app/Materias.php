<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table='materias';
    public function Industrias()
    {
    	
    	return $this->belongsToMany('App\Industrias');
    }
}