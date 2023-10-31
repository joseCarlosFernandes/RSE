<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
    $linkPerfil = "Principais/perfil.php";
    $linkTexto = "Perfil";
} else {
    $linkPerfil = "Principais/entrar.php";
    $linkTexto = "Entrar";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSE</title>
    <link rel="stylesheet" href="css/styleNav.css">
    <script defer src="js/app.js"></script>
    <style type="text/css">
        .conteudo{
            margin-top: 20px;
            margin-left: 100px;
            margin-right: 100px;
            font-size: 20px;
            border: 2px solid #00ff00;
            background-color: #ffffff; 
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            font-family: 'Lato';

        }

        .introducao{
            margin-top: 10px;
            margin-left: 90px;
            margin-right: 50px;
            font-size: 23px;
            font-family: 'Lato';
        }
        .conteudo-container {
            display: flex;
            flex-direction: column;
        }

        /* ODS DIV */
        .ods-div {
            background-color: #F0F0F0;
            color: #333;
            transition: background-color 0.3s, transform 0.3s;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .slider{
            margin-top: 20px;
        }

    </style>
</head>
<body>

    <div class="conteudo-container">
            <h1 style="font-family: 'CopperplateGothic', Arial; margin-top: 150px; font-size: 70px; text-align: center;">RECICLAGEM, SUSTENTABILIDADE E ECOLOGIA!</h1>
            <div class="introducao">
                <p>Bem-vindo ao nosso site dedicado à reciclagem e à conscientização ambiental! Nosso objetivo principal é fornecer informações claras e práticas sobre reciclagem, com a intenção de educar e inspirar você a adotar práticas mais sustentáveis em sua vida cotidiana.</p>
            </div>
            <!-- Carrossel CSS -->
            <div class="slider">

                <div class="slides">

                    <input type="radio" name="radio-btn" id="radio01">
                    <input type="radio" name="radio-btn" id="radio02">
                    <input type="radio" name="radio-btn" id="radio03">
                    <input type="radio" name="radio-btn" id="radio04">

                    <div class="slide first">
                        <a href="https://www.un.org/sustainabledevelopment/cities/"><img src="imagens/carrossel/ods11.png" alt="imagem 1" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.un.org/sustainabledevelopment/sustainable-consumption-production/"><img src="imagens/carrossel/ods12.png" alt="imagem 2" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.un.org/sustainabledevelopment/climate-change/"><img src="imagens/carrossel/ods13.png" alt="imagem 3" /></a>
                    </div>
                    <div class="slide">
                        <a href="https://www.un.org/sustainabledevelopment/biodiversity/"><img src="imagens/carrossel/ods15.png" alt="imagem 4" /></a>
                    </div>

                    <div class="navegacao-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>

                </div>

                <div class="manual-navigation">
                    <label for="radio01" class="manual-"></label>
                    <label for="radio02" class="manual-"></label>
                    <label for="radio03" class="manual-"></label>
                    <label for="radio04" class="manual-"></label>
                </div>

            </div>


                <!-- CONTEUDO -->
            <div class="conteudo">
                <p>A reciclagem é uma prática essencial que ganha crescente relevância no contexto atual, onde a preocupação com o meio ambiente e a busca por soluções sustentáveis se tornaram imperativos. No Brasil, essa atividade tem avançado significativamente, à medida que a sociedade e as autoridades reconhecem a importância de reduzir o impacto ambiental e promover o uso responsável dos recursos naturais, alinhando-se com diversas Objetivos de Desenvolvimento Sustentável (ODS) estabelecidos pela Organização das Nações Unidas (ONU).</p>
                <br>
                <h2>ODS's Deste Projeto:</h2>
                <br>
                <div class="ods-div ods-11" onmouseover="aumentarDiv(this)" onmouseout="reduzirDiv(this)" data-cor-fundo="orange">
                    <p>• <b>ODS 11 - Cidades e Comunidades Sustentáveis:</b> Uma das maneiras pelas quais a reciclagem contribui para esta meta é através da redução da quantidade de resíduos enviados para aterros sanitários nas cidades brasileiras. A promoção da coleta seletiva e a conscientização da população sobre a separação adequada de resíduos são passos essenciais para tornar nossas comunidades mais sustentáveis.</p>
                </div>
                <br>
                <div class="ods-div ods-12" onmouseover="aumentarDiv(this)" onmouseout="reduzirDiv(this)" data-cor-fundo="#bf8e2c">
                    <p>• <b>ODS 12 - Consumo e Produção Responsáveis:</b> A reciclagem é um pilar fundamental para promover o consumo e a produção responsáveis. Ela incentiva a reutilização de materiais, impulsionando a economia circular, onde os produtos são reaproveitados, reduzindo a necessidade de novos recursos. Isso não só economiza energia, mas também reduz o desperdício e a pressão sobre os recursos naturais.</p>
                </div>
                <br>
                <div class="ods-div ods-13" onmouseover="aumentarDiv(this)" onmouseout="reduzirDiv(this)" data-cor-fundo="#407f46">
                    <p>• <b>ODS 13 - Ação contra a Mudança Global do Clima:</b> A reciclagem ajuda a mitigar as mudanças climáticas, uma vez que a produção de materiais reciclados geralmente requer menos energia do que a produção de materiais virgens. Além disso, ao reduzir a quantidade de resíduos em aterros sanitários, a reciclagem também contribui para a redução de emissões de gases de efeito estufa.</p>
                </div>
                <br>
                <div class="ods-div ods-15" onmouseover="aumentarDiv(this)" onmouseout="reduzirDiv(this)" data-cor-fundo="green">
                    <p>• <b>ODS 15 - Vida Terrestre:</b> A reciclagem contribui para a preservação da vida terrestre ao reduzir a poluição por resíduos sólidos. Materiais reciclados são menos propensos a acabar em habitats naturais, o que ajuda na conservação da biodiversidade.</p>
                </div>
                <br>
                <p>Além disso, as cooperativas de catadores de materiais recicláveis desempenham um papel vital nesse processo, contribuindo não apenas para a promoção das ODS acima, mas também para o alcance do <b>ODS 1 - Erradicação da Pobreza</b> ao proporcionar empregos e renda para muitas famílias em comunidades de baixa renda.</p>
                <p>No entanto, há desafios a serem superados. A infraestrutura de reciclagem no Brasil precisa de melhorias substanciais, alinhando-se ao <b>ODS 9 - Indústria, Inovação e Infraestrutura</b>, para lidar com a crescente quantidade de resíduos gerados. Investimentos em instalações de reciclagem modernas, tecnologia de triagem avançada e transporte eficiente de materiais são cruciais para aumentar a taxa de reciclagem e reduzir o desperdício.</p>
                <p>A continuidade da conscientização da população, parte integrante do <b>ODS 4 - Educação de Qualidade</b>, também é fundamental. A educação ambiental contínua, envolvendo escolas, empresas e organizações da sociedade civil, é necessária para promover uma cultura de reciclagem no país e garantir que os esforços em direção às ODS sejam eficazes.</p>
                <br>
            </div>
            <br>
    </div>

    <!--NAVBAR-->
    <header class="header">
        <nav class="nav">
            <a href="index.php">
                <img src="imagens/logo.png" style="width: 390px; height: 130px;"></a>
            <button class="hamburger"></button>
            <ul class="nav-list">
                <li class="dropdown">
                   <a href="#" class="dropbtn">Materiais</a>
                   <div class="dropdown-content">
                       <a href="Materiais/metal.php">Metal</a>
                       <a href="Materiais/papel.php">Papel</a>
                       <a href="Materiais/plastico.php">Plástico</a>
                       <a href="Materiais/borracha.php">Borracha</a>
                       <a href="Materiais/vidro.php">Vidro</a>
                   </div>
                </li>        
                <li><a href="Principais/pontos.php">Pontos de Coleta</a></li>
                <li><a href="Principais/reciclar.php">Por que Reciclar?</a></li>
                <li><a href="Principais/sobre.php">Sobre Nós</a></li>
                <li><a href="<?php echo $linkPerfil; ?>"><?php echo $linkTexto; ?></a></li>
            </ul>
        </nav>
    </header>
    <main class="hero"></main>


    <script>
    function aumentarDiv(element) {
        element.style.transform = "scale(1.05)";
        element.style.backgroundColor = element.getAttribute("data-cor-fundo");
        element.style.color = "#FFF";
    }

    function reduzirDiv(element) {
        element.style.transform = "scale(1)";
        element.style.backgroundColor = "#F0F0F0";
        element.style.color = "#333";
    }
    </script>

</body>
</html>