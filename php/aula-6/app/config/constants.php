<?php 

//echo '<pre>';
//var_dump($_SERVER);

//Remove possiveis valores de GET
$request_uri = explode('?', $_SERVER['REQUEST_URI'])[0];

//die(__FILE__.__LINE__);

//Definindo caminho dinamico
DEFINE('BASE_URL', $_SERVER['SERVER_NAME'].$request_uri);

//definindo caminho estatico
DEFINE('BASE_DIR', $_SERVER['DOCUMENT_ROOT'].$request_uri);