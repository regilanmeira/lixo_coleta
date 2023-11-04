<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../coletor.php';
        
        $login = $_POST["txtLogin"];
        $senha = $_POST["txtSenha"];
        
        $coletor = new coletor();
        
        $coletor->setLogin($login);
        $coletor->setSenha($senha);
        
        
        if ($coletor->fazerLogin() == true)
        {
            session_start();
            $_SESSION["login"] = $login;
            header("Location:denuncia_exibir.php");
            
        }
        else
        {
            echo "<h1 class='alert-danger'>Não foi possível fazer o acesso. Verifique o login e senha digitado!</h1>";
        }
        
        
        ?>
    </body>
</html>
