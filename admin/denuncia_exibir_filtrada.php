<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <?php include '../cabecalho.php'; ?>

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
                    <li>Denúncias </li>
                </ul>

            </div>
        </section>
        <!---------------------------------------------------------->

        <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->





        <form action="denuncia_exibir.php" method="post">
            <?php
            include "../denuncia.php";



            $denuncia = new denuncia();



        $status = $_POST["selectStatus"];
        $classificacao = $_POST["selectClassificacao"];

            $denuncia->setStatus($status);
            $denuncia->setClassificacao($classificacao);

            $resultado = $denuncia->mostrarDenunciasComFiltro();


            ?>

            <div class="card-content">

                


                <table class="table-pagination">
                    <tr>
                        <!--<th>ID</th>-->
                        <th>Local</th>
                        <!--<th>Descrição da denúncia</th>-->
                        <th>Data</th>
                        <th>Status</th>
                        <th></th>
                    </tr>



                    <?php

                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        $id = $linha["IdDenuncia"];
                        $local = $linha["descricaoLugar"];
                        $denuncia = $linha["descricaoDenuncia"];
                        $data = $linha["dataOcorrido"];

                        $dataformatada = new DateTime($data);


                        $status = $linha["status"];

                    ?>

                        <tr>
                            <!-- <td><?php echo $id; ?></td>-->
                            <td><?php echo $local; ?></td>
                            <!--<td><?php echo $denuncia; ?></td>-->
                            <td><?php echo $dataformatada->format('d/m/Y'); ?></td>
                            <td><?php echo $status; ?></td>
                            <td><a href="denuncia_mostrar_dados.php?idDenuncia=<?php echo $id;  ?>"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>

                    <?php

                    }

                    ?>

                </table>

                <br />
                <div class="field grouped">
                        <div class="control">
                            <a href="denuncia_filtrar.php">
                                <button type="button" class="button" name="">
                                    Voltar
                                </button>
                            </a>
                        </div>
                    </div>
            </div>

        </form>

        <!---------------------------------------------------------->

        <?php include 'rodape.php' ?>

    </div>
</body>

</html>