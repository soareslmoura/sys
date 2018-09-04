<?php

namespace App\Http\Controllers;

use App\trainings;
use Illuminate\Http\Request;
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

                $trainings = trainings::where('situation','=','1')->get();
                //$trainings = trainings::all();

                return $trainings->toJson();

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
}
