<?php

	$url = "http://fipeapi.appspot.com/api/1/carros/marcas.json";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content  = curl_exec($ch);
    $list_marcas = json_decode($content);

    if (isset($_GET['marca']) && !empty($_GET['marca'])) {
		
		$url = "http://fipeapi.appspot.com/api/1/carros/veiculos/".$_GET['marca'].".json";
		$ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    $content  = curl_exec($ch);
	    $list_modelos = json_decode($content);

	    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo carros FIPE</title>
</head>
<body>
	<form action="" method="GET">
		<select name="marca">
			<?php foreach ($list_marcas as $key => $marca) { ?>
				<option value="<?=$marca->id?>"
					<?=((isset($_GET['marca']) && $marca->id==$_GET['marca'])?'selected':'')?>
				>
					<?=$marca->name?>
						
				</option>
			<?php } ?>			
		</select>
		<br/>
		<select name="modelo">
			<?php foreach ($list_modelos as $key => $modelo) { ?>
				<option value="<?=$modelo->id?>"><?=$modelo->name?></option>
			<?php } ?>
		</select>
		<button type="submit">Avançar</button>
	</form>
</body>
</html>