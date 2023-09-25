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
            <div class="card-content">
                <table>
                    <thead>
                        <tr>

                            <th>Coluna 1</th>
                            <th>Coluna 2</th>
                            <th>Coluna 3</th>
                            <th>Coluna 4</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Name">Rebecca Bauch</td>
                            <td data-label="Company">Daugherty-Daniel</td>
                            <td data-label="City">South Cory</td>
                            <td data-label="Created">Oct 25, 2021</td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <tr>

                            <td data-label="Name">Felicita Yundt</td>
                            <td data-label="Company">Johns-Weissnat</td>
                            <td data-label="City">East Ariel</td>

                            <td data-label="Created">Jan 8, 2021</td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        
                        <tr>

                            <td data-label="Name">Mr. Larry Satterfield V</td>
                            <td data-label="Company">Hyatt Ltd</td>
                            <td data-label="City">Windlerburgh</td>
                            <td data-label="Created">Dec 18, 2021</td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small red --jb-modal" data-target="sample-modal" type="button">
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>


            <!---------------------------------------------------------->

            <?php include 'rodape.php' ?>

        </div>
    </body>
</html>
