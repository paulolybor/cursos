<?php
// Testando sessões em PHP

if (isset($_REQUEST['valor']) && ($_REQUEST['valor'] == 'enviado')) { // cria sessão se usuário tiver clicado no botão enviar do formulário
    session_start(); 
    // cria variáveis de sessão e as inicializa com os dados do formulário:
        $_SESSION['nome'] = $_POST['frm_nome'];
        $_SESSION['sobrenome'] = $_POST['frm_sobrenome'];

        echo "<a href='exercicio-04.php'>Ir para a página 2</a>";
} else { //Se o usuário não clicou no botão de enviar, mostra o formulário na página:

?>
<form name="form1" action="exercicio-03.php?valor=enviado" method="POST">
Digite seu nome:
<input type="text" name="frm_nome"><br>

Digite seu sobrenome:
<input type="text" name="frm_sobrenome"><br>

<input type="submit" value="Enviar">

</form>

<?php

}

?>