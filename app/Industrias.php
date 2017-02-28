<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industrias extends Model
{
    protected $primarykey='industrias_id';

    public function Personal()
    {
        return $this->hasMany('App\Personal');
    }
}
