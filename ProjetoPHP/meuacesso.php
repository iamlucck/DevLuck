<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <title>Painel do Usuário - PlayLuck</title>
        <link rel="stylesheet" href="CSS/meuacesso.css">
</head>
<body>
<div id="meuacesso">

    <h3> Meu Painel <h3>
    <button type="button"><a href="listagem.php">Listar Usuários</a></button><br>
    <button id="exit"><a href="logoff.php">Sair</a></button>

</div>
</body>
</html>