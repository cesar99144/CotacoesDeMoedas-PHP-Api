<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/paginaInicial.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
    <div class="sidenav">
         <div class="login-main-text">
            <h2>Cotações de moedas<br></h2>
            <p>Faça login ou cadastra-se</p>
        </div>
    </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <?php require_once 'App/Views/'.$view.'.php'; ?>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>