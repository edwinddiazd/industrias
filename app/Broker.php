<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    //mi prier modelo 

    protected $table='Broker';

    public function Ind_Broker()
    {
        return $this->belongsTo('App\Industrias');
    }
}
