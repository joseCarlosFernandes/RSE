<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
    $linkPerfil = "perfil.php";
    $linkTexto = "Perfil";
} else {
    $linkPerfil = "entrar.php";
    $linkTexto = "Entrar";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Porque Reciclar?</title>
  <link rel="stylesheet" href= "../css/styleNav.css">
  <script defer src="../js/nav.js"></script>
  <style type="text/css">
    #img_conteudo{
      width: 600px; 
      height: 500px;
      border-radius: 10px;
      float: left;
      margin-right: 10px;
      margin-left: 10px;
    }

    /*textos*/
    #texto{
      font-size: 25px;
      margin-left: 10px;
      font-family: Candara;
    }

    #titulo{
      text-align: center;
      font-size: 60px;
      font-family: Courier New;
    }

    .conteudo{
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

   <div class="conteudo">
    <h1 id="titulo">A Importância da Reciclagem</h1>
   	<img id="img_conteudo" src="../imagens/fundo.jpg">

    <p id="texto">
    A reciclagem é de extrema importância em várias esferas da sociedade e do meio ambiente. Ela desempenha um papel fundamental na busca por um desenvolvimento sustentável e na preservação dos recursos naturais. Algumas das principais razões para a importância da reciclagem são:<br>
    <br>
    1.Conservação de recursos naturais: A reciclagem permite a reutilização de materiais descartados, reduzindo a necessidade de extrair recursos naturais preciosos, como minérios, petróleo e madeira. Ao fazê-lo, ela contribui para a preservação de recursos limitados e ajuda a evitar o esgotamento dessas fontes.<br>
    <br>
    2.Redução da quantidade de resíduos: A reciclagem reduz a quantidade de resíduos enviados para aterros sanitários ou incinerados, aliviando a pressão sobre o meio ambiente e evitando a poluição do solo, água e ar.<br>
    <br>
    3.Economia de energia: O processo de reciclagem geralmente consome menos energia do que a produção de materiais a partir de matérias-primas virgens. Isso leva a uma redução das emissões de gases de efeito estufa e ajuda a combater as mudanças climáticas.<br>
    <br>
    4.Diminuição da poluição: A reciclagem reduz a quantidade de lixo descartado de maneira inadequada, o que minimiza a poluição e seus efeitos nocivos sobre o meio ambiente, a vida selvagem e a saúde humana.<br>
    <br>
    5.Estímulo à economia circular: A reciclagem é uma peça fundamental da economia circular, um modelo que visa manter produtos, materiais e recursos em uso pelo maior tempo possível. Isso gera novas oportunidades de negócios, empregos e inovações.<br>
    <br>
    6.Redução da pressão sobre os ecossistemas: Ao reduzir a demanda por novas matérias-primas, a reciclagem ajuda a diminuir a pressão sobre os ecossistemas naturais, preservando habitats e biodiversidade.<br>
    <br>
    7.Educação ambiental: A prática da reciclagem também desempenha um papel educacional significativo ao conscientizar as pessoas sobre a importância da responsabilidade ambiental, incentivando hábitos mais sustentáveis.<br>
    <br>
    </p>

   </div> 

</body>
</html>