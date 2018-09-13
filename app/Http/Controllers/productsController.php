<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class productsController extends Controller
{


    //---------------------------------------------------------------------------
    // Carrega todos os produtos em JSON
    //---------------------------------------------------------------------------
    public function productsAll()
    {
        $prods = products::all();

        return $prods->toJson();

    }

    //---------------------------------------------------------------------------
    // Criar um novo produto
    //---------------------------------------------------------------------------

        public function newProduct(Request $request)
        {
           $prod = new products();
           $prod->prodName = $request->input('nameproduct');
           $prod->prodPrice =  generalsController::numberWithoutPoints($request->input('priceproduct'));
           $prod->categories_id = $request->input('categoryproduct');
           $prod->prodDesc = $request->input('descproduct');
           $prod->save();
           return json_encode($prod);

        }

    //---------------------------------------------------------------------------
    // Editar um produto
    //---------------------------------------------------------------------------

        public function editProduct()
        {

        }

    //---------------------------------------------------------------------------
    // Excluir um produto
    //---------------------------------------------------------------------------

        public function deleteProduct($id)
        {
            $prod = products::find($id);

            if(isset($prod))
            {
                $prod->delete();
                return response('Ok', 200);
            }else{
                return response('Produto não encontrado', 404);
            }
        }

    //---------------------------------------------------------------------------
    // Carregar APENAS produtos que são treinamento
    //---------------------------------------------------------------------------

        public function loadTrainingProduts()
        {
            $prods = products::where('isTraining','=',1)->get();

            return json_encode($prods);
        }

    //---------------------------------------------------------------------------
    // Carregar APENAS produtos que são treinamento e por determinada categoria
    //---------------------------------------------------------------------------

        public function getProduts()
        {
            $prods = products::all();
            return $prods;

        }



}
