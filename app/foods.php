<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foods extends Model
{
    //
    public function categories()
    {
        return $this->belongsTo('categories','categorie_id');
    }
}
