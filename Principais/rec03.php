<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	</style>
</head>
<body>
				<div class="container">
			        <form name="flogin" action="rec04.php" method="POST">
			            <table class="styled-table">
			                <tr>
			                    <td colspan="2"><img src="../imagens/logo.png" alt="Logo" class="logo">
			                    	<p id="titulo">Um Código Foi Enviado Para Seu Email</p>
			                        <input type="text" name="codigo" id="codigo" placeholder="Código" maxlength="8">
			                    </td>
			                </tr>
			                <tr>
			                    <td colspan="2">
			                        <button id="btn">Enviar</button>
			                    </td>
			                </tr>
			            </table>
			        </form>
			    </div>
</body>
</html>