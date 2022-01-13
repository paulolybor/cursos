<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<title>Central de Operações</title>
</head>
<body>
	<div class="container">
		<div class="row mt-2">
			<div class="col-6" style="background-color: blueviolet;">		<table class="table table-light">
					<thead>
						<tr>
							<td>Op</td>
							<td>Tipo</td>
							<td>Valor</td>
							<td>Quant</td>
							<td>Data</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							for ($i=count($data)-1; $i >= 0 ; $i--) { ?> 
								<tr>
									<td><?=$i+1?></td>
									<td><?php echo $data[$i]['tipo'];?></td>
									<td><?php echo $data[$i]['valor'];?></td>
									<td><?php echo $data[$i]['quantidade'];?></td>
									<td><?=$data[$i]['data'];?></td>
								</tr>
							<?php } ?>
					</tbody>
				</table>		
			</div>
			<div class="col-6" style="background-color: blue;">
				<table class="table table-dark">
					<thead>
						<tr>
							<td>Op</td>
							<td>Tipo</td>
							<td>Valor</td>
							<td>Quant</td>
							<td>Data</td>
						</tr>
					</thead>
					<tbody>
						<?php 
							for ($i=0; $i < count($data) ; $i++) { ?> 
								<tr>
									<td><?=$i+1?></td>
									<td><?php echo $data[$i]['tipo'];?></td>
									<td><?php echo $data[$i]['valor'];?></td>
									<td><?php echo $data[$i]['quantidade'];?></td>
									<td><?=$data[$i]['data'];?></td>
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