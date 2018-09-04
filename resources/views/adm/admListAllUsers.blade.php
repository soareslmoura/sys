@extends('../layouts.appAdm')

@section('conteudo')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/adm">Home</a>
        </li>
        <li class="breadcrumb-item active">Todos os Usuários</li>
    </ol>
    <div>
        <h4>TODOS OS USUÁRIOS</h4>
    </div>

        @include('inc.erros')
    @if(Session::get('msgcreate'))
        <div id="alert-user" class="alert {{Session::get('typealert')}} alert-dismissible fade show" role="alert" style="text-align: left">
            <p style="font-weight: bold;font-size: 20px">{{Session::get('msgcreate')}}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div>
        <div class="card text-center">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-2" style="align-items: left">
                        <button class="btn btn-outline-success btn-md " role="button" onClick="newUser()" ><i class="fas fa-plus-circle" ></i> Novo Usuário</button>
                    </div>
                    <div class="col-md-10">

                    </div>

                </div>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-hover" id="usersTable">
                    <thead style="background-color: #c8cbcf">
                    <tr>
                        <th data-column-id="id" data-type="numeric" scope="col">#</th>
                        <th data-column-id="name" scope="col" >Nome</th>
                        <th data-column-id="email" scope="col">Email</th>
                        <th data-column-id="cat" scope="col" >Categoria</th>
                        <th data-column-id="class" scope="col">Turma</th>
                        <th data-column-id="cel" scope="col">Celular</th>
                        <th data-column-id=" options" data-formatter="options" data-sortable="false" scope="col">Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->nameUser}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->nameCategory}}</td>
                            <td>Turma do aluno</td>
                            <td>{{$user->nrCell}}</td>
                            <td>
                                <a style='margin-right: 10px' href='/adm/users/{{$user->id}}'  title='Editar'><i class='fas fa-edit'></i></a>
                                <a style='margin-right: 10px; border: none;' onclick="ModaldeleteUser({{$user->id}})" href="" data-target="#modalDeleteUser" title='Excluir' data-toggle='modal'><i style='color: red' class='fas fa-trash-alt'></i></a>
                                <a style='margin-right: 10px; border: none;' onclick="showAvaliableTrainings({{$user->id}})" href=""  title='Matricular' data-toggle='modal'><i style='color: #28a745' class='fas fa-pencil-ruler'></i></a>
                                <a style='margin-right: 10px; border: none;' onclick="({{$user->id}})"  title='Histórico' data-toggle='modal'><i style='color: #0062cc' class='fas fa-clipboard-list'></i></a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- Aqui entra a linha montada via JQUERY no appAdm--}}
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div>
        </div>
    </div>
    <!-- Modal Novo Usuario -->
    <div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="newUser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #28A745">
                    <h5 class="modal-title" id="newUser" style="color: white;">Novo Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/adm/users" method="post">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nameUser">Nome</label>
                                <input type="text" class="form-control" id="nameUser" name="nameUser" placeholder="Nome do Usuário">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emailUser">Email</label>
                                <input type="email" class="form-control" id="emailUser" name="emailUser" placeholder="E-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cellUser">Celular</label>
                                <input type="text" class="form-control phone_with_ddd" id="cellUser" name="cellUser" placeholder="Número">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputState">Tipo de Usuário</label>
                            <select id="userType" name="userType" class="form-control">
                                <option value="1">Visitante</option>
                                <option value="2">Aluno</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12" id="typestd" >
                            <label for="inputState">Tipo</label>
                            <select id="stdType" name="stdType" class="form-control">
                                <option disabled selected>Tipo de Aluno</option>
                                <option disabled >----------------</option>

                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Exclusão de usuário -->
    <div class="modal fade" id="modalDeleteUser" tabindex="-1" role="dialog" aria-labelledby="modalDeleteUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #dc3545; color: white">
                    <h5 class="modal-title" id="exampleModalCenterTitle" >Excluir Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Excluir o usuário significa apagar ele de vez do sistema, incluindo todos os dados, cursos, pagamentos, etc.</p>

                    <p><strong>Tem certeza que deseja excluir o usuário?</strong></p>

                    <form method="post" action="/adm/users/delete">
                        <input type="hidden" id="iduser" name="iduser">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger" id="confirmaExclusao"><strong>Confirmar exclusão</strong></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal matricular usuário -->
    <div class="modal fade" id="modalenrollUser" tabindex="-1" role="dialog" aria-labelledby="modalenrollUser" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2e8cc2; color: white">
                    <h5 class="modal-title" id="modalenrollUserTitle" >Matricular Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive-sm table-hover" id="enrollTrainingsTable">
                        <thead style="background-color: #c8cbcf">
                        <tr>
                            <th data-column-id="turma" scope="col" >Turma</th>
                            <th data-column-id="cidade" scope="col">Cidade</th>
                            <th data-column-id="data" scope="col" >Data</th>
                            <th data-column-id="vagas" scope="col">Vagas</th>
                            <th data-column-id=" matricular" data-formatter="matricular" data-sortable="false" scope="col">Matricular</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{--  Turmas disponíveis--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection