<?php
	require("dbconnect.php");
	require("criptografia.php");
	require("sessao.php");
	require("functions.php");

	$email = $_SESSION['email'];
	$nome = $_SESSION['nome'];
	$senha1 = $_SESSION['senha'];

	$imagens = array (
	  'imagensPadrao/CapivaraC.png',
	  'imagensPadrao/CapivaraJ.png',
	  'imagensPadrao/CapivaraP.png',
	  'imagensPadrao/CapivaraZ.png'
	  );
	$escolheImagem = escolherImagemAleatoria($imagens);

	if (file_exists($escolheImagem)) {
	    $imgPadrao = base64_encode(file_get_contents($escolheImagem));
	    $tipoPadrao = 'image/png';
	} else {
    	die ("A imagem selecionada não foi encontrada ou não pode ser lida.");
	}

	$cripSenha = FazSenha($senha1, $nome);

	$sql = "insert into usuarios_rse (nome, email, senha, img, tipoImg) VALUES (?,?,?,?,?)";
	$stmt = mysqli_prepare($linkDB, $sql);
	if (!$stmt) {
		die("Erro ao Cadastrar");
	}
	if (!mysqli_stmt_bind_param($stmt,"sssss",$nome,$email,$cripSenha,$imgPadrao, $tipoPadrao)) {
		die("Não foi possível vincular parametros");
	}
	if (!mysqli_stmt_execute($stmt)) {
		die("Não foi possível executar cadastro no banco de dados");
    }else{
		header("Location:../index.php");
		session_destroy();
	}

?>
