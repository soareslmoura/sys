<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainings extends Model
{
    public function products()
    {
        return $this->hasOne('App\products');
    }
}
