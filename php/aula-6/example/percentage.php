

<table>
	<tr>
		<td>Valor Base</td>
		<td>Desc %</td>
		<td>Desc Valor</td>
		<td>Valor Final</td>
	</tr>
	<?php foreach ($resultado as $key => $value) { ?>
	<tr>
		<td><?=$value['Base']?></td>
		<td><?=$value['Porcentagem']?></td>
		<td><?=$value['Desconto']?></td>
		<td><?=$value['Valor']?></td>
	</tr>
<?php } ?>
</table>