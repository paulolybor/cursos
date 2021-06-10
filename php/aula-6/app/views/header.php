<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <!-- O charset sempre tem que ser o primeiro -->
	<link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<title>Previsor de Cálculo</title>
</head>
<body>
<div class="container">
	<div class="row">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="home.php">P. Calc</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="?p=percentage">Porcentagem</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="?p=sum">Soma</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="?p=division">Divisão</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="?p=subtration" tabindex="-1" aria-disabled="true">Subtração</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</div>
</div>