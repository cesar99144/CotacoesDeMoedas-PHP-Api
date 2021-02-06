<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/login.css">
    </head>
    <body>
        <form action="<?php echo URL_BASE; ?>usuario/cadastro" method="POST">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome e sobrenome">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Exemplo@exemplo.com">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                <button type="submit" name="cadastrar" class="btn btn-black">Cadastrar</button>
                <a href="<?php echo URL_BASE; ?>home/index" class="btn btn-secondary">Login</a>
                <?php 
                    //Exibe mensagens de validação para o usuário
                    if(!empty($data['mensagem'])):

                        foreach($data['mensagem'] as $m):
                            echo $m."<br>";
                        endforeach;

                    endif;

                ?>

        </form>
    </body>
</html>