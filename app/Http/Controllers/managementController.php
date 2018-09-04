<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managementController extends Controller
{
    //Pagina principal
    public function indexManagement()
    {
        admController::checkLogin();
        return view('/adm/admConfSys');
    }
}
