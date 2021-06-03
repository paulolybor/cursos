<?php
$nome = 'Victor Luis';
$email = 'victor.santos@clansoftware.com.br';
$genero = 'M';
$cargo = 'CTO';
$idade = 48;
$grupo_risco = 65;
?>
<b>Nome: </b> <?=$nome?> <!-- igual ao de baixo. Utilizado somente para 1 linha e 1 echo -->
<br/>
<b>E-mail: </b> <?php echo $email; ?>
<br/>
<input type="text" name="" value="<?=$genero?>">
<P>
<label>CARGO</label></P>
<input type="text" value="<?=$cargo?>">
<br/>
<p>
<label>Idade: <?=$idade?></label>
<br/>
<label>Grupo de risco: <?=$grupo_risco?></label>
<br/>
<strong>Faltam: </strong><?php echo $grupo_risco - $idade; ?>
</p>