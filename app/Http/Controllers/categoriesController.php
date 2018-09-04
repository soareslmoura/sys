<?php

namespace App\Http\Controllers;

use App\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    //==================================================================================================
    // ADICIONAR NOVA CATEGORIA
    //==================================================================================================
        public function newCategory(Request $request)
        {
            $dados = categories::where('nameCategory','=',$request->category)->get();

            if(count($dados) != 0 )
            {
                $erroDb = ['Categoria já existe.'];
                return view('adm/admConfSys', compact('erroDb'));
            }
            $categories = new categories();
            $categories->nameCategory = $request->category;
            $categories->save();

            return redirect('/adm/management');
        }

    //==================================================================================================
    // ADICIONAR NOVA CATEGORIA
    //==================================================================================================
        public function getCategories()
        {
            $cats = categories::all();
            return json_encode($cats);

        }
}
