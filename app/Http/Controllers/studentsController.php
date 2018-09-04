<?php

namespace App\Http\Controllers;

use App\student_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class studentsController extends Controller
{
    public function indexStudent()
    {
        //Verifica de existe sessão ativa

        if(!Session::has('check'))
        {
            return redirect('/');
        }

        if(Session::get('isStudent') == 0)
        {
            return redirect('/visitante');
        }

        return view('std/std');
    }

    public function getCategoriesStudents()
    {
        $cats = student_category::all();

        return json_encode($cats);
    }
}
