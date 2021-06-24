<?php
	if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
		
		$data = array(
					'type' => 'danger',
					'msg' => 'Arquivo com extensão inválida!'
		);

		if (strpos($_FILES['arquivo']['type'], 'image')==false) {

			$extensao = explode('.', $_FILES['arquivo']['name']);
			$extensao = end($extensao);

			$tmp_name = explode('/', $_FILES['arquivo']['tmp_name']);
			$tmp_name = end($tmp_name);

			$arr = explode(DIRECTORY_SEPARATOR, $_FILES['arquivo']['tmp_name']);
			$arr = explode('.', end($arr));
			$tmp_name = $arr[0];

			$target_file = "upload/$tmp_name.$extensao";

			if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $target_file)) {
				$data = array(
						'type' => 'success',
						'msg' => 'Arquivo carregado com sucesso!'
				);
			} else {
				$data = array(
						'type' => 'warning',
						'msg' => 'Não foi possível realizar o carregamento!'
				);
			}

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
</head>
<body background="<?=$target_file?>">
	<?php if (isset($data) && !empty($data)): ?>
		<p><?=$data['msg']?></p>
		<br/>
	<?php endif; ?>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="arquivo" accept="image/png, image/jpeg">
		<button type="submit">Enviar</button>		
	</form>

</body>
</html>