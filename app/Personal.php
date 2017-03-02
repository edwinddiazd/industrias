<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $table='Personal';
    public function Industrias()
    {
        return $this->belongsTo('App\Industrias');
    }
}
