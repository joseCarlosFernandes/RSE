<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="../css/styleEntrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
	<div class="container">
        <form name="fcadastro" action="cad02.php" method="POST" enctype="multipart/form-data">
            <table class="styled-table">
                <tr>
                    <td colspan="2"><img src="../imagens/logo.png" alt="Logo" class="logo">
                    	<p id="titulo">Crie seu Perfil</p>
                        <input type="text" name="nome" placeholder="Nome de Usuário" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" name="email" placeholder="Email" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="password-container">
                        <input type="password" name="senha" placeholder="Senha" id="senha" minlength="8" required>
                        <span class="password-toggle" id="toggle-password">
                            <i class="fa fa-eye" id="eye"></i>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="password-container">
                        <input type="password" name="senha2" placeholder="Repita a Senha" id="senha2" minlength="8" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn" onclick="return compararCampos();" value="Cadastrar">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"></td>
                    <a id="btn_voltar" href="entrar.php">&#8592;</a>
                </tr>
            </table>
        </form>
    </div>


</body>
</html>
<style>
    .password-container {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        top: 100%;
        transform: translateY(-50%);
        transform: scale(2.00);
        left: 380px;
        cursor: pointer;
    }
    #eye
    {
    	color: white;
    }

    #titulo{
		color: white;
		font-family: Candara;
		font-size: 20px;
	}

    form[name="fcadastro"] {
        position: relative;
    }

    #btn_voltar{
        position: absolute;
        top: 15px;
        left: 25px;
    }

    #btn_voltar {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 20px;
        color: #fff;
        text-decoration: none;
        border-radius: 100%;
        transition: color 0.3s;
        font-family: 'Lato';
        font-size: 50px;
    }

    #btn_voltar:hover {
        color: #008000;
    }
</style>

<script>
    const senhaInput = document.getElementById('senha');
    const senhaInput2 = document.getElementById('senha2');
    const eyeIcon = document.getElementById('eye');
    eyeIcon.classList.add('fa-eye-slash');
    eyeIcon.addEventListener('click', togglePasswordVisibility);

    function togglePasswordVisibility() {
        if (senhaInput.type === 'text') {
            senhaInput.type = 'password';
            senhaInput2.type = 'password';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            senhaInput.type = 'text';
            senhaInput2.type = 'text';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
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