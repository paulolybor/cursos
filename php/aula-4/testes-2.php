<?php

$font = array('Se','não','For',1,'String');
$montag = array();

for ($i=0; $i < count($font); $i=$i+2) { 
    $montag[] = $font[$i];
}
echo '<pre>';
var_dump($montag);