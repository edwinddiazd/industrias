<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industrias extends Model
{
    
    public function Personal()
    {
        return $this->hasMany('App\Personal');
    }
}
