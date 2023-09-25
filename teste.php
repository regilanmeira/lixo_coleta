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
        
           
        $c = new cidadao($nome,"regilan@","739","Rua X","Bairro X", "Ilhéus","regilan","123","ativo");
        
        $c->autoCadastrar();
        
        
      
       
        
        ?>
    </body>
</html>
