<?php

namespace App\Http\Controllers;

use App\classes;
use App\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class classesController extends Controller
{
        //==============================================================================================================
        //================================Matricular aluno ewm um treinamento===========================================
        //==============================================================================================================
            public function enrollStudent($idUser, $idTraining)
            {
                $user = classes::find($idUser);

                    if(isset($user))
                    {
                        $msgcreate = "Usuário já pertence a um treinamento.";
                        $typealert = "alert-danger";
                        return redirect()->route('alltrainings')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);
                    }

                $class = new classes();

                $class->situation = 1;
                $class->usuarios_id = $idUser;
                $class->trainings_id = $idTraining;
                $class->save();

                $msgcreate = "Usuário matriculado com sucesso.";
                $typealert = "alert-success";
                return redirect()->route('alltrainings')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);

            }

        //=================================================================================================================================================

}
