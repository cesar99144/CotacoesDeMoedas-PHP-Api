<link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/adicionarFavorita.css">

<table>
  <tr>
    <th>Moeda</th>
    <th>Status</th>
  </tr>
  <?php foreach ($data['listAddFav'] as $moeda): ?>
  	<tr>
	    <td><a><?php echo $moeda->name; ?></a></td>
	    <td><a class="button-add" href="<?php echo URL_BASE; ?>moeda/adicionarFav/<?php echo $moeda->code; ?>">Adicionar</a></td>
  <?php endforeach; ?>
</table>