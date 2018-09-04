<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spartacus Traders</title>
    <link rel="icon" href="/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href='/site/css/personal.css' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/site/css/agency.css" rel="stylesheet">
    <link href="/site/css/mine.css" rel="stylesheet">

</head>

<body id="page-top">
@include('inc.erros')
    <div class="row">
        <div class="card col-xs-4 offset-4" style="margin-top: 80px">
            <div class="card-header" style="background-color: #FEC810; text-align: center">
                <h4>Recuperar senha de usuário</h4>
            </div>
            <div class="card-body">
                <form action="/recover" method="post">
                    {{-- CSRF--}}
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email *" title=" "  required >
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-md text-uppercase" type="submit" style="color: black  ">Recuperar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Bootstrap core JavaScript -->
<script src="/site/vendor/jquery/jquery.min.js"></script>
<script src="/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/site/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="/site/js/jqBootstrapValidation.js"></script>
<script src="/site/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="/site/js/agency.min.js"></script>
</body>

</html>