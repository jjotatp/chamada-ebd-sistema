<?php
	include "modulos/head-body.php";
	include "modulos/header-menu.php";

	include "conteudo/".$_GET["id"].".php";
	// $pag = $pag.'.php';    
	// if(file_exists($pag)){
	//    include($pag);
	// }
		

	include 'modulos/end-body.php';
?>