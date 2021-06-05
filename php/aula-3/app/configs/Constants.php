<?php

//Para ver todas as pasts do Servidor
//echo '<pre>';
//var_dump($_SERVER);

//Remove possiveis valores de GET
$request_uri = explode('?', $_SERVER['REQUEST_URI'])[0];


DEFINE('BASE_URL', $_SERVER['SERVER_NAME'].$request_uri);
DEFINE('BASE_DIR', $_SERVER['DOCUMENT_ROOT'].$request_uri);
