<!DOCTYPE html>
<html>
<head>
	<title>Recuperar</title>
	<link rel="stylesheet" type="text/css" href="../css/styleEntrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style type="text/css">
		#titulo{
			color: white;
			font-family: Candara;
		}
		button{
			margin-left: 20px;
			width: 200px;
		    height: 50px;
		    box-sizing: border-box;
		    border: none;
		    border-radius: 5px;
		    background-color: black;
		    outline: none;
		    color: #fff;
		    font-size: 16px;
		    cursor: pointer;
		    transition: background-color 0.3s ease;
		}
		button:hover{
			background-color: #008000;
		}

    
	    .password-container {
	        position: relative;
	    }

	    .password-toggle {
	        position: absolute;
	        top: 50%;
	        transform: translateY(-50%);
	        right: 10px;
	        cursor: pointer;
	    }

	    #senha2[type="password"] {
	    	padding-right: 30px;
		}

		#senha2[type="password"] {
		    padding-right: 30px;
		}
	</style>
</head>
<body>
	<div class="container">
		<form name="flogin" action="rec06.php" method="POST">
			<table class="styled-table">
			    <tr>
			        <td colspan="2"><img src="../imagens/logo.png" alt="Logo" class="logo">
			            <p id="titulo">Altere a Senha</p>
			        </td>
			    </tr>
			    <tr>
			    	<td colspan="2" class="password-container">
                        <input type="password" name="senha1" placeholder="Nova Senha" id="senha" minlength="8">
                        <span class="password-toggle" id="toggle-password">
                            <i class="fa fa-eye" id="eye"></i>
                        </span>
                    </td>
			    </tr>
			    <tr>
			    	<td colspan="2" class="password-container">
				    	<input type="password" name="senha2" placeholder="Repita a Senha" id="senha2" minlength="8">
	                    <span class="password-toggle" id="toggle-password">
	                        <i class="fa fa-eye" id="eye2"></i>
	                   	</span>
                	</td>
			    </tr>
			    <tr>
			        <td colspan="2">
			            <button id="btn" onclick="return compararCampos();">Enviar</button>
			        </td>
			    </tr>
			</table>
		</form>
	</div>


</body>
</html>

<script>
    const senhaInput = document.getElementById('senha');
    const senhaInput2 = document.getElementById('senha2');
    const eyeIcon = document.getElementById('eye');
    const eyeIcon2 = document.getElementById('eye2');

    //botão Nova senha
    eyeIcon.classList.add('fa-eye-slash');
    eyeIcon.addEventListener('click', togglePasswordVisibility);

    function togglePasswordVisibility() {
        if (senhaInput.type === 'text') {
            senhaInput.type = 'password';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            senhaInput.type = 'text';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }

    //botão Repita senha
    eyeIcon2.classList.add('fa-eye-slash');
    eyeIcon2.addEventListener('click', togglePasswordVisibility2);

    function togglePasswordVisibility2() {
        if (senhaInput2.type === 'text') {
            senhaInput2.type = 'password';
            eyeIcon2.classList.remove('fa-eye');
            eyeIcon2.classList.add('fa-eye-slash');
        } else {
            senhaInput2.type = 'text';
            eyeIcon2.classList.remove('fa-eye-slash');
            eyeIcon2.classList.add('fa-eye');
        }
    }

    //comparar se senhas são iguais
    function compararCampos() {
	    var senha1 = document.getElementById("senha").value;
	    var senha2 = document.getElementById("senha2").value;

	    if (senha1 !== senha2) {
	        alert("As senhas não coincidem!");
	        return false; // Impede o envio do formulário
	    }
	    
	    // Se as senhas coincidirem, o formulário será enviado normalmente
	    return true;
	}
</script>