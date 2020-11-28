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
    <h1>Cadastro</h1>
    <form method="POST">
    <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
    <input type="email" name="email" placeholder="Email" maxlength="40">
    <input type="text" name="usuario" placeholder="Nome de Usuário"maxlength="30">
    <input type="password" name="senha" placeholder="Senha" maxlength="15">
    <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
    <input type="submit" value="Registrar">
    <a href="index.php">Login</a>
    </form>
</div>

<?php
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes ($_POST['senha']);
    $confirmarSenha = addslashes ($_POST['confSenha']);
    if(!empty($nome) && !empty($email) && !empty($usuario) && !empty($senha) && !empty($confirmarSenha))
    {
        $a->conectar("projeto_playluck","localhost","root","");
        if($a->msgErro == "")
        {
            if($senha == $confirmarSenha)
            {
                if($a->cadastrar($nome,$email,$usuario,$senha))
                {
                    ?>
                    <div id="cadastrosucesso">
                    Cadastrado com sucesso!
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="msgerro">
                    Email já está cadastrado
                    </div>
                    <?php
                }
            }
            else
            {   
                    ?>
                    <div class="msgerro">
                    Senhas não correspodem
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
    }else
    {
        ?>
        <div class="msgerro">
        O Preenchimento é obrigatório!
        </div>
        <?php
    }
}
?>

</body>
</html>