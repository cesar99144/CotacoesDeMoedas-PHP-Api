<link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/adicionarFavorita.css">

<table>
  <tr>
    <th>Moeda</th>
    <th>Status</th>
  </tr>
  <?php foreach ($data['listAddFav'] as $moeda): ?>
  	<tr>
	    <td><a href="<?php echo $moeda->code; ?>"><?php echo $moeda->name; ?></a></td>
	    <td><a class="button-add" href="#">Adicionar</a></td>
  <?php endforeach; ?>
</table>