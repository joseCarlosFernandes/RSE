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
    <title>Plástico</title>
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
                    <div id="titulo">Plástico</div>
                    <div class="linha-titulo"></div>
                    <div class="linha-menor"></div>

                    <p id="texto">
                        O plástico é um material amplamente utilizado em nossa sociedade devido à sua versatilidade, durabilidade e custo relativamente baixo de produção. No entanto, a gestão inadequada do plástico tem levado a sérios problemas ambientais em todo o mundo. Portanto, é fundamental entender por que o plástico deve ser reciclado e como isso pode contribuir para um ambiente mais saudável e sustentável.<br>
                        <br>
                        É fabricado a partir de polímeros sintéticos derivados de petroquímicos, que são recursos não renováveis. A produção de plástico consome quantidades significativas de energia e recursos naturais, além de gerar emissões de gases de efeito estufa. Além disso, o plástico é notório por sua persistência no meio ambiente, levando centenas de anos para se decompor completamente. Isso resulta em problemas graves, como a poluição de oceanos, rios, solos e a ameaça à vida selvagem.<br>
                        <br>

                        <img id="img_LIXO" src="imagens/plasticos.jpg">

                        <br>
                        <b>Aqui estão algumas razões pelas quais o plástico deve ser reciclado:</b><br>
                        <br>
                        1. <b>Conservação de recursos</b>: A reciclagem de plástico permite reutilizar materiais existentes, reduzindo a demanda por petroquímicos e recursos naturais não renováveis, como petróleo e gás natural.<br>
                        <br>
                        2. <b>Redução de resíduos</b>: O plástico é uma das principais fontes de resíduos sólidos urbanos. A reciclagem diminui a quantidade de plástico que vai para aterros sanitários, economizando espaço e prolongando sua vida útil.<br>
                        <br>
                        3. <b>Mitigação das mudanças climáticas</b>: A produção de plástico virgem gera emissões significativas de gases de efeito estufa. A reciclagem de plástico consome menos energia e emite menos poluentes, contribuindo para a redução das emissões de carbono.<br>
                        <br>
                        4. <b>Proteção da vida marinha</b>: Plásticos descartados nos oceanos representam uma séria ameaça à vida marinha. A reciclagem ajuda a reduzir a quantidade de plástico que entra nos ecossistemas aquáticos e prejudica animais marinhos.<br>
                        <br>
                        5. <b>Economia circular</b>: A reciclagem de plástico faz parte de uma economia circular, onde os materiais são continuamente reutilizados, reduzindo a necessidade de fabricação de novos plásticos.<br>
                        <br>
                        6. <b>Inovação e empregos</b>: A indústria de reciclagem de plástico gera empregos e promove a inovação na criação de produtos reciclados.<br>
                        <br>
                        7. <b>Conscientização ambiental</b>: A prática da reciclagem de plástico ajuda a sensibilizar as pessoas sobre a importância da gestão responsável de resíduos e a redução do impacto ambiental.<br>
                        <br>
                     </p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>