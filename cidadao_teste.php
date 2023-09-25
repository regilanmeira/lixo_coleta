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
        include './cidadao.php';
        
        $nome = "Regilan";
        $email = "regilan@gmail.com";
        $celular = "73991458013";
        $logradouro = "Rua ABC";
        $bairro = "ABC";
        $cidade = "Ilhéus";
        $login = "regilan";
        $senha = "123456";
        $status = "ativo";
        
        //criação da classe cidadão
        //$cidadao = new cidadao($nome, $email, $celular, $logradouro, $bairro, $cidade, $login, $senha, $status);
        
        //echo $cidadao->autoCadastrar();
        //$cidadao->setNome("Regilan Meira Silva");
        //$cidadao->setBairro("Boa Vista");
        
        //$cidadao->atualizarDados();
        
        
        //$cidadao->setSenha("654321");
        //$cidadao->trocarSenha();
        
        $cidadao = new cidadao();
        
        $cidadao->setLogin("regilan");
        $cidadao->setSenha("123456");
        $cidadao->getLogin();
            
        
                if ($cidadao->fazerLogin() == true)
                {
                    echo "Logou <br/>";
                    echo $cidadao->getNome();
                    
                }
                else{
                    echo "Não é possível logar!";
                }
        
        ?>
    </body>
</html>
