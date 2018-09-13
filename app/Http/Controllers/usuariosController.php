<?php

namespace App\Http\Controllers;

use App\checkLogin;
use App\Mail\mailRecoverPass;
use App\products;
use App\usuarios;
use App\visitors;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class usuariosController extends Controller
{

    public function indexSite()
    {

        if((Session::has('check')) &&(Session::get('isStudent') == 0))
        {
            return redirect('/visitante');

        }elseif(Session::get('isStudent') == 1)
        {
            return redirect('/std');
        }else
            {
                return view('index');
            }

    }
    //==================================================================================================
    // LOGIN - VISITANTE
    //==================================================================================================

        public function indexCurso()
        {
            /* verifica se existe seção ativa*/
            if(!Session::has('check'))
            {
                return redirect('/');
            }
            /**********************************/
            //verifica se é apenas visitante ou se é um aluno
            if(Session::get('isStudent') == 0)
            {
                return redirect('/visitante');
            }else
            {
                return redirect('/std');
            }
            //return redirect('/visitante');
        }

        public function login(Request $request)
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
            $request->session()->put('idUser',$user->id);
            $request->session()->put('nameUser',$user->nameUser);
            $request->session()->put('isStudent',$user->visitor->isStudent);


            return redirect('/curso');
        }

        //---------------------------------------------------------------------------------

    //==================================================================================================
    // CRIAR CONTA - VISITANTE
    //==================================================================================================

        public function createVisitorAccount(Request $request)
        {
            //--------------------------------------------------------------------------------
            //Verificações e criação de conta de visitante

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'nrCell' => 'required',
                'term' => 'accepted',
            ]);

            //---------------------------------------------------------------------------------
            //Verificação se o usuário já existe na base de dados (email)

            $dados = usuarios::where('email', '=', $request->email)
                ->orwhere('nrCell', '=', $request->nrCell)
                ->get();

            if ($dados->count() != 0)
            {
                $erroDb = ['Cadastro já existe em nossa base de dados.'];
                return view('index', compact('erroDb'));
            }

            //---------------------------------------------------------------------------------
            //Inserir novo usuário Visitante

            $code = generalsController::getRandomCode();
            $passwr = Hash::make($code);
            date_default_timezone_set('UTC');
            $date = date('Y-m-d H:i:s');
            DB::select('call sp_user_visitor_save(?,?,?,?,?,?)', array($request->name, $request->email, $passwr, generalsController::phoneWithoutPoints($request->nrCell), $code, $date));

            $msgcreatefree = ["Introdução ao Day Trade no Mercado Americano."];
            return view('index', compact('msgcreatefree'));

        }

    //==================================================================================================
    // LOGOUT - VISITANTE
    //==================================================================================================

        public function visitorLogout()
        {
            //destruir a sessão
            Session::flush();
            return redirect('/');
        }





    //==================================================================================================
    // RECUPERAR SENHA - USUARIO
    //==================================================================================================


        public function passRecover(Request $request)
        {
            $user = usuarios::where('email','=',$request->email)->get();

            if($user->count() == 0)
            {
                $erroDb = ['Usuário não existe na base de dados'];
                return view('recoverpass', compact('erroDb'));
            }

            $user = $user->first();

            if($user->adm == 1)
            {
                $erroDb = ['Usuário não pode ser recuperado.'];
                return view('recoverpass', compact('erroDb'));
            }

            $newpass = generalsController::getRandomCode();
            $code = Hash::make($newpass);

            // Salvar nova senha
            $user->passwr = $code;
            $user->pass = $newpass;
            $user->save();

            //enviar email
            Mail::to($user->email)->send(new mailRecoverPass(['newpass' => $user->pass,'name'=> $user->nameUser]));
            return view('/mail/confirmRecoverPass')->with(['name'=> $user->nameUser]);
        }

    //==================================================================================================
    // MOSTRA VIEW DOS USUARIOS
    //==================================================================================================

        public function viewAllUsers()
        {
            if(!Session::has('levelAdmin'))
            {
                return redirect('/adm');
            }

            return view('/adm/admListAllUsers');
        }

    //==================================================================================================
    // USUARIOS - ADM
    //==================================================================================================

        //Todos os usuários via web.php com paginação
        public function getAllUsers()
        {
            if(!Session::has('levelAdmin'))
            {
                return redirect('/adm');
            }

            //$users = usuarios::orderBy('nameUser')->paginate(15);
            $users = usuarios::where('deleted',0)->orderBy('nameUser')->paginate(15);
            return view('/adm/admListAllUsers', compact('users'));
        }


        // Criar novo usuário pelo admin

        public function addNewUser(Request $request)
        {
            $u = new usuariosController();
            $usuario = $u->verifyExistsUser($request->emailUser , generalsController::phoneWithoutPoints($request->cellUser) );


            if (isset($usuario))
            {
                $msgcreate = "Usuário já existe na base de dados.";
                $typealert = "alert-warning";
                return redirect()->route('allusers')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);
            }

            //return $request;
            $code = generalsController::getRandomCode();
            $passwr = Hash::make($code);

            if(!isset($request->stdType))
            {
                $stdType = 0;
            }else{
                $stdType = $request->stdType;
            }

            date_default_timezone_set('UTC');
            $date = date('Y-m-d H:i:s');
            DB::select('call sp_create_user_save(?,?,?,?,?,?,?,?)', array($request->nameUser, $request->emailUser, $passwr, generalsController::phoneWithoutPoints($request->cellUser), $code, $request->userType ,$stdType,$date));


            $msgcreate = "Usuário cadastrado com sucesso.";
            $typealert = "alert-success";
            return redirect()->route('allusers')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);
        }


        // deletar usuario
        public function deleteUser(Request $request)
        {
            $user = usuarios::find($request->iduser);

            if(isset($user))
            {
                $user->deleted = 1;
                $user->save();
            }else
            {
                return response('Usuário não encontrado', 404);
            }

            $msgcreate = "Usuário excluído com sucesso.";
            $typealert = "alert-success";
            return redirect()->route('allusers')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);
        }

        // Verifica a existência do usuário na base de dados
        public function verifyExistsUser($email , $cell)
        {
            $dados = usuarios::where('email', '=', $email)
                ->orwhere('nrCell', '=', $cell)
                ->get()->first();

            return $dados;
        }

        // Retornar um usuário específico
        public function getEditUser($id)
        {
            //$user = usuarios::find($id);
            $user = DB::table('usuarios')
                ->join('visitors', 'usuarios.id', '=' , 'visitors.usuarios_id')
                ->select('usuarios.*', 'visitors.isStudent')
                ->where('usuarios.id', '=', $id)->first();

            if(isset($user))
            {
                if($user->isStudent == 0)
                {
                    return view('/adm/admEditUser', compact('user'));
                }else{
                    $user = DB::table('usuarios')
                        ->join('visitors', 'usuarios.id', '=' , 'visitors.usuarios_id')
                        ->join('students', 'usuarios.id', '=' , 'students.usuarios_id')
                        ->select('usuarios.*', 'visitors.isStudent', 'students.typeStudent')
                        ->where('usuarios.id', '=', $id)->first();
                    return view('/adm/admEditUser', compact('user'));
                }

            }

            return response('Usuário não encontrado', 404);

        }

        // Editar dados do usuário
    public function editUser(Request $request)
    {
        $user = usuarios::find($request->idUser);

        if($request->userType == 1)
        {
            $request->stdType = 0;
        }

        if(isset($user))
        {
            date_default_timezone_set('UTC');
            $date = date('Y-m-d H:i:s');
            DB::select('call sp_update_user_save(?,?,?,?,?,?,?)', array($request->nameUser, $request->emailUser, generalsController::phoneWithoutPoints($request->cellUser), $request->userType ,$request->stdType, $date, $request->idUser));

            $msgcreate = "Usuário alterado com sucesso.";
            $typealert = "alert-success";
            return redirect()->route('allusers')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);
        }

        $msgcreate = "Usuário não encontrado.";
        $typealert = "alert-danger";
        return redirect()->route('allusers')->with(['msgcreate' => $msgcreate, 'typealert' => $typealert]);

    }





}
