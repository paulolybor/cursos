 <?php 

/*Define variáveis imutáveis em tempo de execução
* Pode-se alterar a pasta raiz do site que continua funcionando
*/

DEFINE('BASE_URL', $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
DEFINE('BASE_DIR', $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);



  ?>