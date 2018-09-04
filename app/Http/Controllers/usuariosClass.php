<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosClass extends Controller
{
    // Verifica a existência do usuário na base de dados
    public function verifyExistsUser($email, $nrcell)
    {
        $user = DB::table('usuarios')->select($email)->select($nrcell);
        return $user;
    }
}
