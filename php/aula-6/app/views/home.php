<?php 
//die(__FILE__.__LINE__);

//carrega cabecalho
require_once(BASE_DIR.'/app/views/header.php');
?>
<div class="container">
	
	<marquee><h1>Home</h1></marquee>
	
	<div class="row">
		<div class="mt-2 mb-2 alert" role="alert">
			Informe o valor base, a porcentagem mínima e máxima a ser subtraída e em qual fração deseja realizar a progressão do cálculo.
		</div>
		<form>
			<div class="row mt-4">
				<div class="col-12 col-sm-4">
					<input class="form-control" type="text" name="valor_base" placeholder="Digite o valor"/>
				</div>
				<div class="col-12 col-sm-2">
					<input class="form-control" type="number" name="minimo" placeholder="Mínimo" />
				</div>
				<div class="col-12 col-sm-2">
					<input class="form-control" type="number" name="maximo" placeholder="Máximo">
				</div>
				<div class="col-12 col-sm-2">
					<select class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>
				<div class="col-12 col-sm-2">
					<button class="btn btn-primary btn-block" type="submit">Calcular</button>
				</div>
			</div>
		</form>
	</div>
</div>

<?php
//carrega footer
require_once(BASE_DIR.'/app/views/footer.php');
