<?php

$nome_completo = "Victor Luiz dos Santos";

$nomes = explode(' ', $nome_completo);

echo reset($nomes).' '.end($nomes);
