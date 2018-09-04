<?php

namespace App\Http\Controllers;

use App\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\usuarios;


class admController extends Controller
{
    //==================================================================================================
        public function index()
        {
           // return Session::get('adm');
            if(!Session::has('levelAdmin'))
            {
                return view('/adm/loginAdm');
            }

            return view('/adm/adm');
        }

    //==================================================================================================
    // LOGIN - ADM
    //==================================================================================================
        public function loginAdm(Request $request)
        {

            $this->validate($request, [
                'email' => 'required',
                'pass' => 'required|min:8'
            ]);

            // verificar se usuário existe na base de dados
            $user = usuarios::where('email', $request->email)->first();

            // verifica se existe usuário
            if( count($user) == 0)
            {
                $erroDb = ['Login ou senha não conferem.'];
                return view('index', compact('erroDb'));
            }

            //verificação de senha
            if(!Hash::check($request->pass, $user->passwr))
            {
                $erroDb = ['Login ou senha não conferem.'];
                return view('index', compact('erroDb'));
            }

            $request->session()->put('check','yes');
            $request->session()->put('idUser',$user->idUser);
            $request->session()->put('nameUser',$user->nameUser);
            $request->session()->put('levelAdmin',$user->admins->levelUser);

            return redirect('/adm/index');
        }

    //==================================================================================================
    // RECUPERAR SENHA - ADM
    //==================================================================================================
        public function recoverPass(Request $request)
        {

            $adm = usuarios::where('email','=',$request->email)->get();

            if($adm->count() == 0)
            {
                $erroDb = ['Usuário não existe na base de dados.'];
                return view('/adm/admRecoverPass', compact('erroDb'));
            }

            $newpass = generalsController::getRandomCode();
            $code = Hash::make($newpass);

            // Salvar nova senha
            $adm->passwr = $code;
            $adm->pass = $newpass;
            $adm->save();

            //enviar email
            Mail::to($adm->email)->send(new mailRecoverPass(['newpass' => $adm->pass,'name'=> $adm->nameUser]));
            return view('/mail/confirmRecoverPass')->with(['name'=> $adm->nameUser]);



        }


    //==================================================================================================
    // CRICAÇÃO DE NOVA CONTA - ADM
    //==================================================================================================
        public function createAdmin(Request $request)
        {
            $code = generalsController::getRandomCode();
            $passwr = Hash::make($code);
            date_default_timezone_set('UTC');
            $date = date('Y-m-d H:i:s');
            DB::select('call sp_admin_save(?,?,?,?,?,?,?)', array($request->name, $request->email, $passwr, generalsController::phoneWithoutPoints($request->nrCell), $code,4, $date));
        }

        public function admcreate()
        {
            return view('/adm/admcreate');
        }

    //==================================================================================================
    // CHECK LOGIN - ADM
    //==================================================================================================

        public static function checkLogin()
        {
            if(!Session::has('levelAdmin'))
            {
                return redirect('/adm');
            }
            return null;
        }

    //==================================================================================================
    // LOGOUT - ADM
    //==================================================================================================

        public function logout()
        {
            Session::flush();
            return redirect('/adm');
        }

    //==================================================================================================
    // PRODUTOS - ADM
    //==================================================================================================
    // Mostra view de produtos
        public function showProducts()
        {
            if(!Session::has('levelAdmin'))
            {
                return redirect('/adm');
            }
            return view('/adm/admListProducts');
        }

        // Formulario Novo Produto
        public function newProduct()
        {
            if(!Session::has('levelAdmin'))
            {
                return redirect('/adm');
            }
            return view('/adm/admNewProduct');
        }




}
