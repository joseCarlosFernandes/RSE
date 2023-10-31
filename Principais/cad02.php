<?php
require("dbconnect.php");
require("criptografia.php");
require("email.php");
require("sessao.php");
require("functions.php");

	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$senha1 = $_POST['senha'];
	$senha2 = $_POST['senha2'];
	$codigo = gerar();

	$sql = "select email from usuarios_rse";
	$dataset = mysqli_query($linkDB, $sql);

	$i = 0;
	while ($dados = mysqli_fetch_assoc($dataset)) {
		$emails = $dados['email'];
		if ($emails == $email) {
			$i++;
		}
	}

	if ($i != 0) {
		header("Location:../MensagensErro/erroCadastrado.html");
	}
	else{
		if ($senha1 != $senha2) {
			header("Location: cad01.php");
		}else{
			$mensagem = "Bem Vindo ao nosso site, para continuar, insira o código a seguir para confirmar seu email: ".$codigo;
			$retorno = mandarEmail("$nome", $email, "Confirme seu Email! ", $mensagem);
			if(!$retorno){
				header("Location:../MensagensErro/erroEmail.html");
			}else{
				$_SESSION['codigo'] = $codigo;
				$_SESSION['email'] = $email;
				$_SESSION['nome'] = $nome;
				$_SESSION['senha'] = $senha1;
				header("Location: cad03.php");
			}
		}
	}
?>