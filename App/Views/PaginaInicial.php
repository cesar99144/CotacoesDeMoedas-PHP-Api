<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/paginaInicial.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body>
        <section id="title">
            <h1 id="text-title">Cotações de moedas</h1>
        </section>
        <section id="conteudo">
            <div class="conteudo-form">
                <?php require_once 'App/Views/'.$view.'.php'; ?>
            </div>
        </section>
    </body>
</html>