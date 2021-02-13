<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE; ?>Assets/css/especifica.css">

<div class="formulario">
	<form class="form-busca">
		<select class="moeda-busca" name="codigoMoeda">
			<?php foreach($data['todasMoedas'] as $moedas): ?>
				<option value="<?php echo $moedas->code; ?>"><?php echo $moedas->name; ?></option>
			<?php endforeach; ?>
		</select>
		<button class="butao-bsucar" name="buscar" type="submit"><span class="sr-only">Buscar</span></button>
	</form>
</div>