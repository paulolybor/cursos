<?php require_once('views/header.php'); 
if(isset($response) && !empty($response)) { ?>
<div class="container">
	<br/>
	<div class="alert alert-<?=$response['type']?> alert-dismissible fade show" role="alert">
	<strong>Atenção</strong> <?=$response['msg']?>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
</div>
<?php }
?>
<div class="container">
	<div class="row">
		<h1 class="m-5">Editar Perfil</h1>
	</div>
<div class="row">

	<form method="POST">
 		<input type="hidden" name="funcao" value="editar">
 		<label>Identificador</label>
 		<input class="form-control mt-2 py-0 px-2" type="text" name="identificador" readonly="true" value="<?=$_SESSION['usuario'][0]?>"/>
 		<label>Nome</label>
 		<input class="form-control mt-2 py-0 px-2" type="text" name="nome" placeholder="Digite o seu nome" value="<?=$_SESSION['usuario'][1]?>" />
 		<label>E-mail</label>
 		<input class="form-control mt-2 py-0 px-2" type="email" name="login" placeholder="Digite o e-mail" value="<?=$_SESSION['usuario'][2]?>"/>
 		<label>Senha</label>
 		<input class="form-control mt-2 py-0 px-2" type="password" name="senha" placeholder="Digite a Senha" value="<?=$_SESSION['usuario'][3]?>"/>
 		<button class="btn btn-outline-warning mt-2" type="submit">Salvar</button>
	</form>
	<a href="?funcao=sair" class="btn btn-outline-info mt-2 ml-5" style="width: 80px;">Sair</a>

</div>

<?php require_once('views/footer.php'); ?>