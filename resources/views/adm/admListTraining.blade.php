@extends('/layouts.appAdm')

@section('conteudo')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/adm">Home</a>
        </li>
        <li class="breadcrumb-item active">Treinamentos</li>
    </ol>
    <h4>TREINAMENTOS</h4>
    <div style="margin-bottom: 10px">
        <button class="btn btn-outline-success btn-lg btn-lg" role="button" onClick="newTraining()" ><i class="fas fa-plus-circle" ></i> Novo Treinamento</button>
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
    <table class="table table-hover table-responsive-sm" id="trainingsTable">
        <thead style="background-color: #c8cbcf">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Nome</th>
            <th scope="col">Local</th>
            <th scope="col">Endereço</th>
            <th scope="col">Data</th>
            <th scope="col">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trainings as $tr)
            <tr>
                <td>{{$tr->id}}</td>
                <td>{{$tr->typeTraining}}</td>
                <td>{{$tr->nameTraining}}</td>
                <td>{{$tr->cityTraining}}</td>
                <td>{{$tr->addressTraining}}</td>
                <td>{{\App\Http\Controllers\generalsController::dateBrazilian($tr->dateTraining)}}</td>
                <td>
                    <a style='margin-right: 10px' href='/adm/users/{{$tr->id}}'  title='Editar treinamento'><i class='fas fa-pencil-alt'></i></a>
                    <a style='margin-right: 10px; border: none; color: #dc3545' onclick="deleteTraining({{$tr->id}})" href="" title='Excluir treinamento' data-toggle='modal'><i class="fas fa-trash-alt"></i></i></a>
                    <a style='margin-right: 10px; border: none; color: #1e7e34' onclick="detailTraining({{$tr->id}})" href="" title='Detalhes do treinamento' data-toggle='modal'><i class="fas fa-info-circle"></i></i></i></a>
                    <a style='margin-right: 10px; border: none; color: #2e8cc2' onclick="studentsTraining({{$tr->id}})" href="" title='Alunos matriculados' data-toggle='modal'><i class="fas fa-clipboard-list"></i></i></i></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    <!-- Modal Novo Treinamento -->
    <div class="modal fade" id="novoTreinamento" tabindex="-1" role="dialog" aria-labelledby="novoTreinamento" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #28A745; color: white">
                    <h5 class="modal-title" id="newTraining">Novo Treinamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  class="form-group" method="post" action="/adm/training">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="typeTraining">Tipo de Treinamento</label>
                                <select id="typeTraining" name="typeTraining" class="form-control">
                                    <option disabled selected>Treinamento</option>
                                    <option disabled>-----------------------</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="localTraining">Local</label>
                                <select id="localTraining" name="localTraining" class="form-control">
                                    <option value="BSB" selected >Brasília</option>
                                    <option value="GYN">Goiânia</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP">São Paulo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dateTraining">Data</label>
                                <input type="text" class="form-control date" id="dateTraining" name="dateTraining" placeholder="dd/mm/YYYY">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="timeTraining">Hora</label>
                                <input type="text" class="form-control time" id="timeTraining" name="timeTraining" placeholder="00:00">
                            </div>
                        </div>
                        <div class="form-row" id="address-number">
                            <div class="form-group col-md-6">
                                <label for="addressTraining">Endereço</label>
                                <input type="text" class="form-control" id="addressTraining" name="addressTraining" placeholder="Endereço do treinamento">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="numberTraining">Número</label>
                                <input type="text" class="form-control" id="numberTraining" name="numberTraining" placeholder="Número">
                            </div>
                        </div>
                            <div class="form-group col-md-12">
                                <label for="obsTraining">Observações</label>
                                <textarea max="255" rows="4"  class="form-control" id="obsTraining" name="obsTraining" placeholder="Observações sobre o treinamento"></textarea>
                            </div>

                        <div class="form-group col-md-6">
                            <label for="seatTraining">Vagas</label>
                            <input type="number" id="seatTraining" name="seatTraining" class="form-control">
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

    <!-- Modal Exclusão de Treinamento -->
    <div class="modal fade" id="modalDeletetraining" tabindex="-1" role="dialog" aria-labelledby="modalDeletetraining" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #dc3545; color: white">
                    <h5 class="modal-title" id="exampleModalCenterTitle" >Excluir Treinamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Excluir o treinamento significa apagar ele de vez do sistema, incluindo todos os dados, turmas, etc.</p>

                    <p><strong>Tem certeza que deseja excluir o treinamento?</strong></p>

                    <form method="post" action="">
                        <input type="hidden" id="idtraining" name="idtraining">
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

    <!-- Modal Detalhe de Treinamento -->
    <div class="modal fade" id="modalDetailTraining" tabindex="-1" role="dialog" aria-labelledby="modalDetailTraining" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #005cbf; color: white">
                    <h5 class="modal-title" id="exampleModalCenterTitle" >Detalhes do Treinamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div >
                        <strong>Data: </strong><input type="text" style="border:0;" id="datetr" readonly>
                    </div>
                    <div >
                        <strong>Nome: </strong><input type="text" style="border:0;" id="nametr" readonly>
                    </div>
                    <div >
                        <strong>Local: </strong><input type="text" style="border:0;" id="citytr" readonly>
                    </div>
                    <div >
                        <strong>Endereço: </strong><input type="text" style="border:0;" id="addtr" readonly>
                    </div>
                    <div >
                        <strong>Número: </strong><input type="text" style="border:0;" id="nrtr" readonly>
                    </div>
                    <div >
                        <strong>Vagas/Disponíveis: </strong><input type="text" style="border:0;" id="vagastr" readonly>
                    </div>
                    <div >
                        <strong>Situação: </strong><input type="text" style="border:0;" id="sittr" readonly>
                    </div>

                    <form method="post" action="">
                        <input type="hidden" id="idtraining" name="idtraining">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="/adm/users/all" class="btn btn-large btn-outline-primary"><strong>Matricular Aluno</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal usuários matriculados no Treinamento -->
    <div class="modal fade" id="modalenrollmentTraining" tabindex="-1" role="dialog" aria-labelledby="modalenrollmentTraining" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #005cbf; color: white">
                    <h5 class="modal-title" id="modalenrollmentTraining" >Alunos Matriculados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="">
                        <input type="hidden" id="idtraining" name="idtraining">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <a href="/adm/users/all" class="btn btn-large btn-outline-primary"><strong>Matricular Aluno</strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection