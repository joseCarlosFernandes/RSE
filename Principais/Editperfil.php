<?php
session_start(); // Inicia a sessão

$email = $_SESSION['email'];
// Verifica se o usuário está logado
if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
    $linkPerfil = "sair.php";
    $linkTexto = "Sair";
} else {
    header("Location: index.php");
}


//sql para recuperar a imagem do perfil
    require("dbconnect.php");
    $sql = "select img, tipoImg, descricao, nome from usuarios_rse where email = '$email'";
        $dataset = mysqli_query($linkDB, $sql);
        $BD=mysqli_fetch_assoc($dataset);
        $mime = $BD['tipoImg'];
        $img_perfil = 'data:' . $mime . ';base64,' . $BD['img'];

        $descricao = $BD['descricao'];
        $nome = $BD['nome'];
?>

<!DOCTYPE html>
<head>
    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="../css/Editperfil2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleNav.css">
    <script defer src="../js/nav.js"></script>
    <style type="text/css">
        .infos{
                margin-top: 150px;
        }
        .circle{
            margin-top: -20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php">
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
                <li><a href="pontos.php">Pontos de Coleta</a></li>
                <li><a href="reciclar.php">Porque Reciclar</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="<?php echo $linkPerfil; ?>"><?php echo $linkTexto; ?></a></li>
            </ul>
        </nav>
    </header>
    <main class="hero"></main>
    
    <div class="infos">
        <div class="container">
            <div class="circle" id="profile-picture">
                <!-- Use o estilo de fundo para exibir a imagem -->
                <div id="profile-image"></div>
                <input type="file" id="file-input" style="display: none;" onchange="loadImage(event)">
                <label for="file-input" id="pencil-button" class="centered-button square-button">
                    <i class="fas fa-pencil-alt white-icon"></i>
                </label>
            </div>

            <div class="banner"></div>
            <div class="container">
                <form name="flogin" action="#" method="POST">
                    <table class="styled-table">
                        <tr>
                            <td>
                                <div id="nomeUsuario" contenteditable="false" readonly maxlength="50" style="border: 1px solid rgb(0, 0, 0); color: black;"><?php echo $nome; ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea id="bio" name="bio" rows="10" cols="34" maxlength="150" style="resize:none;" readonly placeholder="Descrição"><?php echo $descricao; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="edit-button centered-button" id="editarBtn">Editar</button>
                                <button type="button" class="save-button centered-button" id="salvarBtn" onclick="salvarPerfil();">Salvar</button>
                                <button type="button" class="cancel-button centered-button" id="cancelarBtn">Cancelar</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("editarBtn").addEventListener("click", function () {
            var nomeUsuario = document.getElementById("nomeUsuario");
            var bio = document.getElementById("bio");

            // Salvar o conteúdo atual do nome de usuário e da bio para restaurá-los em caso de cancelamento
            nomeUsuario.dataset.originalContent = nomeUsuario.textContent.trim();
            bio.dataset.originalContent = bio.textContent.trim();

            // Limitar a edição do nome de usuário a 50 caracteres
            nomeUsuario.addEventListener("input", limitarCaracteres);

            nomeUsuario.contentEditable = true;
            bio.removeAttribute("readonly");

            document.getElementById("salvarBtn").style.display = "inline-block";
            document.getElementById("cancelarBtn").style.display = "inline-block";
            // Ocultar o botão "Editar"
            this.style.display = "none";
        });

        document.getElementById("salvarBtn").addEventListener("click", function () {
            var nomeUsuario = document.getElementById("nomeUsuario");
            var bio = document.getElementById("bio");

            // Remover o ouvinte de eventos após salvar
            nomeUsuario.removeEventListener("input", limitarCaracteres);

            // Limitar o número de caracteres no nome de usuário para 50
            var nomeUsuarioContent = nomeUsuario.textContent.trim();
            nomeUsuarioContent = nomeUsuarioContent.substring(0, 50);
            nomeUsuario.textContent = nomeUsuarioContent;

            nomeUsuario.contentEditable = false;
            bio.setAttribute("readonly", "readonly");

            // Trocar a cor do texto para preto
            nomeUsuario.style.color = "#000";

            document.getElementById("editarBtn").style.display = "inline-block";
            this.style.display = "none"; // Ocultar o botão "Salvar"
            document.getElementById("cancelarBtn").style.display = "none"; // Ocultar o botão "Cancelar"
        });

        document.getElementById("cancelarBtn").addEventListener("click", function () {
            var nomeUsuario = document.getElementById("nomeUsuario");
            var bio = document.getElementById("bio");

            // Remover o ouvinte de eventos ao cancelar
            nomeUsuario.removeEventListener("input", limitarCaracteres);

            nomeUsuario.contentEditable = false;
            bio.setAttribute("readonly", "readonly");

            // Verificar se o usuário escreveu algo e restaurar o conteúdo original ou exibir o texto de placeholder
            if (nomeUsuario.textContent.trim() === "") {
                nomeUsuario.textContent = "Digite seu nome";
                // Mantém a cor do texto como cinza
                nomeUsuario.style.color = "#ccc";
            } else {
                nomeUsuario.textContent = nomeUsuario.dataset.originalContent;
            }

            // Para a "bio"
            if (bio.textContent.trim() === "") {
                bio.textContent = "Descrição";
                // Mantém a cor do texto como cinza
                bio.style.color = "#ccc";
            } else {
                bio.textContent = bio.dataset.originalContent;
            }

            document.getElementById("editarBtn").style.display = "inline-block";
            document.getElementById("salvarBtn").style.display = "none";
            this.style.display = "none"; // Ocultar o botão "Cancelar"
        });

        // Função para limitar o número de caracteres no nome de usuário
        function limitarCaracteres() {
            var nomeUsuario = document.getElementById("nomeUsuario");
            var maxCaracteres = 50;
            if (nomeUsuario.textContent.length > maxCaracteres) {
                nomeUsuario.textContent = nomeUsuario.textContent.substring(0, maxCaracteres);
            }
        }

        function loadImage(event) {
            var input = event.target;
            var profileImage = document.getElementById("profile-image");
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    profileImage.style.backgroundImage = "url('" + e.target.result + "')";
                    profileImage.style.backgroundSize = "cover";
                    profileImage.style.backgroundPosition = "center";
                };

                reader.readAsDataURL(file);
            } else {

                profileImage.style.backgroundImage = "<?php echo $img_perfil; ?>";
                profileImage.style.backgroundSize = "cover";
                profileImage.style.backgroundPosition = "center";
            }
        }

        loadImage({ target: { files: [] } });

        document.getElementById("nomeUsuario").addEventListener("keydown", function (e) {
            // Impede o comportamento padrão (criar nova linha) quando a tecla "Enter" é pressionada
            if (e.key === "Enter") {
                e.preventDefault();
            }
        });

        function salvarPerfil() {
                    var nomeUsuario = document.getElementById("nomeUsuario").textContent;
                    var descricaoUsuario = document.getElementById("bio").value;
                    var email = document.getElementById("email").textContent;

                    // Agora, a variável imagemFile deve ser acessível aqui
                    if (imagemFile) {
                        var formData = new FormData();
                        formData.append("nome", nomeUsuario);
                        formData.append("desc", descricaoUsuario);
                        formData.append("email", email);
                        formData.append("imagem", imagemFile); // Adiciona a imagem como um arquivo

                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "salvarPerfil.php", true);

                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                console.log("Perfil Salvo");
                                // Redirecionamento após o salvamento
                                window.location.href = "perfil.php";
                            } else {
                                console.log("Erro ao salvar");
                            }
                        };

                        xhr.send(formData);
                    } else {
                        // Se nenhuma imagem foi selecionada, envie apenas os outros dados
                        var formData = new FormData();
                        formData.append("nome", nomeUsuario);
                        formData.append("desc", descricaoUsuario);
                        formData.append("email", email);

                        var xhr = new XMLHttpRequest();
                        xhr.open("POST", "salvarPerfil.php", true);

                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                console.log("Perfil Salvo 2");
                                // Redirecionamento após o salvamento
                                window.location.href = "perfil.php";
                            } else {
                                console.log("Erro ao salvar");
                            }
                        };

                        xhr.send(formData);
                    }
                }
    </script>
</body>
</html>
