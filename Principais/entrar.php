<!DOCTYPE html>
<html>
<head>
    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="../css/styleEntrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="container">
        <form name="flogin" action="entrar02.php" method="POST">
            <table class="styled-table">
                <tr>
                    <td colspan="2"><img src="../imagens/logo.png" alt="Logo" class="logo">
                        <input type="text" name="email" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="password-container">
                        <input type="password" name="senha" placeholder="Senha" id="senha"  minlength="8">
                        <span class="password-toggle" id="toggle-password">
                            <i class="fa fa-eye" id="eye"></i>
                        </span>
                        Esqueceu a senha? <a href="rec01.php">Clique aqui para alterar</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn" value="Entrar">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        Não é cadastrado? <a href="cad01.php">Clique aqui para criar uma conta</a><br>
                        <a id="btn_voltar" href="../index.php">&#8592;</a>
                    </td>
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
        top: 32%;
        transform: translateY(-50%);
        right: 10px;
        cursor: pointer;
    }

    body{
        zoom: 100%;
        font-family: 'Lato';
    }

    form[name="flogin"] {
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
    const eyeIcon = document.getElementById('eye');
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
</script>