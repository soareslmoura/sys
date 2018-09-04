<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class visitorsController extends Controller
{

    public function indexVisitor()
    {
        //Verifica de existe sessão ativa

        if(!Session::has('check'))
        {
            return redirect('/');
        }

        if(Session::get('isStudent') == 1)
        {
            return redirect('/std');
        }

        return view('visitor/visitor');
    }
}
