<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<title>Range CPF</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 m-4">
				<?php if (isset($data['msg'])) { ?>
								<div class="alert alert-<?=$data['type']?> alert-dismissible fade show" role="alert">
									  <strong>Atenção!</strong> <?=$data['msg']?>
									  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							<?php } ?>
				<form method="GET" action="">
					<div class="row">
						<div class="col-12 	mt-4 mb-4">
							<input class="form-control" type="text" name="cpf" placeholder="Digite seu CPF" value="<?=(isset($data['cpf'])?$data['cpf']:'')?>" />
						</div>
						<div class="col-2">
							<input type="submit" class="btn btn-block btn-warning" name="op" value="Propor"/>
						</div>
					</div>
				</form>
			</div>
			<div class="col-12 col-sm-12 col-md-5 ms-4">
				<table class="table table-hover table-dark">
					<thead>
						<tr>
							<td>CPF</td>
							<td>Nome</td>
							<td>Ações</td>
						</tr>
					</thead>
				</table>
			</div>
			<div class="col-12 col-sm-12 col-md-5 ms-4">
				<table class="table table-hover table-dark">
					<thead>
						<tr>
							<td>#</td>
							<td>CPF</td>
							<td>Validade</td>
						</tr>
					</thead>
					<tbody>
						<?php for ($i=1; $i < count($data['possibilidades']); $i++)
							{ ?>
							<tr>
								<td><?=$i?></td>
								<td><?=$data['possibilidades'][$i]?></td>
								<td>
									<?php
										echo validaCPF($data['possibilidades'][$i])?'Ok':'X';
									?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</html>