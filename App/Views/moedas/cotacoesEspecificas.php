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
				   <div class="moeda-name">
				   	  <label><?php echo $busca->name; ?></label>
				   </div>
				   <div class="dados-colunas">
				   	  
				   </div>
				</div>
			</section>
		<?php endforeach; ?>

	<?php endif; ?>
</div>