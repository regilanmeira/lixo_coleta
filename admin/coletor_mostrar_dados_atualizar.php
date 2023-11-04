<?php session_start(); ?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
        <?php include '../cabecalho.php' ?>
    </head>
    <body>
        <div id="app">
            <?php
            include '../menu_superior.php';
            include 'menu_lateral.php';
            ?>

            <!------ SESSÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
            <section class="is-title-bar">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                    <ul>
                        <li>Cadê o lixo que estava aqui?</li>
                        <li>Atualizar dados</li>
                    </ul>
                </div>
            </section>
            <!---------------------------------------------------------->    

            <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->

            <!-- INICIO DA SEÇÃO PRINCIPAL DA PÁGINA -->
            <section class="section main-section">
                <div class="card mb-6">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-ballot"></i></span>
                            <!-- NOME DO FORMULÁRIO -->
                            Meus dados
                        </p>
                    </header>

                    <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                    <form action="exibir_denuncias.php" method="POST">

                        <?php
                        include "../coletor.php";

                        $bairro = $_POST["txtBairro"];
                        $celular = $_POST["txtCelular"];
                        $cidade = $_POST["txtCidade"];
                        $email = $_POST["txtEmail"];
                        $logradouro = $_POST["txtLogradouro"];
                        $nome = $_POST["txtNome"];
                        $senha = $_POST["txtSenha"];
                        $tipoPessoa = $_POST["txtTipoPessoa"];
                        
                        
                        $coletor= new coletor();
                        $coletor->setBairro($bairro);
                        $coletor->setCelular($celular);
                        $coletor->setCidade($cidade);
                        $coletor->setEmail($email);
                        $coletor->setLogradouro($logradouro);
                        $coletor->setNome($nome);
                        $coletor->setSenha($senha);
                        $coletor->setTipoPessoa($tipoPessoa);
                        $coletor->setLogin($_SESSION["login"]);
                        
                        
                        if ($coletor->atualizarDados() == true)
                        {
                            echo "<h1>Seus dados foram atualizados!</h1>";
                        }
                        else
                        {
                            echo "<h1>Não foi possível atualizar seus dados. Verifique os campos informados.</h1>";
                        }

                        
                        ?>
                        
                        <div class="field grouped">
                            <div class="control">
                                <button  type="submit" class="button" name="">
                                    Voltar
                                </button>
                            </div>
                        </div>








                    </form>    
                </div>
            </section> 

            <!---------------------------------------------------------->
<?php include '../rodape.php' ?>

        </div>
    </body>
</html>