<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/login.css">
    </head>
    <body>
        <div class="formulario">
            <form action="" method="POST">
                <div class="text-title">
                   <label for="">Email</label>
                </div>
                <div class="text-input">
                   <input class="input-valor" type="email" name="email" >
                </div>
                <div class="text-title">
                   <label for="">Senha</label>
                </div>
                <div class="text-input">
                   <input class="input-valor" type="password" name="email" >
                </div>
                <div class="buttons-form">
                    <div class="buttons">
                        <input class="butoes-estilo" id="butaoEntrar" type="submit" value="Entrar">
                    </div>
                    <div class="buttons">
                        <a class="butoes-estilo" href="<?php echo URL_BASE; ?>usuario/cadastro" id="butaoCadastrar">Criar conta</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>