<?php
	require("dbconnect.php");
	require("sessao.php");
	require("criptografia.php");

	$senha1 = $_POST['senha1'];
	$senha2 = $_POST['senha2'];
	$email = $_SESSION['email'];

	$sql = "select nome from usuarios_rse where email = ?";
	$stmt = mysqli_prepare($linkDB, $sql);
	if (!$stmt) {
		die("Não foi possível prepara a consulta");
	}
	if (!mysqli_stmt_bind_param($stmt,"s",$email)) {
		die("Não foi possível vincular parametros");
	}
	if (!mysqli_stmt_execute($stmt)) {
		die("Não foi possível executar busca no banco de dados");
	}
	if (!mysqli_stmt_bind_result($stmt,$nome)) {
		die("Não foi possível vincular resultados");
	}
	$fetch=mysqli_stmt_fetch($stmt);
    if(!$fetch){
       die("Erro Fetch");
   	}
    if($fetch == null){
        die("Fetch Null");    	
    }else{
		if ($senha1 != $senha2) {
			header("Location: rec05.php");
		}
		else{
			$senhaCrip = FazSenha($senha1, $nome);

			mysqli_stmt_free_result($stmt);

			$sql2 = "UPDATE usuarios_rse SET senha = ? WHERE email = ?";
			$stmt2 = mysqli_prepare($linkDB, $sql2);
			if (!$stmt2) {
				die("Não foi possível preparar consulta 2");
			}
			if (!mysqli_stmt_bind_param($stmt2,"ss", $senhaCrip,$email)) {
				die("Não foi possível vincular parametros 2");
			}
			if (!mysqli_stmt_execute($stmt2)) {
				die("Não foi possível executar atualização no banco de dados");
			}else{
				header("Location: entrar.php");
				session_destroy();
			}
		}
	}

?>