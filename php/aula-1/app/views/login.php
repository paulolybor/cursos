<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Acessar o Sistema</h1>
	<!--<?=__DIR__;?>-->
	<form method="POST" action="../controllers/UsuarioController.php">
		
		<input type="text" name="nome" placeholder="Seu nome">
		<br/>
		<br/>
		<input type="email" name="email" placeholder="E-mail">
		<br/>
		<br/>
		<input type="password" name="senha" placeholder="Senha">
		<br/>
		<br/>
		<input type="submit" name="operacao" value="Acessar">
	</form>
</body>
</html>