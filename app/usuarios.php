<?php

namespace App;

use App\Http\Controllers\generalsController;
use Illuminate\Database\Eloquent\Model;


class usuarios extends Model
{
    public function visitor()
    {
        return $this->hasOne('App\visitors');
    }

    public function admins()
    {
        return $this->hasOne('App\admins');
    }

    public function students()
    {
        return $this->hasOne('App\students');
    }



}
