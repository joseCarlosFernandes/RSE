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
    <title>Metal</title>
    <link rel="stylesheet" type="text/css" href="../Materiais/StyleLIXO.css">
    <link rel="stylesheet" href="../css/styleNav.css">
    <script defer src="../js/nav.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="../Principais/index.php">
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
                    <div id="titulo">Metal</div>
                    <div class="linha-titulo"></div> <!-- Linha preta abaixo do título -->
                    <div class="linha-menor"></div> <!-- Linha preta menor -->

                    <p id="texto">
                        O metal é um dos materiais mais importantes e amplamente utilizados em nossa sociedade. Sua versatilidade, durabilidade e resistência o tornam essencial em diversas aplicações, desde estruturas de construção até componentes eletrônicos. No entanto, a extração e produção de metais também têm um grande impacto ambiental e econômico. Portanto, a reciclagem de metais desempenha um papel crucial na preservação dos recursos naturais e na redução dos impactos negativos associados à sua produção e descarte inadequado.<br>

                        <img id="img_lixo" src="imagens/metais.jpg">

                        <br>
                        <b>Aqui estão algumas razões pelas quais o material metálico deve ser reciclado:</b><br>

                        1. <b>Preservação dos recursos naturais:</b> A mineração de minérios metálicos exige a extração de grandes quantidades de minerais da Terra, o que pode causar danos irreparáveis aos ecossistemas locais. A reciclagem de metais ajuda a reduzir a necessidade de novas minas e a preservar os recursos naturais, como minério de ferro, alumínio e cobre.<br>
                        2. <b>Economia de energia:</b> A produção de metal a partir de minérios é intensiva em energia. A reciclagem de metais requer muito menos energia do que a produção a partir de matérias-primas virgens. Por exemplo, a reciclagem de alumínio economiza até 95% de energia em comparação com a produção a partir de bauxita.<br>
                        <br>
                        3. <b>Redução de emissões de gases de efeito estufa:</b> A produção de metal a partir de minérios libera uma quantidade significativa de gases de efeito estufa, contribuindo para as mudanças climáticas. A reciclagem de metais ajuda a reduzir essas emissões, tornando-a uma prática ambientalmente responsável.<br>
                        <br>
                        4. <b>Conservação de aterros sanitários:</b> Os metais são frequentemente descartados em aterros sanitários, onde ocupam espaço precioso e podem levar séculos para se decompor. A reciclagem de metais reduz a quantidade de resíduos sólidos enviados para aterros, prolongando sua vida útil e reduzindo a necessidade de expandir essas instalações.<br>
                        <br>
                        5. <b>Geração de empregos:</b> A indústria de reciclagem de metais cria empregos locais em todas as etapas do processo, desde a coleta e triagem até a fundição e produção de produtos reciclados. Isso contribui para o crescimento econômico e o desenvolvimento sustentável.<br>
                        <br>
                        6. <b>Redução da dependência de importações:</b> Em muitos países, a produção de metal a partir de recursos naturais requer a importação de minérios. A reciclagem de metais ajuda a reduzir a dependência dessas importações, aumentando a segurança econômica.<br>
                        <br>
                        7. <b>Conscientização sobre a sustentabilidade:</b> A reciclagem de metais promove uma mentalidade de consumo sustentável e responsável, incentivando as pessoas a considerar o ciclo de vida dos produtos e a importância da reutilização dos materiais.<br>
                    </p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>