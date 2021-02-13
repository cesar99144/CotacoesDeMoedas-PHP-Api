<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/dashboard.css">
        <title>Dashboard</title>
    </head>
    <body>
        <header>
           <div class="nomeUser">
              <h3 class="text">Olá, <?php echo $_SESSION['userNome']; ?></h3>
           </div>
           <div class="header-logo">
              <h3 class="text">Cotações de moedas</h3>
           </div>
           <div class="logout">
              <a id="butaoSair" href="<?php echo URL_BASE; ?>home/logout">Logout</a>
           </div>
        </header>
        <section>
            <aside>
                <nav id="menu">
                    <h3>Menu geral</h3>
                   <ul>
                     <li><a href="<?php echo URL_BASE; ?>moeda/gerais">Cotações gerais</a></li>
                     <li><a href="<?php echo URL_BASE; ?>moeda/especificas">Cotações moedas específicas</a></li>
                     <li><a href="">Fechamento últimos dias</a></li>
                     <li><a href="">Fechamento período específico</a></li>
                     <li><a href="">Conversor de moeda</a></li>
                   </ul>
                </nav>
            </aside>
            <div class="conteudo">
                <?php require_once 'App/Views/'.$view.'.php'; ?>
            </div>
        </section>
    </body>
</html>