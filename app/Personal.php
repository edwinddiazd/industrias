<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    public function industrias()
    {
        return $this->belongsTo('App\Industrias');
    }
}
