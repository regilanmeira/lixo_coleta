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
                    <li>Remover análise da denúncia</li>
                </ul>
            </div>
        </section>
        <!---------------------------------------------------------->

        <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->

        <!-- INICIO DA SEÇÃO PRINCIPAL DA PÁGINA -->
        <section class="section main-section">
            <div class="card mb-6">
              

                <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                <form name="" method="POST">

                    <?php
                    include "../denuncia_historico.php";
                    
                    
                   
                    $idHistorico = $_GET["idHistorico"];
                    
                                                     
                $denunciaHistorico = new denuncia_historico();
                $denunciaHistorico->setIdHistorico($idHistorico);

                    if ($denunciaHistorico->removerHistorico() == true) {
                       
                        echo "<h1>Análise removida da denúncia.</h1>";
                    } else {
                        echo "<h1>Não foi possível remover a análise da denúncia</h1>";
                    }
                    ?>


                   
                    <div class="field grouped">
                        <div class="control">
                            <a href="denuncia_exibir.php">
                                <button type="button" class="button" name="">
                                    Voltar
                                </button>
                            </a>
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