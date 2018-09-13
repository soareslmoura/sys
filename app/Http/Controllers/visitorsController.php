<?php

namespace App\Http\Controllers;

use App\checkLogin;
use App\products;
use App\trainings;
use App\usuarios;
use App\visitors;
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

        $prod = new productsController();
        $tr = new trainingsController();

        $products = $prod->getProduts();
        $trainings = $tr->allOpenTrainings();

        return view('/visitor/visitor', compact('products','trainings'));

    }

    public function viewPlans()
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



        return view('/visitor/visitorPlansTrainings');


    }

    public static function verifyVisitor()
    {
        if(!Session::has('check'))
        {
            return redirect('/');
        }

        if(Session::get('isStudent') == 1)
        {
            return redirect('/std');
        }

        return null;
    }

    public function viewEditVisitor($id)
    {
        if(!Session::has('check'))
        {
            return redirect('/');
        }

        if(Session::get('isStudent') == 1)
        {
            return redirect('/std');
        }

        if($id != session::get('idUser'))
        {
            $msg = "Você não pode acessar esses dados.";
            $alert = "alert-danger";

            return view('/visitor/visitorData', compact('msg','alert'));
        }

        $visitor = usuarios::find($id);

        if(isset($visitor))
        {
            return view('/visitor/visitorData', compact('visitor'));
        }
        $msg = "Dados não encontrados. Entre em contato com o suporte.";
        $alert = "alert-warning";
        return view('/visitor/visitorData', compact('msg', 'alert'));
    }

    //==================================================================================================
    // CURSO FREE - VISITANTE
    //==================================================================================================

    //---------------------------------------------------------------------------------
    //Rota pro curso free

    public function freetraning()
    {

        if(!Session::has('check'))
        {
            return redirect('/');
        }

        if(Session::get('isStudent') == 1)
        {
            return redirect('/std');
        }

            return view('visitor/visitorTraning');


    }
}
