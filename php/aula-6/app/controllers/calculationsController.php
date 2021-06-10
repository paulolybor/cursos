<?php 

if (isset($_GET['p'])) {
	require_once(BASE_DIR.'app/views/calculations/'.$_GET['p'].'.php');	
} else {
	require_once(BASE_DIR."app/views/home.php");	
}