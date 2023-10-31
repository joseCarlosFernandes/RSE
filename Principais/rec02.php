<?php
	require("sessao.php");
	require("email.php");
	require("functions.php");
	require("dbconnect.php");

	$codigo = gerar();
	$email = $_POST['email'];
	$mensagem = "Insira o código a seguir para recuperar sua senha: <b>".$codigo."</b>";

	$sql = "select email from usuarios_rse";
	$dataset = mysqli_query($linkDB, $sql);

	$i = 0;
	while ($dados = mysqli_fetch_assoc($dataset)) {
		$emails = $dados['email'];
		if ($emails == $email) {
			$i++;
		}
	}

	if ($i == 0) {
		header("Location: ../MensagensErro/cadastre_se.html");

	} else{

		$retorno = mandarEmail(" ", $email, "Recuperação de Senha", $mensagem);

		if(!$retorno){
			header("Location: rec01.php");
		}else{
			$_SESSION['codigo'] = $codigo;
			$_SESSION['email'] = $email;
			header("Location: rec03.php");
		}
	}
?>