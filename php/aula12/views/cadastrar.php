<?php require_once('header.php'); 
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
		<h1 class="m-5">Tela de Cadastro</h1>
	</div>
<div class="row">
	<form method="POST">
 		<input type="hidden" name="funcao" value="cadastrar">
 		<input class="form-control mt-2" type="text" name="nome" placeholder="Digite o seu nome">
 		<input class="form-control mt-2" type="email" name="login" placeholder="Digite o e-mail">
 		<input class="form-control mt-2" type="password" name="senha" placeholder="Digite a Senha">
 		<a href="?funcao=logar" class="btn btn-outline-info mt-2">Acessar</a>
 		<button class="btn btn-outline-warning mt-2" type="submit">Cadastrar</button>
	</form>
</div>

<?php require_once('footer.php'); ?>