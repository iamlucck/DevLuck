<?php

Class Usuario
{
    private $pdo;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try 
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

        } catch (PDOException $e) {
            $msgErro = $e->getMessage();

        }
        

    }

    public function cadastrar($nome, $email, $usuario, $senha)
    {
        global $pdo;
        //Verificação Cadastro Existente
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            return false;
        }
        else
        {
            //Caso Não, Cadastrar:
            $sql = $pdo->prepare("INSERT INTO usuarios  (nome,email,usuario,senha) VALUES (:n, :e, :u, :s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":u",$usuario); //:l para usuario
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            return true;

        }

    }

    public function login($email, $senha)
    {
        global $pdo;
        //Verificar se existe cadastro
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //LOGADO COM SUCESSO
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;
        }
        else
        {
            return false; //Não tem cadastro
        }
    }

    private function list($nome, $email)
    {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            $dado = $sql->fetch();
            $testenome = $dado['nome'];
            echo($testenome);
            return true;
        }
        else
        {
            echo "Não tem cadastro";
            return false; //Não tem cadastro
        }
    }
}    
?>