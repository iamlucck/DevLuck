<?php
    require_once 'Classes/usuarios.php';
    $a = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <title>Projeto Desenvolvimento WEB</title>
        <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
<div id="form-corpo">
    <h1>Entrar</h1>
    <form method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="senha" placeholder="Senha">
    <input type="submit" value="Entrar">
    <a href="cadastro.php">Não tem cadastro?<br><strong>Registrar-se</strong></a>
    </form>
</div>

<?php
if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes ($_POST['senha']);
    if(!empty($email) && !empty($senha))
    {
        $a->conectar("projeto_playluck","localhost","root","");
        if($a->msgErro == "")
        {
            if($a->login($email,$senha))
            {
                header("location: meuacesso.php");         
            }
            else
            {
                ?>
                <div class="msgerro">
                Usuário e/ou senha incorreta
                </div>
                <?php
            }      
        }
        else
        {
            ?>
            <div class="msgerro">
            <?php echo "Erro: ".$a->msgErro; ?>
            </div>
            <?php
        }
    }
    else
    {
        ?>
        <div class="msgerro">
        Preencha todos os dados!
        </div>
        <?php
    }
}
?>
</body>
</html>