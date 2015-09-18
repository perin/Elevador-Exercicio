<?php
spl_autoload_register(function($className){
	require($className.".php");
});


$pessoa = new Pessoa();
$pessoa->chamaElevador();
$pessoa->entrarNoElevador();
$pessoa->sobe(8);

?>