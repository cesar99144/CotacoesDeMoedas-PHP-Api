<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/login.css">
    </head>
    <body>
        <div class="formulario">
            <form action="<?php echo URL_BASE; ?>home/login" method="POST">
                <div class="text-title">
                   <label for="">Email</label>
                </div>
                <div class="text-input">
                   <input class="input-valor" type="email" name="emailLogin" >
                </div>
                <div class="text-title">
                   <label for="">Senha</label>
                </div>
                <div class="text-input">
                   <input class="input-valor" type="password" name="senhaLogin" >
                </div>
                <div class="buttons-form">
                    <div class="buttons">
                        <input class="butoes-estilo" id="butaoEntrar" type="submit" name="entrar" value="Entrar">
                    </div>
                    <div class="buttons">
                        <a class="butoes-estilo" href="<?php echo URL_BASE; ?>usuario/cadastro" id="butaoCadastrar">Criar conta</a>
                    </div>
                    <?php 
                        //Exibe mensagens de validação para o usuário
                        if(!empty($data['mensagem'])):

                            foreach($data['mensagem'] as $m):
                                echo $m."<br>";
                            endforeach;

                        endif;

                    ?>
                </div>
            </form>
        </div>
    </body>
</html>