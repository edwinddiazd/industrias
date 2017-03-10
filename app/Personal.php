<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $table='personal';
    public function Personal_Industrias()
    {
        return $this->belongsTo('App\Industrias');
    }
}
