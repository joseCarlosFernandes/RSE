<?php
	session_start();
	if(!isset($_SESSION['log'])){
		$_SESSION['log'] = 0; 
		if (ob_get_level() > 0) {
        	ob_clean();
    	}
    	return "Não Logado";
	}
?>