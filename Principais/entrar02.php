<?php
		require("dbconnect.php");
		require("criptografia.php");
		require("sessao.php");

		$email = $_POST['email'];
		$senha = $_POST['senha'];

		$sql = "select nome, senha from usuarios_rse where email= ?";
		$stmt = mysqli_prepare($linkDB, $sql);
		if(!$stmt){
			die ("Erro ao preparar consulta");
		}
		if(!mysqli_stmt_bind_param($stmt, "s" ,$email)) { 
            die("Não foi possível consultar os parâmetros!");
        }
        if(!mysqli_stmt_execute($stmt)) {
            die("Não foi possível executar!");
        }
        if(!mysqli_stmt_bind_result($stmt, $nome, $senhaBD)){
            die("cominação sem resultado"); 
        }
        $fetch=mysqli_stmt_fetch($stmt);
        if(!$fetch){
            header("Location: ../MensagensErro/cadastre_se.html");
        }
        if($fetch == null){
            header("Location: ../MensagensErro/cadastre_se.html");    	
        }else {
        	if (!ChecaSenha($senha,$senhaBD)){
				header("Location: entrar.php");
           	}
           	else{
				$_SESSION['id'] = session_id();
				$_SESSION['log'] = 1;
				$_SESSION['nomeUsuario'] = $nome;
				$_SESSION['email'] = $email;
	        	if (ob_get_level() > 0) {
    				ob_clean();
				}
				header("Location:../index.php");
			}
        }
	?>