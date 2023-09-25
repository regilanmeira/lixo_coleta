<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php include 'cabecalho.php' ?>
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
                        <li>CBG <b>SAU</b></li>
                        <li>Nome da página</li>
                    </ul>

                </div>
            </section>
            <!---------------------------------------------------------->

            <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->



            <!---------------------------------------------------------->

            <?php include 'rodape.php' ?>

        </div>
    </body>
</html>
