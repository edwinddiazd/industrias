<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';

    public function Indus_Prod()
    {
    	return $this->belongsToMany('App\Industrias');
    }
}
