<?php
session_start();

// Finaliza a sessão (destroi todos os dados da sessão)
session_destroy();

header("Location: ../index.php");
?>






