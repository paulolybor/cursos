<?php require_once('views/header.php'); 
if(isset($response) && !empty($response)) { ?>
<div class="container">
	<br/>
	<div class="alert alert-<?=$response['type']?> alert-dismissible fade show" role="alert">
	<strong>Atenção</strong> <?=$response['msg']?>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php }
?>

	<div class="row">
		<h1 class="m-5">Tela de Login</h1>
	</div>
	<div class="row">
		<form method="POST">
	 		<input type="hidden" name="funcao" value="logar">
	 		<input class="form-control mt-2" type="email" name="login" placeholder="Digite o e-mail">
	 		<input class="form-control mt-2" type="password" name="senha" placeholder="Digite a Senha">
	 		<button class="btn btn-outline-warning mt-2" type="submit">Acessar</button>
	 		<a href="?funcao=cadastrar" class="btn btn-outline-info mt-2">Cadastrar</a>
		</form>
	</div>
</div>

<?php require_once('views/footer.php'); ?>
