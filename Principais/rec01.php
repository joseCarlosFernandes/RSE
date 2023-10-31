<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recuperar Senha</title>
	<link rel="stylesheet" type="text/css" href="../css/styleEntrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style type="text/css">
		#titulo{
			color: white;
			font-family: Candara;
			font-size: 20px;
		}

        form[name="frec"] {
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
</head>
<body>
    <div class="container">
        <form name="frec" action="rec02.php" method="POST">
            <table class="styled-table">
                <tr>
                    <td colspan="2"><img src="../imagens/logo.png" alt="Logo" class="logo">
                    	<p id="titulo">Digite seu Email para Recuperar</p>
                        <input type="text" name="email" placeholder="Email">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn" value="Enviar">
                        <a id="btn_voltar" href="entrar.php">&#8592;</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>