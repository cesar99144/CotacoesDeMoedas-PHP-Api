<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>Assets/css/especifica.css">

<div class="formulario">
	<form class="form-busca" action="<?php echo URL_BASE; ?>moeda/especificas" method="POST">
		<select class="moeda-busca" name="codigoMoeda">
			<?php foreach($data['todasMoedas'] as $moedas): ?>
				<option value="<?php echo $moedas->code; ?>"><?php echo $moedas->name; ?></option>
			<?php endforeach; ?>
		</select>
		<button class="butao-bsucar" name="buscar" type="submit"><span class="sr-only">Buscar</span></button>
	</form>

	<?php if(isset($_POST['codigoMoeda'])): ?>

		<?php //var_dump($data['MoedaEspecifica']); ?>

		<?php foreach($data['MoedaEspecifica'] as $busca): ?>
			 <section class="card-moeda">
        <div class="dados-moedas">
          <div class="info">
            <div class="moeda-name">
                <h3><?php echo $busca->name; ?></h3>
             </div>
             <div class="data">
                <label class="valor-text"><?php echo $busca->create_date; ?></label>
             </div>
          </div>
          <div class="informa-conversao">
             <label class="valor-text">Em real:</label>
          </div>
           <div class="dados-colunas">
              <div class="coluna">
                <div class="text-titulo">
                   <h3>Valor de compra</h3>
                </div>
                <div class="text-desc">
                   <label class="valor-text">R$ <?php $vCompra = number_format($busca->bid, 2, '.', ''); echo $vCompra; ?></label>
                </div>
              </div> 
              <div class="coluna">
                 <div class="text-titulo">
                  <h3>Valor de venda</h3>
                 </div>
                 <div class="text-desc">
                  <label class="valor-text">R$ <?php $valorVenda = number_format($busca->ask, 2, '.', ''); echo $valorVenda; ?></label>
                 </div>
              </div>
              <div class="coluna">
                <div class="text-titulo">
                   <h3>Variação</h3>
                </div>
                <div class="text-desc">
                   <label class="valor-text">R$ <?php echo $busca->pctChange; ?></label>
                </div>
              </div> 
              <div class="coluna">
                 <div class="text-titulo">
                  <h3>Máximo</h3>
                 </div>
                 <div class="text-desc">
                  <label class="valor-text">R$ <?php $maximo = number_format($busca->high, 2, '.', ''); echo $maximo; ?></label>
                 </div>
              </div>
              <div class="coluna">
                 <div class="text-titulo">
                  <h3>Mínimo</h3>
                 </div>
                 <div class="text-desc">
                  <label class="valor-text">R$ <?php $minimo= number_format($busca->low, 2, '.', ''); echo $minimo; ?></label>
                 </div>
              </div>
              
           </div>
        </div>
      </section>
		<?php endforeach; ?>

	<?php endif; ?>
</div>