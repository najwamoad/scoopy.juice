<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    //
    public function foods()
    {
        return $this->hasMany('foods','cetegoria_id');
    }

}
