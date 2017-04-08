<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industrias extends Model
{
    protected $table='industrias';
    public function Industrias_Personal()
    {
        
        return $this->hasMany('App\Personal');
    }

    public function MateriasPrimas ()
    {
    	return $this->belongsToMany('App\Materias');
    }

    public function Prod_Indus ()
    {
    	return $this->belongsToMany('App\Productos');
    }
}
