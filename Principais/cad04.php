<?php
	require("sessao.php");
	$userInput = $_POST['codigo'];
	$codigo = $_SESSION['codigo'];

	if ($userInput != $codigo) {
		echo("Insira o código enviado no seu email");
	} else{
		header("Location: cad05.php");
	}

?>