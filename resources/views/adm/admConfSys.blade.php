@extends('/layouts.appAdm')

@section('conteudo')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/adm">Home</a>
        </li>
        <li class="breadcrumb-item active">Gestão do Sistema</li>
    </ol>
    @include('.inc.erros')
    <ul class="list-group">
        <li class="list-group-item">
            <div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary"data-toggle="modal" data-target="#categorias">Categorias</button>
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#categoria">Nova Categoria</button>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div>
              --------------------
            </div>
        </li>
        <li class="list-group-item">
            <div>
                ------------------
            </div>
        </li>
        <li class="list-group-item">
            <div>
                --------------------
            </div>
        </li>
    </ul>

    <!-- Categorias -->
    <div class="modal fade" id="categorias" tabindex="-1" role="dialog" aria-labelledby="categorias" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categorias">Categorias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Opções</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Nova Categoria -->
    <div class="modal fade" id="categoria" tabindex="-1" role="dialog" aria-labelledby="categoria" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoria">Nova Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/adm/category">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="category" class="form-control form-row" id="categoria"  placeholder="Nome da Categoria">
                        </div>
                        <button type="submit" class="btn btn-primary form-row">Salvar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fchar</button>
                </div>
            </div>
        </div>
    </div>
@endsection