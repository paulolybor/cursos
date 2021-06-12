<?php 
//carrega cabecalho
require_once(BASE_DIR.'/app/views/header.php');
?>
<div class="container">
	
<marquee><h2>Divisão</h2></marquee>
<br/><br/>

<!-- inserir atributos para não apagar os valores digitados quando clica em aplicar -->

<form class="mt-4 mb-4" method="GET">
	<input type="hidden" name="p" value="division" />
	<div class="row">
		<div class="col-12 col-sm-3">
			<input class="form-control" type="text" name="valor" placeholder="Valor" value="<?=isset($_GET['valor'])?$_GET['valor']:''?>">
		</div>
		<div class="col-12 col-sm-2">
			<input class="form-control" type="text" name="juros" placeholder="Juros" value="<?=isset($_GET['juros'])?$_GET['juros']:''?>">
		</div>
		<div class="col-12 col-sm-1">
			<select class="form-control" name="parcelas">
				<option value="1" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==1?'selected="true"':''?>>1</option>
				<option value="2" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==2?'selected="true"':''?>>2</option>
				<option value="3" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==3?'selected="true"':''?>>3</option>
				<option value="4" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==4?'selected="true"':''?>>4</option>
				<option value="5" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==5?'selected="true"':''?>>5</option>
				<option value="6" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==6?'selected="true"':''?>>6</option>
				<option value="7" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==7?'selected="true"':''?>>7</option>
				<option value="8" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==8?'selected="true"':''?>>8</option>
				<option value="9" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==9?'selected="true"':''?>>9</option>
				<option value="10" <?=isset($_GET['parcelas'])&&$_GET['parcelas']==10?'selected="true"':''?>>10</option>
			</select>
		</div>
		<div class="col-12 col-sm-4">
			<input type="radio" name="tipo" value="composto" <?=isset($_GET['tipo'])&&$_GET['tipo']=="composto"?'checked':''?> /> Composto
			<input type="radio" name="tipo" value="diluido" <?=isset($_GET['tipo'])&&$_GET['tipo']=="diluido"?'checked':''?>/> Diluído
		</div>

		<div class="col-12 col-sm-2">
			<button class="btn btn-warning" type="submit">Aplicar</button>
		</div>
	</div>
</form>
<div class="col-12">
	<table class="table table-dark table-hover">
		<thead>
			<tr>
				<td>Parcela</td>
				<td>Valor Base(R$)</td>
				<td>Juros(%)</td>
				<td>Valor Juros(R$)</td>
				<td>Valor Parcela(R$)</td>
				<td>Ação</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($resultados as $key => $value) { ?>
			<tr>
				<td><?=$key+1?></td>
				<td><?=$value['valor']?></td>
				<td><?=$value['juros']?></td>
				<td><?=$value['valor_juros']?></td>
				<td><?=$value['valor_parcela']?></td>
				<td><?=$value['juros']?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
</div>

</div>

<?php
//carrega footer
require_once(BASE_DIR.'/app/views/footer.php');
