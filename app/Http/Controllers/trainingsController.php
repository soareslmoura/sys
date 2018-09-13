<?php

namespace App\Http\Controllers;

use App\classes;
use App\trainings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class trainingsController extends Controller
{

    //---------------------------------------------------------------------------
    // Criar novo Treinamento
    //---------------------------------------------------------------------------
            public function newTraining(Request $request)
            {
                $tr = new trainings();

                $name = $request->input('localTraining').generalsController::dateWithoutslash('15/09/2018');
                $tr->typeTraining = $request->input('typeTraining');
                $tr->cityTraining = $request->input('localTraining');
                $tr->dateTraining = generalsController::dateSubstituteslash($request->input('dateTraining'));
                $tr->timeTraining = ($request->input('timeTraining'));
                $tr->addressTraining = $request->input('addressTraining');
                $tr->numberAddressTraining = $request->input('numberTraining');
                $tr->obsTraining = $request->input('obsTraining');
                $tr->vacancies = $request->input('seatTraining');
                $tr->nameTraining = $name;
                $tr->situation = 1;
                $tr->products_id = $request->input('typeTraining');;

                $tr->save();

                $msgcreate = "Treinamento criado com sucesso.";
                $typealert = "alert-success";
                return redirect()->route('alltrainings')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);
            }

    //---------------------------------------------------------------------------
    // Mostrar lista de Treinamentos
    //---------------------------------------------------------------------------

            public function allTrainings()
            {
                if(!Session::has('levelAdmin'))
                {
                    return redirect('/adm');
                }

                $trainings = trainings::where('situation','=','1')->get();
                return view('/adm/admListTraining', compact('trainings'));
            }


            public function allOpenTrainings()
            {

                $trainings = DB::table('trainings')
                            ->join('products','products_id', '=', 'products.id')
                            ->select('trainings.*', 'products.*')
                            ->where('trainings.situation', '=', 1)
                            ->get();

                return json_encode($trainings);

            }

    //---------------------------------------------------------------------------
    // Buscar dados de um treinamento Específico
    //---------------------------------------------------------------------------

            public function getTraining($id)
            {
                $tr = trainings::find($id);

                return json_encode($tr);
            }

            public function dateBrazilian($date)
            {
                $data = implode("/",array_reverse(explode("-",$date)));

                return json_encode($data);
            }

    //---------------------------------------------------------------------------
    // Efetivar Matrícula
    //---------------------------------------------------------------------------

        //Efetuar matricula - ADM
        public function admEnrollStudent(Request $request)
        {

        }

        //Efetuar matricula - VISITANTE
        public function visitorEnrollStudent(Request $request)
        {

        }

    //==================================================================================================
    // CURSO FREE - COMPRAR PLANOS VISITANTE
    //==================================================================================================

    //---------------------------------------------------------------------------------
    //Rota pra view de planos
    public function showViewBuyPlan()
    {
        if(!Session::has('check'))
        {
            return redirect('/');
        }

        if(Session::get('isStudent') == 1)
        {
            return redirect('/std');
        }
        $tr = new trainingsController();
        $trainings = $tr->allOpenTrainings();

        return view('visitor/visitorEnrollTraining', compact('trainings'));
    }


    //Verificar Quantidade de alunos na turma
    public function qntyStudents($idClass)
    {
        $class = new classes();
        $res = $class->all()->where('trainings_id','=', $idClass);

        return count($res);
    }



}
