<?php
require("sessao.php");
require("dbconnect.php");

$nome = $_POST['nome'];
$desc = $_POST['desc'];
$email = $_POST['email'];

if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {
    $imagem = $_FILES['imagem']['tmp_name'];
    $tipo = $_FILES['imagem']['type'];
    $tamanho = $_FILES['imagem']['size'];

    $conteudo = file_get_contents($imagem);
    $conteudo = base64_encode($conteudo);
} else {
    $conteudo = null; // Sem imagem
    $tipo = null;     // Sem tipo
}

if ($conteudo === null) {
    $sql = "UPDATE usuarios_rse SET nome = '$nome', descricao = '$desc' WHERE email = '$email'";
} else {
    $sql = "UPDATE usuarios_rse SET nome = '$nome', descricao = '$desc', img = '$conteudo', tipoImg = '$tipo' WHERE email = '$email'";
}

$dataset = mysqli_query($linkDB, $sql);

if (!$dataset) {
    die("erro");
} else {
    header("Location: perfil.php");
}
?>