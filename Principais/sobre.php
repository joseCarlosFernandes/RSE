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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre Nós</title>
    <link rel="stylesheet" href="../css/styleNav.css">
    <script defer src="../js/nav.js"></script>

    <style type="text/css">
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .container {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        zoom: 90%;
    }

    .membros {
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        margin-left: center;
        align-items: center;
        
    }

    .membro {
        background-color: #00FF7F;
        border-radius: 20px;
        width: 300px;
        height: 400px;
        text-align: center;
        margin: 10px;
        position: relative;
        overflow: hidden;
        transition: background-color 0.3s ease-in-out;
        cursor: pointer;
        box-shadow: 5px 5px 20px #00FF7F;
        transition: box-shadow 0.3s ease-in-out;
    }

    .membro img {
        width: 200px;
        height: 200px;
        border-radius: 100%;
        margin-top: 30px;
    }

    .nome {
        margin-top: 10px;
        font-family: 'CopperplateGothic', Arial, sans-serif;
        color: white;
    }

    .funcao {
        margin-top: 10px;
        margin: 4px 4px;
        font-family: 'CopperplateGothic', Arial, sans-serif;
        color: white;
        font-size: 20px;
        opacity: 0;
        transition: opacity 0.8s ease-in-out, font-size 1s ease-in-out;
    }

    .membro:hover {
        background-color: #009933;
        box-shadow: 5px 5px 20px #009933;
    }

    .membro:hover .funcao {
        opacity: 1;
    }

    h1 {
    font-family: 'CopperplateGothic', Arial, sans-serif;
    margin-top: 30px;
    font-size: 36px;
    text-align: center;
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

<div class="container">
    <h1 style="font-family: 'CopperplateGothic', Arial; margin-top: 20px; font-size: 70px;">QUEM SOMOS?👋</h1>
    <div style="margin-top: 50px;"></div>

    <!-- membros -->
    <div class="membros">
    <div class="membro">
        <a href="https://www.instagram.com/euzekaa/"><img id="img_membro" src="../imagens/membros/ze.jpg"></a>
        <div class="nome">
            <h1>José Carlos</h1>
        </div>
        <div class="funcao">
            <p>Programação Back-End do Site, Aplicativo Mobile e Banco de Dados</p>
        </div>
    </div>


        <div class="membro">
            <a href="https://www.instagram.com/antonio_santossy/"><img id="img_membro" src="../imagens/membros/tonho.jpg"></a>
            <div class="nome">
                <h1>Antonio Carlos</h1>
            </div>
                <div class="funcao">
                <p>Coodernação, Design, Pesquisa e Documentação</p>
            </div>
        </div>

        <div class="membro">
            <a href="https://www.instagram.com/kayky_limaa_/"><img id="img_membro" src="../imagens/membros/kayky.jpg"></a>
            <div class="nome">
                <h1>Kayky Lima</h1>
            </div>
                <div class="funcao">
                <p>Documentação, Programação Front-end do Site</p>
            </div>
        </div>

        <div class="membro">
            <a href="https://www.instagram.com/mori_gustavo2005/"><img id="img_membro" src="../imagens/membros/gustavo.jpeg"></a>
            <div class="nome">
                <h1>Gustavo Mori</h1>
            </div>
                <div class="funcao">
                <p>Documentação, Design</p>
            </div>
        </div>

        <div class="membro">
            <a href="https://www.instagram.com/__estevaoaraujo/"><img id="img_membro" src="../imagens/membros/estevao.jpg"></a>
            <div class="nome">
                <h1>Estevão Araujo</h1>
            </div>
                <div class="funcao">
                <p>Documentação</p>
            </div>
        </div>
    </div>
    <br>
    <footer style="font-family: 'CopperplateGothic', Arial;">CONTATE-NOS: <a href="mailto:rse.supp@gmail.com?subject=Preciso de Ajuda&body=Insira aqui com o que necessita de ajuda">rse.supp@gmail.com</a></footer>

</body>
</html>
