<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADM - Spartacus Traders</title>
    <!-- Bootstrap core CSS-->
    <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/vendor/jquery.bootgrid-1.3.1/jquery.bootgrid.css" rel="stylesheet" type="text/css">
    <link href="/admin/css/personal.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="/admin/css/sb-admin.css" rel="stylesheet">


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand img-logo" href=""></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
                <a class="nav-link" href="/adm">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-link-text">Página Principal</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Arquivos">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Arquivos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="navbar.html"><i class="fa fa-fw fa-list"></i> Lista de Arquivos</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuários">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#usuarios" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-users"></i>
                    <span class="nav-link-text">Usuários</span>
                </a>
                <ul class="sidenav-second-level collapse" id="usuarios">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Lista de Usuários">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Multiusuarios" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Lista de Usuários</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="Multiusuarios" >
                            <li>
                                <a href="/adm/users/all">Todos os usuários</a>
                            </li>
                            <li>
                                <a href="">Administradores</a>
                            </li>
                            <li>
                                <a href="">Alunos</a>
                            </li>
                            <li>
                                <a href="">Visitantes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-fw fa-user-circle"></i>
                            <span class="nav-link-text">Contas</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produtos">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                    <span class="nav-link-text">Produtos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="/adm/products">Todos os Produtos</a>
                    </li>
                    <li>
                        <a href="#">Treinamentos</a>
                    </li>
                    <li>
                        <a href="#">Mentoria</a>
                    </li>
                    <li>
                        <a href="#">Acesso ao Site</a>
                    </li>
                    <li>
                        <a href="#">Sala de trader Ao Vivo</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Treinamentos">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#treinamentos" data-parent="#treinamentosAccordion">
                    <i class="fa fa-fw fa-book"></i>
                    <span class="nav-link-text">Treinamentos</span>
                </a>
                <ul class="sidenav-second-level collapse" id="treinamentos">
                    <li>
                        <a href="/adm/training">Lista de Treinamentos</a>
                    </li>
                    <li>
                        <a href="register.html">Turmas</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Finalizados</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="configuracoes">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#configuracoes" data-parent="#configuracoes">
                    <i class="fa fa-fw fa-cog"></i>
                    <span class="nav-link-text">Configurações</span>
                </a>
                <ul class="sidenav-second-level collapse" id="configuracoes">
                    <li>
                        <a href="login.html">Pagamentos</a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administradores">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#confsys" data-parent="#Administradores">
                            <i class="fas fa-cogs"></i>
                            <span class="nav-link-text">Gerência do Sistema</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="confsys" >
                            <li>
                                <a href="/adm/management">Gerenciar</a>
                            </li>
                            <li>
                                <a href="">Ajustes</a>
                            </li>
                            <li>
                                <a href="">Logs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administradores">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Administradores" data-parent="#Administradores">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Administradores</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="Administradores" >
                            <li>
                                <a href="">Gerenciar</a>
                            </li>
                            <li>
                                <a href="">Níveis</a>
                            </li>
                            <li>
                                <a href="">Logs</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="forgot-password.html">Finalizados</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#modalLogout">
                    <i class="fas fa-sign-out-alt"></i> Sair</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <!-- CONTEUDO -->
                @yield('conteudo')
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small><strong>ADM - </strong>Spartacus Traders © 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogout" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sair do sistema</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tem certeza que deseja sair?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/adm/logout">Sair</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/admin/js/sb-admin.min.js"></script>


</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="/vendor/mask/jquery.mask.min.js"></script>
<script src="/vendor/jquery.bootgrid-1.3.1/jquery.bootgrid.js"></script>





<script>

    $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('00 0000-0000');
        $('.phone_with_ddd').mask('(00) 00000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
    });

</script>

<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':"{{csrf_token()}}"
        }
    });
</script>
<script src="/personal/adm.js"></script>


</body>

</html>
