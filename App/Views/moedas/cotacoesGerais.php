<link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/cotacoesGerais.css">

<table>
  <tr>
  	<th>Pais</th>
    <th>Moeda</th>
    <th>Valor de compra</th>
    <th>Valor de venda</th>
    <th>Variação</th>
    <th>Máximo</th>
    <th>mínimo</th>
  </tr>
  <?php foreach ($data['gerais'] as $moeda): ?>
    <tr>
	  	<td></td>
	    <td><a href="<?php echo $moeda->code; ?>"><?php echo $moeda->name; ?></a></td>
	    <td><?php echo $moeda->bid;?></td>
	    <td><?php echo $moeda->ask;?></td>
	    <td><?php echo $moeda->pctChange;?></td>
	    <td><?php echo $moeda->high;?></td>
	    <td><?php echo $moeda->low;?></td>
	</tr>
  <?php endforeach; ?>
</table>