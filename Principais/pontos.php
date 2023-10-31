<?php
session_start(); // Inicia a sessão
$logado = 0; //0 - não/1- sim
// Verifica se o usuário está logado
if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
    header("Location: pontos02.php"); // Redirecionamento
    exit;
} else {
    $linkPerfil = "entrar.php";
    $linkTexto = "Entrar";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pontos de Coleta</title>
  <link rel="stylesheet" href="../css/styleNav.css">
  <script defer src="../js/nav.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQAERKr12V4zIeA_MGmw-wAD_wH0wjuhE&libraries=places,geometry"></script>
  <style type="text/css">
    .erro_msg{
      margin-top: 150px;
    }
  </style>
</head>
<body>
  <header class="header">
        <nav class="nav">
            <a href="../index.php">
                <img src="../imagens/logo.png" style="width: 390px; height: 130px;"></a>
            <button class="hamburger"></button>
            <ul class="nav-list">
                <li class="dropdown">
                   <a href="#" class="dropbtn">Materiais</a>
                   <div class="dropdown-content">
                       <a href="../Materiais/metal.php">Metal</a>
                       <a href="../Materiais/papel.php">Papel</a>
                       <a href="../Materiais/plastico.php">Plástico</a>
                       <a href="../Materiais/borracha.php">Borracha</a>
                       <a href="../Materiais/vidro.php">Vidro</a>
                   </div>
                </li>        
                <li><a href="pontos.php">Pontos de Coleta</a></li>
                <li><a href="reciclar.php">Por que Reciclar?</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="<?php echo $linkPerfil; ?>"><?php echo $linkTexto; ?></a></li>
            </ul>
        </nav>
    </header>
    <main class="hero"></main>

    <?php
      if($logado == 0){
        ?>
          <div class="erro_msg">
              <h1>Faça Login Para poder usar essa função</h1>
              <a href="entrar.php">Clique aqui</a>
          </div>
        <?php
      }
    ?>

</body>
</html>