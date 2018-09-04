@extends('../layouts.appAdm')

@section('conteudo')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/adm">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/adm/users/all">Todos os Usuário</a>
        </li>
        <li class="breadcrumb-item active">Editar dados de usuário</li>
    </ol>

        @include('inc.erros')
    @if(Session::get('msgcreate'))
        <div class="alert {{Session::get('typealert')}} alert-dismissible fade show" role="alert" style="text-align: left">
            <p style="font-weight: bold;font-size: 20px">{{Session::get('msgcreate')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div>
        <div class="card col-md-6">
            <div class="card-header">
                <h4>{{$user->nameUser}}</h4>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <form action="/adm/users/edit" method="post">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <input type="hidden" name="idUser" value="{{$user->id}}">
                            <div class="form-group ">
                                <label for="nameUser">Nome</label>
                                <input type="text" class="form-control" id="nameUser" name="nameUser" placeholder="Nome do Usuário" value="{{$user->nameUser}}">
                            </div>
                            <div class="form-group">
                                <label for="emailUser">Email</label>
                                <input type="email" class="form-control" id="emailUser" name="emailUser" placeholder="E-mail" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="cellUser">Celular</label>
                                <input type="text" class="form-control phone_with_ddd" id="cellUser" name="cellUser" placeholder="Número" value="{{$user->nrCell}}">
                            </div>

                        <div class="form-group">
                            <label for="inputState">Tipo de Usuário</label>
                            <select id="userType" name="userType" class="form-control">

                                    @if($user->isStudent == 1)
                                        <option value="2">Aluno</option>
                                    @else
                                        <option value="1">Visitante</option>
                                    @endif
                                <option disabled>--------------------</option>
                                <option value="1">Visitante</option>
                                <option value="2">Aluno</option>
                            </select>
                        </div>
                        <div class="form-group" id="typestd" >
                            <label for="inputState">Tipo</label>
                            <select id="stdType" name="stdType" class="form-control">
                                <option disabled selected>Tipo de Aluno</option>
                                <option disabled >----------------</option>

                            </select>
                        </div>

                        @if(isset($user->typeStudent) && $user->typeStudent != 0)
                            <div class="form-group" id="typestdEdit" >
                                <label for="inputState">Tipo</label>
                                <select id="stdType" name="stdType" class="form-control">
                                    <option value="{{$user->typeStudent}}" selected>
                                        @switch($user->typeStudent)

                                            @case(1)
                                                Presencial
                                            @break

                                            @case(1)
                                                Online
                                            @break

                                            @case(1)
                                                Vip
                                            @break

                                        @endswitch
                                    </option>
                                    <option disabled >----------------</option>
                                    <option value="1">Presencial</option>
                                    <option value="2">Online</option>
                                    <option value="3">Vip</option>
                                </select>
                            </div>
                        @endif
                        <div class="modal-footer">
                            <a  class="btn btn-outline-secondary" href="/adm/users/all">Voltar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection