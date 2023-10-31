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


//sql para recuperar infos do perfil
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
<html>
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<link rel="stylesheet" href= "../css/styleNav.css">
  	<script defer src="../js/nav.js"></script>
  	<style type="text/css">
  		.perfil{
  			text-align: center;
  		}

  		#Imagem{
  			display: flex;
		    flex-direction: column;
		    align-items: center;
  		}

  		.tudo{
  			margin-top: 130px;
		    margin-left: auto;
		    margin-right: auto;
		    margin-bottom: 30px;
		    max-width: 600px; /* Define a largura máxima da div, ajuste conforme necessário */
		    display: flex;
		    flex-direction: column;
		    align-items: center;
		    border: 2px solid #00ff00;
		    background-color: #ffffff;
		    padding: 25px;
		    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		    border-radius: 5px;
  		}

		#ImagemPerfil{
			  display: inline-block;
		      width: 300px;
		      height: 300px;
		      border-radius: 100%;
		      border-style: solid;
		      border-width: 5px;
		      border-color: #00FF7F;
		}

		#alterarBtn{
			visibility: hidden;
			margin-left: 5px;
			margin-top: 5px;
			width: 300px;
		    height: 50px;
		    box-sizing: border-box;
		    border: none;
		    border-radius: 5px;
		    background-color: #008000;
		    outline: none;
		    color: #fff;
		    font-size: 16px;
		    cursor: pointer;
		    transition: background-color 0.3s ease;
		}
		#alterarBtn:hover{
			background-color: #00FF7F;
		}

		#editarBtn{
			margin-left: 5px;
			width: 300px;
		    height: 50px;
		    box-sizing: border-box;
		    border: none;
		    border-radius: 5px;
		    background-color: #008000;
		    outline: none;
		    color: #fff;
		    font-size: 16px;
		    cursor: pointer;
		    transition: background-color 0.3s ease;
		}
		#editarBtn:hover{
			background-color: #00FF7F;
		}

		#cancelarBtn{
			visibility: hidden;
			margin-left: 2px;
			width: 150px;
		    height: 50px;
		    box-sizing: border-box;
		    border: none;
		    border-radius: 5px;
		    background-color: #008000;
		    outline: none;
		    color: #fff;
		    font-size: 16px;
		    cursor: pointer;
		    transition: background-color 0.3s ease;
		}
		#cancelarBtn:hover{
			background-color: #00FF7F;
		}

		#nomeUsuario{
			font-size: 30px;
			width: 300px;
			text-align: center;
			margin-left: 10px;
			font-family: 'Lato';
			margin-top: 5px;
		}
		#bio{
			font-size: 15px;
			font-family: 'Lato';
			text-align: center;
			padding: 5px;
		}
		.btns{
			display: flex;
		    flex-direction: column;
			justify-content: space-between;
		    width: 100%; /* Para garantir que os botões ocupem a largura total */
    		margin-top: 10px;
		}
		#email{
			width: 300px;
			text-align: center;
			font-family: 'Lato';
		}

		#Info{
			height: 400px;
		}

		#imagemDeFundo {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: auto; 
        }
  	</style>
</head>
<body>
	<!-- NavBar -->
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
               <li><a href="<?php echo $linkPerfil;?>"><?php echo $linkTexto;?></a></li>
            </ul>
        </nav>
    </header>
    <main class="hero"></main>

    <img src="imagensPadrao/plantas2.jpg" id="imagemDeFundo" alt="Imagem de Fundo">
	<!-- classe de todos os itens da página-->
    <div class="tudo">
    	<!-- Classe para os elementos doperfil-->
    	<div class="perfil">
    			<!-- Display Imagem-->
		    	<div id="Imagem">
		            <img src="<?php echo $img_perfil;?>" alt="Foto de Perfil" id="ImagemPerfil">
		            <input type="file" id="fileInput" accept="image/jpg, image/png, image/gif, image/jpeg, image/jfif, image/webp" style="display: none;">
		        </div>
		        <!-- Display infos usuario: nome, email, descrição-->
		        <div id="Info">
		        	<!--Nome-->
		            <div id="nomeUsuario" contenteditable="false" oninput="limitarCaracteres(this, 45)"><?php echo $nome;?></div>
		            <!-- Email-->
		            <div id="email"><?php echo $email;?></div>
		            <!-- Descrição-->
		            <textarea id="bio" name="bio" rows="10" cols="34" maxlength="150" readonly="true" style="resize:none;" placeholder="Descrição"><?php echo $descricao; ?></textarea><br>
		            <!-- Classe para posicionar os botões Editar e Cancelar lado a lado -->
		            <div class="btns">
			            <button id="editarBtn" onclick="editarPerfil()">Editar</button>
			            <button id="cancelarBtn" onclick="cancelar()">Cancelar</button>
		        	</div>
		        	<!--Botão alterar imagem -->
		        		<button id="alterarBtn" onclick="selecionarImagem()">Alterar Imagem &#128247;</button>
		        </div>
    	</div>
    </div>
    <script type="text/javascript">
    		var imagemFile;
	        var btns = document.querySelector(".btns");
    		// função para o botão editar
    		function editarPerfil() {
	            var nomeUsuario = document.getElementById("nomeUsuario");
	            var descricaoUsuario = document.getElementById("bio");
	            var editarBtn = document.getElementById("editarBtn");
	            var alterarBtn = document.getElementById("alterarBtn");
	            var cancelarBtn = document.getElementById("cancelarBtn");
	            var isEditando = nomeUsuario.contentEditable === "true";

	            if (isEditando) {
	            	salvarPerfil();
	            }
	            //caso isEditando é true altera o botão editar para salvar e mostra o botão cancelar e alterar Imagem
	            if (!isEditando) {
	        	    editarBtn.style.width = "150px";
	                nomeUsuario.contentEditable = "true";
	                descricaoUsuario.readOnly = false;
	                alterarBtn.style.visibility = "visible";
	                cancelarBtn.style.visibility = "visible";
	                nomeUsuario.style.border = "1px solid #000";
	                editarBtn.textContent = "Salvar";
	                btns.style.flexDirection = "row";
	            } else {
	            	//caso isEditando é false altera o botão salvar para editar e tira o botão cancelar e alterar imagem
	            	editarBtn.style.width = "300px";
	                nomeUsuario.contentEditable = "false";
	                descricaoUsuario.readOnly = true;
	                alterarBtn.style.visibility = "hidden";
	                cancelarBtn.style.visibility = "hidden";
	                nomeUsuario.style.border = "none";
	                editarBtn.textContent = "Editar";
	                btns.style.flexDirection = "column";
	            }
        	}

        	//função que envia os valores alterados para a página salvarPerfil.php caso o botão salvar (editar modificado) seja clicado
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

			//função para cancelar a edição, volta os botões para os valores inciais
        	function cancelar(){
        		var nomeUsuario = document.getElementById("nomeUsuario");
	            var descricaoUsuario = document.getElementById("bio");
	            var editarBtn = document.getElementById("editarBtn");
	            var alterarBtn = document.getElementById("alterarBtn");
	            var cancelarBtn = document.getElementById("cancelarBtn");

	            editarBtn.style.width = "300px";
	            nomeUsuario.contentEditable = "false";
	            descricaoUsuario.readOnly = true;
	            alterarBtn.style.visibility = "hidden";
	            cancelarBtn.style.visibility = "hidden";
	            nomeUsuario.style.border = "none";
	            editarBtn.textContent = "Editar"
	            btns.style.flexDirection = "column";
	            edit = 0
        	}

        	//função para limitar tamanho do contenteditable do nome
        	function limitarCaracteres(elemento, maxCaracteres) {
		        if (elemento.textContent.length > maxCaracteres) {
		            elemento.textContent = elemento.textContent.substring(0, maxCaracteres);
		        }
    		}	

    		//função para selecionar uma imagem de perfil dos arquivos do computador
        	function selecionarImagem() {
			    var fileInput = document.getElementById("fileInput");
			    fileInput.click();

			    fileInput.addEventListener("change", function() {
			        var userImage = document.getElementById("ImagemPerfil");
			        var file = fileInput.files[0];

			        if (file) {
			            var reader = new FileReader();

			            reader.onload = function(e) {
			                userImage.src = e.target.result;
			            };

			            reader.readAsDataURL(file);

			            // Atribui o valor à variável imagemFile no escopo global
			            imagemFile = file;
			        }
			    });
			}
    </script>
</body>
</html>