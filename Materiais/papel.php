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
    <title>Papel</title>
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
                    <div id="titulo">Papel</div>
                    <div class="linha-titulo"></div> <!-- Linha preta abaixo do título -->
                    <div class="linha-menor"></div> <!-- Linha preta menor -->

                    <p id="texto">
                        O papel é um material versátil e amplamente utilizado em nossa sociedade. Ele desempenha um papel fundamental em várias áreas, desde a escrita e impressão até a embalagem de produtos. No entanto, a produção de papel tem um impacto significativo no meio ambiente, e é por isso que é crucial reciclá-lo.<br>
                        <br>

                        <img id="img_papel" src="imagens/papel.jpg">

                        <br>
                        O papel é feito principalmente a partir de fibras de celulose, que podem ser obtidas de árvores de florestas. Para produzir papel virgem, árvores são derrubadas, o que resulta na perda de habitats naturais, no esgotamento de recursos naturais e na emissão de gases de efeito estufa durante o processo de produção. Além disso, a produção de papel virgem requer grandes quantidades de água e produtos químicos.<br>
                        <br>
                        A reciclagem de papel é uma alternativa sustentável à produção de papel virgem. Quando o papel é reciclado, ele passa por um processo de desintegração, onde as fibras de celulose são separadas e purificadas. Em seguida, essas fibras recicladas são usadas para criar novos produtos de papel. A reciclagem de papel economiza recursos naturais, reduz a necessidade de derrubar árvores e diminui a poluição do ar e da água associada à produção de papel virgem.<br>
                        <br>
                        <b>Existem várias razões pelas quais o papel deve ser reciclado:</b><br>
                        <br>
                        1. <b>Conservação de recursos naturais:</b> A reciclagem de papel ajuda a preservar florestas e reduz a exploração de recursos naturais, como árvores e água.<br>
                        <br>
                        2. <b>Redução da pegada de carbono:</b> A produção de papel a partir de matéria-prima reciclada emite menos gases de efeito estufa em comparação com a produção de papel virgem, contribuindo para a mitigação das mudanças climáticas.<br>
                        <br>
                        3. <b>Economia de energia:</b> O processo de reciclagem de papel consome menos energia do que a produção de papel a partir de matéria-prima virgem, o que também ajuda a reduzir as emissões de gases poluentes.<br>
                        <br>
                        4. <b>Redução de resíduos:</b> O papel é um dos principais componentes dos resíduos sólidos urbanos. Ao reciclar papel, reduzimos a quantidade de resíduos enviados para aterros sanitários, prolongando sua vida útil e economizando espaço.<br>
                        <br>
                        5. <b>Criação de empregos:</b> A indústria de reciclagem de papel gera empregos e estimula a economia local.<br>
                        <br>
                        6. <b>Preservação da biodiversidade:</b> Ao reduzir a pressão sobre as florestas, a reciclagem de papel contribui indiretamente para a preservação da biodiversidade.<br>
                        <br>
                        7. <b>Consciência ambiental:</b> A prática de reciclar papel ajuda a sensibilizar as pessoas sobre a importância da conservação dos recursos naturais e do meio ambiente.<br>         
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>