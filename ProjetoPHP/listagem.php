<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste</title>
    <link rel="stylesheet" href="CSS/meuacesso.css">
</head>
<body>
    <?php
    require_once 'Classes/usuarios.php';
    $a = new Usuario;
    ?>
    <?php
    $a->conectar("projeto_playluck","localhost","root","");
    $a = $pdo->prepare("SELECT * FROM usuarios");
    $a->execute();   
    ?>
    <table id="listagem">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>LOGIN</th>
        </tr> 
          
        <?php 
        while($lista = $a->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?php echo $lista["id_usuario"]; ?></td>
            <td><?php echo $lista["nome"]; ?></td>
            <td><?php echo $lista["email"]; ?></td>
            <td><?php echo $lista["usuario"]; ?></td>
        </tr> 
        <?php } ?>
        </table>
        <button id="exit"><a href="meuacesso.php">Voltar</button>
</body>
</html>



