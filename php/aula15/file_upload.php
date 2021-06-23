<?php

	if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo'])) {
		echo '<pre>';
		var_dump($_FILES);
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="arquivo" accept="image/png, image/jpeg">
		<button type="submit">Enviar</button>		
	</form>

</body>
</html>