@extends('/layouts.appAdm')

@section('conteudo')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/adm">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/adm/users/all">Todos os Usuários</a>
        </li>
        <li class="breadcrumb-item active">Treinamentos Disponíveis</li>
    </ol>
    <h4>Treinamentos Disponíveis</h4>

    <table class="table table-hover table-responsive-sm" id="avaliableTrainingsTable">
        <thead style="background-color: #c8cbcf">
        <tr>
            <th data-column-id="turma" scope="col" >Turma</th>
            <th data-column-id="cidade" scope="col">Cidade</th>
            <th data-column-id="data" scope="col" >Data</th>
            <th data-column-id="vagas" scope="col">Vagas / Disponíveis</th>
            <th data-column-id=" matricular" data-formatter="matricular" data-sortable="false" scope="col">Matricular</th>
        </tr>
        </thead>
        <tbody>
            @if(isset($trainings))

                @foreach($trainings as $tr)
                    <tr>
                        <td>{{$tr->nameTraining}}</td>
                        <td>{{$tr->cityTraining}}</td>
                        <td>{{\App\Http\Controllers\generalsController::dateBrazilian($tr->dateTraining)}}</td>
                        <td>{{$tr->vacancies}}</td>
                        <td><a style='margin-right: 10px; border: none;'  href="/adm/training/openTrainings"  title='Matricular' ><i style="color: #28a745" class="fas fa-user-plus"></i></a></td>
                    </tr>
                @endforeach

            @endif
        </tbody>
    </table>
    <!-- Modal Novo Produto -->
    <div class="modal fade" id="novoProduto" tabindex="-1" role="dialog" aria-labelledby="novoProduto" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="novoProduto">Novo Produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formProduct">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" class="form-control" id="nameproduct" name="nameproduct" placeholder="Nome do produto">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Valor</label>
                                <input type="text" class="form-control money" id="priceproduct" name="priceproduct" placeholder="R$">
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputState">Categoria</label>
                            <select id="categoryproduct" name="categoryproduct" class="form-control">
                                <option disabled selected>Categoria</option>
                                <option disabled>-----------------------</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputZip">Descrição</label>
                            <textarea class="form-control" id="descproduct" name="descproduct" rows="8"></textarea>
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

@endsection