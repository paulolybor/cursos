<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login de Cliente</title>
</head>
<body>
	<h1>Faça seu Login</h1>
	<br />
	<form method="POST" action="app/controllers/controleLogin.php">
		<input type="text" name="nome" placeholder="Digite seu nome"><br/><br/>
		<input type="emai" name="email" placeholder="Digite o E-mail"><br/><br/>
		<input type="password" name="pass" placeholder="Senha"><br/><br/>

			<!-- Anti Spam -->
				<label class="nao-aparece">Se você não é um robo, deixe em branco</label>
				<input type="text" class="nao-aparece" name="leaveblank">

				<label class="nao-aparece">Se você não é um robo, não altere esse campo</label>
				<input type="text" class="nao-aparece" name="dontchange" value="https://">			
			<!-- //Anti Spam -->


		<button type="submit"> Enviar </button><br/><br/>
		
	</form>
</body>

<style type="text/css">
	.nao-aparece {
		visibility: hidden;
		height: 0px;
		position: absolute;
	}
</style>

</html>


<?php 

 ?>