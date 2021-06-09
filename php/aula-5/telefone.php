<?php

$telefone_dd_uf = array(
					'41' => 'Ctba',
					'61' => 'DF',
					'67' => 'CpoG',
					'11' => 'SP',
					'44' => 'Mga'

);

$telefone = '(44) 988289000';
$dd = $telefone[1].$telefone[2];

echo $telefone_dd_uf[$dd];