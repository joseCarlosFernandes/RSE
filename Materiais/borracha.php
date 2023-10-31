<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
    $linkPerfil = "../Principais/perfil.php";
    $linkTexto = "Perfil";
} else {
   $linkPerfil = "../Principais/entrar.php";
    $linkTexto = "Entrar";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borracha</title>
    <link rel="stylesheet" type="text/css" href="../css/StyleLIXO.css">
    <link rel="stylesheet" href="../css/styleNav.css">
    <script defer src="../js/nav.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="../index.php">
                <img src="../imagens/logo.png" style="width: 390px; height: 130px;">
            </a>
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
                <li><a href="../Principais/pontos.php">Pontos de Coleta</a></li>
                <li><a href="../Principais/reciclar.php">Porque Reciclar</a></li>
                <li><a href="../Principais/sobre.php">Sobre Nós</a></li>
                <li><a href="<?php echo $linkPerfil; ?>"><?php echo $linkTexto; ?></a></li>
            </ul>
        </nav>
    </header>
    <main class="hero"></main>

    <table class="tabela" align="center" width="80%">
        <tr>
            <td>
                <td class="conteudo-celula">
                <div class="conteudoIMG">
                    <div id="titulo">Borracha</div>
                    <div class="linha-titulo"></div>
                    <div class="linha-menor"></div>

                    <p id="texto">
                        A borracha é um material versátil e elástico que desempenha um papel fundamental em muitos aspectos da nossa vida cotidiana. É amplamente utilizado na fabricação de pneus, calçados, correias transportadoras, peças de máquinas, brinquedos e uma variedade de produtos industriais e de consumo. No entanto, assim como outros materiais, a borracha também pode ser reciclada, e há várias razões pelas quais isso é <b>importante</b>:<br>
                        <br>

                        <img id="img_LIXO" src="imagens/borracha.jpg">

                        <br>
                        1. <b>Conservação de Recursos Naturais</b>: A borracha é frequentemente derivada do látex das árvores de seringueira ou de recursos sintéticos derivados do petróleo. A reciclagem de borracha ajuda a conservar esses recursos naturais, reduzindo a necessidade de colheita excessiva de árvores e a exploração de petróleo bruto.<br>
                        <br>
                        2. <b>Redução de Resíduos</b>: A borracha descartada, como pneus velhos, correias ou produtos de borracha em fim de vida útil, pode se tornar um problema ambiental quando descartada incorretamente. Esses itens podem ocupar espaço em aterros sanitários ou serem descartados inadequadamente no meio ambiente. A reciclagem de borracha ajuda a reduzir a quantidade de resíduos sólidos e a prolongar a vida útil dos aterros.<br>
                        <br>
                        3. <b>Economia de Energia</b>: A produção de borracha virgem a partir de matérias-primas requer um consumo significativo de energia. A reciclagem de borracha consome menos energia, tornando-a uma opção mais eficiente em termos de recursos e menos prejudicial ao meio ambiente.<br>
                        <br>
                        4. <b>Redução de Poluição</b>: A queima de pneus usados, por exemplo, pode liberar poluentes atmosféricos tóxicos. Ao reciclar a borracha, evitamos essas emissões prejudiciais, contribuindo para a melhoria da qualidade do ar.<br>
                        <br>
                        5. <b>Criação de Produtos Sustentáveis</b>: A borracha reciclada pode ser usada para criar novos produtos, como pavimentos, tapetes, solados de sapatos e muito mais. Esses produtos incorporam material reciclado, promovendo a sustentabilidade e reduzindo a demanda por matérias-primas virgens.<br>
                        <br>
                        6. <b>Redução de Custos</b>: A reciclagem de borracha muitas vezes pode ser uma alternativa econômica à compra de borracha virgem, o que pode beneficiar as indústrias e os consumidores.<br>
                        <br>
                        7. <b>Consciência Ambiental</b>: A prática de reciclar borracha ajuda a criar uma maior conscientização sobre a importância da gestão responsável de resíduos e da redução do impacto ambiental dos produtos de borracha.<br>
                        <br>
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>