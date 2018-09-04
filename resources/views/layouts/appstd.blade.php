<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="author" content="Marx JMoura"><meta name="description" content="Create a template using a sidebar with two level of navigation.">
    <title>Aluno Spartacus</title>
    <link rel="icon" href="../../favicon.ico"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link href="css/admin4b.min.css" rel="stylesheet">
</head>
<body>
<div class="app" >
    <div class="app-body" >
        <div class="app-sidebar sidebar-slide-left">
            <div class="text-right"><button type="button" class="btn btn-sidebar" data-dismiss="sidebar"><span class="x"></span></button></div>
            <div class="sidebar-header" style="padding-top: 0px; padding-bottom: 0px">
                <img src="vendor/assets/img/john-doe.png" class="user-photo">
                <p class="username">John Doe<br>
                    <small>john.doe@email.com</small>
                </p>
            </div>
            <ul id="sidebar-nav" class="sidebar-nav" >
                <li class="sidebar-nav-group">
                    <a href="#content" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-doc"></i> Conteúdos</a>
                    <ul id="content" class="collapse" data-parent="#sidebar-nav">
                        <li>
                            <a href="#" class="sidebar-nav-link">Blank page</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Details page</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Error 404</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Error 500</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Timeline</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-group">
                    <a href="#device-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-screen-tablet"></i> Arquivos</a>
                    <ul id="device-controls" class="collapse" data-parent="#sidebar-nav">
                        <li>
                            <a href="#" class="sidebar-nav-link">Camera</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">File manager</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-group">
                    <a href="#forms" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-pencil"></i> Vídeos</a>
                    <ul id="forms" class="collapse" data-parent="#sidebar-nav">
                        <li>
                            <a href="#" class="sidebar-nav-link">Basic form</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Multi step form</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Tabbed form</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-group">
                    <a href="#input-controls" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-note"></i> Produtos</a>
                    <ul id="input-controls" class="collapse" data-parent="#sidebar-nav">
                        <li>
                            <a href="#" class="sidebar-nav-link">Checkbox</a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-nav-link">Input date</a>
                        </li>
                        <li>
                            <a href="../../pages/input-controls/input-group.html" class="sidebar-nav-link">Input group</a>
                        </li>
                        <li>
                            <a href="../../pages/input-controls/input-suggestion.html" class="sidebar-nav-link">Input suggestion</a>
                        </li>
                        <li>
                            <a href="../../pages/input-controls/label.html" class="sidebar-nav-link">Label</a>
                        </li>
                        <li>
                            <a href="../../pages/input-controls/radio-button.html" class="sidebar-nav-link">Radio button</a>
                        </li>
                        <li>
                            <a href="../../pages/input-controls/toggle-switch.html" class="sidebar-nav-link">Toggle switch</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-group">
                    <a href="#layout" class="sidebar-nav-link" data-toggle="collapse"><i class="icon-layers"></i> Pagamentos</a>
                    <ul id="layout" class="collapse" data-parent="#sidebar-nav">
                        <li>
                            <a href="../../pages/layout/sidebar.html" class="sidebar-nav-link">Sidebar</a>
                        </li>
                        <li>
                            <a href="../../pages/layout/spinner.html" class="sidebar-nav-link">Spinner</a>
                        </li>
                        <li>
                            <a href="../../pages/layout/tabs.html" class="sidebar-nav-link">Tabs</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../../pages/content/chat.html" data-toggle="tooltip" title="Suporte"><i class="icon-bubbles"></i> </a>
                <a href="../../pages/content/settings.html" data-toggle="tooltip" title="Configurações"><i class="icon-settings"></i> </a>
                <a href="/std/logout" data-toggle="tooltip" title="Sair"><i class="icon-logout"></i></a>
            </div>
        </div>
        <!--  FINAL SIDEBAR -->

        <div class="app-content">
            <nav class="navbar navbar-expand navbar-light bg-white">
                <button type="button" class="btn btn-sidebar" data-toggle="sidebar"><i class="icon-menu"></i></button>
                <div class="navbar-brand">Spartacus Traders - Área Restrita</div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary">3</span> <i class="icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="../../pages/content/notification.html" class="dropdown-item"><small class="dropdown-item-title">Lorem ipsum (today)</small><br><div>Lorem ipsum dolor sit amet...</div></a>
                            <div class="dropdown-divider"></div>
                            <a href="../../pages/content/notification.html" class="dropdown-item"><small class="text-secondary">Lorem ipsum (yesterday)</small><br><div>Lorem ipsum dolor sit amet...</div></a>
                            <div class="dropdown-divider"></div>
                            <a href="../../pages/content/notification.html" class="dropdown-item"><small class="text-secondary">Lorem ipsum (12/25/2017)</small><br><div>Lorem ipsum dolor sit amet...</div></a>
                            <div class="dropdown-divider"></div>
                            <a href="../../pages/content/notifications.html" class="dropdown-item dropdown-link">See all notifications</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Layout</li>
                    <li class="breadcrumb-item active" aria-current="page">Sidebar</li>
                </ol>
            </nav>


            <div style="padding: 10px 10px">
                <!-- CONTEUDO -->
                     @yield('conteudo')
                 <!-- FINAL CONTEUDO -->
            </div>


        </div>




    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="js/admin4b.min.js"></script>
<script src="vendor/assets/js/admin4b.docs.js"></script>
</body>
</html>