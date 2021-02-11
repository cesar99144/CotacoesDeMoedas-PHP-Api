<link rel="stylesheet" href="<?php echo URL_BASE; ?>Assets/css/adicionarFavorita.css">

<?php 
    //Exibe mensagens de validação para o usuário
    if(!empty($data['mensagem'])):

        foreach($data['mensagem'] as $m):
            echo $m."<br>";
        endforeach;

    endif;

?>


<table>
  <tr>
    <th>Moeda</th>
    <th>Status</th>
  </tr>

  <?php foreach ($data['moedasFavoritas'] as $moeda): ?>
  	<tr>
	    <td><?php echo $moeda['nome']; ?></td>

	    <td><a class="button-remove" href="<?php echo URL_BASE; ?>moeda/adicionarFav/<?php echo $moeda['codigo']; ?>">Remover</a></td>
  <?php endforeach; ?>

  
</table>