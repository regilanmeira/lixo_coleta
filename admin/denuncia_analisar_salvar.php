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
        include '../menu_lateral.php';
        ?>

        <!------ SESSÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Cadê o lixo que estava aqui?</li>
                    <li>Histórico da denúncia</li>
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
                        Histórico da denúncia
                    </p>
                </header>

                    <?php
                    include "../denuncia_historico.php";
                    include "../denuncia.php";
                  
                    $status= $_POST["selectStatus"];
                    $observacao= $_POST["txtObservacao"];
                    $dataHistorico= $_POST["txtDataHistorico"];
                    $idDenuncia = $_GET["idDenuncia"];

                    $login_coletor = $_SESSION["login"];
                   
                    // ------------------

                    $denuncia_historico = new denuncia_historico($idDenuncia,$login_coletor,$dataHistorico,$status,$observacao);
  
                    
                    


                    if ($denuncia_historico->registrarHistorico() == true) {
                        $denuncia = new denuncia();
                        $denuncia->setIdDenuncia($idDenuncia);
                        $denuncia->setStatus($status);
                        $denuncia->mudarStatus();
                        echo "<h1> Observação registrada no sistema</h1>";
                    } else {
                        echo "<h1>Não foi possível registrar a observação </h1>";
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

        <?php include 'rodape.php' ?>

    </div>
</body>

</html>