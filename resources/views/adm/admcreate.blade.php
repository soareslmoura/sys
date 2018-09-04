@extends('../layouts.appAdm')

@section('conteudo')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/adm">Home</a>
        </li>
        <li class="breadcrumb-item">
            Usuários
        </li>
        <li class="breadcrumb-item active">Todos os Usuários</li>
    </ol>
    <div>
        <h4>Novo Admin</h4>
    </div>
    <div>
        <form action="/adm/create" method="post">
            {{-- CSRF--}}
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Nome *" title=" " >

                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Email *" title=" "  >

                    </div>
                    <div class="form-group">
                        <input class="form-control phone_with_ddd" name="nrCell" id="phone" type="tel" placeholder="Celular *" title=" "  >
                        <label style="color: white">Coloque seu número real. Usaremos para confirmar sua conta</label>

                    </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Confirmar inscrição</button>
                </div>
            </div>
        </form>
    </div>

@endsection