<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/login.css">
    </head>
    <body>
        <form action="<?php echo URL_BASE; ?>home/index" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="emailLogin" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senhaLogin" class="form-control" placeholder="Password">
            </div>
            <button type="submit" name="entrar" class="btn btn-black">Login</button>
            <a href="<?php echo URL_BASE; ?>usuario/cadastro" class="btn btn-secondary">Register</a>
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