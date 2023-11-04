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
        include '../menu_superior.php';
        include 'menu_lateral.php';
        ?>

        <!------ SESSÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Cadê o lixo que estava aqui?</li>
                    <li>Filtrar denúncias </li>
                </ul>

            </div>
        </section>
        <!---------------------------------------------------------->

        <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->





        <form action="denuncia_exibir_filtrada.php" method="post">
            <?php


            ?>

            <div class="card-content">

                <div class="field">
                    <label class="label">Status</label>

                    <div class="control">
                        <select class="input" name="selectStatus">
                            
                            
                            <option value="Analisado">Analisado</option>
                            <option value="Concluído">Concluído</option>
                            <option value="Em análise">Em análise</option>
                            <option value="Em andamento">Em andamento</option>
                            <option value="Encaminhado">Encaminhado</option>
                            <option value="Pendente">Pendente</option>

                        </select>

                    </div>
                </div>

                <div class="field">
                            <label class="label">Classificacao</label>

                            <div class="control">
                                <select class="input" name="selectClassificacao">
                                    <option value="Construção Civil">Construção Civil</option>
                                    <option value="Doméstico">Doméstico</option>
                                    <option value="Eletrônico">Eletrônico</option>
                                    <option value="Plástico">Papel</option>
                                    <option value="Plástico">Plástico</option>
                                    <option value="Orgânico">Orgânico</option>
                                    <option value="Vidro">Vidro</option>
                                    <option value="Vidro">Outros</option>
                                    
                                </select>
                              
                            </div>
                        </div>

                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button button-confirm" name="">
                                    Exibir
                                </button>
                            </div>
                        </div>



            </div>

        </form>

        <!---------------------------------------------------------->

        <?php include '../rodape.php' ?>

    </div>
</body>

</html>