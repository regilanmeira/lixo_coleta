<?php session_start(); ?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
        <?php include './cabecalho.php' ?>
    </head>
    <body>
        <div id="app">
            <?php
            include './menu_superior.php';
            include './menu_lateral.php';
            ?>

            <!------ SESSÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
            <section class="is-title-bar">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                    <ul>
                        <li>Cadê o lixo que estava aqui?</li>
                        <li>Remover denúncia</li>
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
                            Denúncia
                        </p>
                    </header>

                    <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                    <form action="denuncia_exibir.php" method="POST">

                        <?php
                        include "./denuncia.php";

                        $denuncia = new denuncia();
                        
                        $denuncia->setIdDenuncia($_GET["idDenuncia"]);
                        
                        if ($denuncia->removerDenuncia() == true)
                        {
                            echo "<h1>Denúncia removida com sucesso!</h1>";
                        }
                        else
                        {
                            echo "<h1>Não foi possível remover esta denúncia.</h1>";
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
<?php include 'rodape.php' ?>

        </div>
    </body>
</html>
