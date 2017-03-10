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
}
