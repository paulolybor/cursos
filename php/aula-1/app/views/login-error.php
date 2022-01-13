<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h3>Os Dados Digitados São Inválidos. <br>
Tente Novamente.</h1>
	<!--<?=__DIR__;?>-->
	<form method="POST" action="./UsuarioController.php">
		
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