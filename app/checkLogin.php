<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class checkLogin
{

    public function checkLoginVisitor()
    {

        if(!(Session::has('check')))
        {
            return redirect('/');
        }

        if((Session::get('isStudent' == 1)) && (!(Session::has('check'))))
        {
            return redirect('/std');
        }
        return null;
    }

}