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
    <title>Vidro</title>
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
                    <div id="titulo">Vidro</div>
                    <div class="linha-titulo"></div>
                    <div class="linha-menor"></div>

                    <p id="texto">
                        O vidro é um material incrivelmente versátil que desempenha um papel fundamental em muitos aspectos da nossa vida diária. É usado na fabricação de garrafas, frascos, vidros para janelas, embalagens, utensílios de cozinha, e em uma variedade de aplicações industriais e de construção. No entanto, a reciclagem do vidro é vital por várias razões <b>importantes</b>:<br>
                        <br>

                        <img id="img_LIXO" src="imagens/vidro.jpg">

                        <br>
                        1. <b>Conservação de Recursos Naturais</b>: A fabricação de vidro a partir de matérias-primas virgens, como areia, soda cáustica e calcário, consome quantidades significativas de recursos naturais. A reciclagem de vidro permite reutilizar esses materiais, reduzindo a extração de recursos preciosos e finitos da Terra.<br>
                        <br>
                        2. <b>Economia de Energia</b>: A produção de vidro a partir de matérias-primas virgens requer altas temperaturas e, portanto, consome uma quantidade substancial de energia. A reciclagem de vidro economiza energia, pois o vidro reciclado derrete a temperaturas mais baixas, resultando em uma redução nas emissões de gases de efeito estufa e no consumo de combustíveis fósseis.<br>
                        <br>
                        3. <b>Redução de Resíduos</b>: O vidro não se decompõe naturalmente na natureza e pode ocupar espaço em aterros sanitários por séculos. Ao reciclar vidro, reduzimos a quantidade de resíduos sólidos urbanos, prolongando a vida útil dos aterros e evitando a acumulação desnecessária de lixo.<br>
                        <br>
                        4. <b>Qualidade do Ar e da Água</b>: A reciclagem de vidro ajuda a reduzir a poluição do ar e da água associada à extração e produção de vidro a partir de matérias-primas virgens, diminuindo assim os impactos negativos na saúde humana e no meio ambiente.<br>
                        <br>
                        5. <b>Criação de Empregos e Economia Local</b>: A indústria de reciclagem de vidro cria empregos locais e estimula a economia. Além disso, a venda de vidro reciclado pode gerar receita para as comunidades.<br>
                        <br>
                        6. <b>Preservação da Qualidade do Vidro</b>: O vidro reciclado é frequentemente usado na fabricação de novos produtos de vidro. Isso ajuda a manter a qualidade do vidro, uma vez que o vidro reciclado é quase idêntico ao vidro virgem, evitando a degradação da qualidade ao longo do tempo.<br>
                        <br>
                        7. <b>Consciência Ambiental</b>: A prática da reciclagem de vidro incentiva a conscientização sobre a importância da gestão responsável de resíduos e a redução do impacto ambiental dos produtos de vidro.<br>
                        <br>
                     </p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>