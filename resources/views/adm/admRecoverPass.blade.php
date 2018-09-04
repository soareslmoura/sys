<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Spartacus Traders</title>
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header"><img src="/admin/img/logo/logo_preta_pequena.png" class="img-responsive"></div>
        <div class="card-header">
            <div class="text-center"><strong>Recuperar Senha - Administrador</strong></div>
        </div>
        @include('.inc.erros')
        <div class="card-body">
            <form method="post" action="#">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email de cadastro:</label>
                    <input class="form-control" name="email" id="email" type="email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block" style="margin-bottom: 20px">Recuperar senha</button>
                <div class="text-center" style="padding-top: 10px">
                    <a class="small" href="/adm" style="margin-bottom: 15px">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
