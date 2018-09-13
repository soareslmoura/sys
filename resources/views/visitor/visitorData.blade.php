@extends('layouts.appVisitor')

@section('conteudo')

    @if(isset($msg))
        <div class="alert {{$alert}} alert-dismissible fade show" role="alert">
            <strong>{{$msg}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @else
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header" style="background-color: #005cbf; color: white">
                        Meus Dados
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-12" style="text-align: right">
                                            <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#alterVisitorPassword">
                                                Alterar Senha
                                            </button>
                                    </div>
                                </div>

                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3" style="text-align: left">
                                        <strong>Nome:</strong>
                                    </div>
                                    <div class="col-md-9" style="text-align: left">
                                        {{$visitor->nameUser}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3" style="text-align: left">
                                        <strong>Email:</strong>
                                    </div>
                                    <div class="col-md-9" style="text-align: left">
                                        {{$visitor->email}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3" style="text-align: left">
                                        <strong>Celular:</strong>
                                    </div>
                                    <div class="col-md-9" style="text-align: left">
                                        {{\App\Http\Controllers\generalsController::mask($visitor->nrCell,'(##) #####-####')}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#alterDataVisitor">
                            Alterar Dados
                        </button>
                    </div>
                </div>
            </div>

        </div>

    @endif

{{-- MODAL ALTERAÇÃO DADOS VISITANTE--}}

    <div class="modal fade" id="alterDataVisitor" tabindex="-1" role="dialog" aria-labelledby="alterDataVisitorLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alterDataVisitorLabel">Alterar de Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form>
                       <div class="form-group">
                           <label for="nameVisitor">Nome:</label>
                           <input type="text" class="form-control" id="nameVisitor" name="nameVisitor" value="@if(isset($visitor)){{$visitor->nameUser}}@endif">
                       </div>
                       <div class="form-group">
                           <label for="emailVisitor">Email:</label>
                           <input type="text" class="form-control" id="emailVisitor" name="emailVisitor" value="@if(isset($visitor)){{$visitor->email}}@endif">
                       </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL SENHA DO VISITANTE--}}

    <div class="modal fade" id="alterVisitorPassword" tabindex="-1" role="dialog" aria-labelledby="alterDataVisitorLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alterDataVisitorLabel">Alterar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="atual">Senha Atual</label>
                            <input type="password" class="form-control" id="atual" name="atual">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="nova">Nova Senha</label>
                            <input type="password" class="form-control" id="nova" name="nova">
                        </div>
                        <div class="form-group">
                            <label for="confirmarnova">Confirmar Nova Senha</label>
                            <input type="password" class="form-control" id="confirmarnova" name="confirmarnova">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Nova Senha</button>
                </div>
            </div>
        </div>
    </div>
@endsection