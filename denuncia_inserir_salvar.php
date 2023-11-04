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
                    <li>Fazer denúncia</li>
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
                <form name="denuncia_inserir" method="POST">

                    <?php
                    include "./denuncia.php";

                    $dataOcorrido = $_POST["txtDataOcorrido"];
                    $descricaoDenuncia = $_POST["txtDescricaoDenuncia"];
                    $descricaoLugar = $_POST["txtDescricaoLugar"];
                    $classificacao = $_POST["selectClassificacao"];


                    if (isset($_POST['ckUsarGPS'])) {
                        $latitude = $_POST["txtLatitude"];
                        $longitude = $_POST["txtLongitude"];
                    } else {
                        $latitude = "";
                        $longitude = "";
                    }



                    $login_cidadao = $_SESSION["login_cidadao"];
                    $status = "Disponível";


                    // -------- ENVIO DE IMAGEM PARA O SERVIDOR


                    if (isset($_FILES['pic'])) {

                        $ext = strtolower(substr($_FILES['pic']['name'], -4)); //Pegando extensão do arquivo
                        $new_name = date("Y_m_d_H_i_s") . $ext; //Definindo um novo nome para o arquivo
                        $dir = 'imagens/'; //Diretório para uploads

                        $foto = $dir . $new_name;
                        move_uploaded_file($_FILES['pic']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
                    }

                    // ------------------

                    $denuncia = new denuncia($dataOcorrido, $descricaoDenuncia, $descricaoLugar, $foto, $latitude, $longitude, $login_cidadao, $status,$classificacao);

                    if ($denuncia->fazerDenuncia() == true) {
                        echo "<h1>Denuncia inserida no sistema</h1>";
                    } else {
                        echo "<h1>Não foi possível registrar a denúncia</h1>";
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