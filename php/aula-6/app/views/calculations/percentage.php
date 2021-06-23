<?php 
//die(__FILE__.__LINE__);

//carrega cabecalho
require_once(BASE_DIR.'/app/views/header.php');
?>

	
<marquee><h2>Porcentagem</h2></marquee>

	<div class="row">
		<div class="mt-2 mb-2 alert" role="alert">
			<h3>Informe o valor base, a porcentagem mínima e a máxima a para o desconto e de quantos em quantos % deseja realizar a progressão do cálculo.</h3>
		</div>
		<form class="">
			<!--Esse input hidden é para imprimir o p=percentage na url e chamar a opcao no switcase da calculationsController -->
			<input type="hidden" name="p" value="percentage">
			<div class="row mt-4">
				<div class="col-12 col-sm-4">
					<input class="form-control" type="text" name="valor_base" placeholder="Digite o valor" value="<?=isset($_GET['valor_base'])?$_GET['valor_base']:''?>" />
				</div>
				<div class="col-12 col-sm-2">
					<input class="form-control" type="number" name="minimo" placeholder="Mínimo"  value="<?=isset($_GET['minimo'])?$_GET['minimo']:''?>"/>
				</div>
				<div class="col-12 col-sm-2">
					<input class="form-control" type="number" name="maximo" placeholder="Máximo"  value="<?=isset($_GET['maximo'])?$_GET['maximo']:''?>"/>
				</div>
				<div class="col-12 col-sm-2">
					<select class="form-control" name="fracao">
						<option value="1" <?=isset($_GET['fracao'])&&$_GET['fracao']==1?'selected="true"':''?>>1</option>
						<option value="2" <?=isset($_GET['fracao'])&&$_GET['fracao']==2?'selected="true"':''?>>2</option>
						<option value="3" <?=isset($_GET['fracao'])&&$_GET['fracao']==3?'selected="true"':''?>>3</option>
						<option value="4" <?=isset($_GET['fracao'])&&$_GET['fracao']==4?'selected="true"':''?>>4</option>
						<option value="5" <?=isset($_GET['fracao'])&&$_GET['fracao']==5?'selected="true"':''?>>5</option>
						<option value="6" <?=isset($_GET['fracao'])&&$_GET['fracao']==6?'selected="true"':''?>>6</option>
						<option value="7" <?=isset($_GET['fracao'])&&$_GET['fracao']==7?'selected="true"':''?>>7</option>
						<option value="8" <?=isset($_GET['fracao'])&&$_GET['fracao']==8?'selected="true"':''?>>8</option>
						<option value="9" <?=isset($_GET['fracao'])&&$_GET['fracao']==9?'selected="true"':''?>>9</option>
						<option value="10" <?=isset($_GET['fracao'])&&$_GET['fracao']==10?'selected="true"':''?>>10</option>
						<option value="11" <?=isset($_GET['fracao'])&&$_GET['fracao']==11?'selected="true"':''?>>11</option>
					</select>
				</div>
				<div class="col-12 col-sm-2">
					<button class="btn btn-primary btn-block" type="submit">Calcular</button>
				</div>
			</div>
		</form>
	</div>


<br/><br/>


	<div class="row">
		<div class="col-12" >
			<table class="table table-dark table-hover w-75" style="margin: auto;">
				<tr>
					<td>#</td>
					<td>Valor Base</td>
					<td>Desc (%)</td>
					<td>Desc (R$)</td>
					<td>Valor Final(R$)</td>
					<td>Ação</td>
				</tr>
				<?php foreach ($resultado as $key => $value) { ?>
				<tr>
					<td><?=$key+1?></td>
					<td><?="R$".formatMoney($value['Base'])?></td>
					<td><?=$value['Porcentagem'].'%'?></td>
					<td><?=$value['Desconto']?></td>
					<td><?=$value['Valor']?></td>
					<td>
					<!-- Posso alterar esse button por a para inserir um link como o resultado do foreach
						<button class="btn btn-warning btn-sm">Parcelar</button>  -->
						<a class="btn btn-warning btn-sm" href="?p=division&valor=<?=$value['Valor']?>&valor_base=<?=$value['Base']?>">Parcelar</a>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>


<br/><br/>
<?php
//carrega footer
require_once(BASE_DIR.'/app/views/footer.php');
