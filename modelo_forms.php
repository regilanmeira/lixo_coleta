<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
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
                        <!-- AQUI COLOCAR O NOME DA PÁGINA QUE VOCÊ ESTÁ DESENVOLVENDO -->
                        <li>Nome da página</li>
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
                            <!-- AQUI COLOCAR O NOME DO FORMULÁRIO QUE VOCÊ ESTÁ DESENVOLVENDO -->
                            NOME DO FORMULÁRIO
                        </p>
                    </header>

                    <!-- AQUI ONDE FICARÁ OS ELEMENTOS DE FORMULÁRIO
                   ADICIONAR O ACTION PARA ONDE A PÁGINA IRÁ SER SUBMETIDA
                    -->
                    <form name="" action="" method="POST">

                        <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                        <!-------- EXEMPLO COM CAMPO DE ENTRADA PARA INPUT -------->
                        <div class="field">
                            <label class="label">Legenda</label>

                            <div class="control">
                                <input name="DEFINIR NOME PARA O ELEMENTO" class="input" type="text" placeholder="Informações de exemplos">
                            </div>
                            <p class="help">
                                Informações adicionais se precisar. Exemplo: Este campo é de preenchimento obrigatório
                            </p>
                        </div>
                        <!---------  AQUI TERMINA UM CAMPO DO FORMULÁRIO ------------->

                        <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                        <!-------- EXEMPLO COM CAMPO DE ENTRADA PARA SELECT  -------->
                        <div class="field">
                            <label class="label">Legenda</label>

                            <div class="control">
                                <div class="select">
                                    <select>
                                        <option>Item A</option>
                                        <option>Item B</option>
                                        <option>Item C</option>
                                    </select>
                                </div>
                            </div>
                            <p class="help">
                                Informações adicionais se precisar
                            </p>
                        </div>
                        <!---------  AQUI TERMINA UM CAMPO DO FORMULÁRIO ------------->


                        <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                        <!-------- EXEMPLO COM CAMPO DE ENTRADA PARA TEXTAREA  -------->
                        <div class="field">
                            <label class="label">Legenda</label>
                            <div class="control">
                                <textarea name="DEFINIR NOME PARA O ELEMENTO" class="textarea" placeholder="Deixe aqui seu comentário"></textarea>
                            </div>
                        </div>

                        <!---------  AQUI TERMINA UM CAMPO DO FORMULÁRIO ------------->



                        <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                        <!----------------- EXEMPLO COM BOTÕES  -------------->
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Enviar
                                </button>
                            </div>
                            <div class="control">
                                <button type="reset" class="button red">
                                    Limpar
                                </button>
                            </div>
                        </div>

                        <!---------  AQUI TERMINA UM CAMPO DO FORMULÁRIO ------------->



                        <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                        <!----------------- EXEMPLO COM RADIO OU CHECK
                        (no caso substituir class ou type radio por check  -------------->
                        <div class="field">
                            <label class="label">Legenda</label>
                            <div class="field-body">
                                <div class="field grouped multiline">
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="DEFINIR NOME PARA O ELEMENTO" value="Sim" checked>
                                            <span class="check"></span>
                                            <span class="control-label">Sim</span>
                                        </label>
                                    </div>
                                    <div class="control">
                                        <label class="radio">
                                            <input type="radio" name="DEFINIR NOME PARA O ELEMENTO" value="Nao">
                                            <span class="check"></span>
                                            <span class="control-label">Não</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---------  AQUI TERMINA UM CAMPO DO FORMULÁRIO ------------->


                        <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                        <!----------------- EXEMPLO COM UPLOAD  -------------->
                        <div class="field">
                            <label class="label">Legenda</label>
                            <div class="field-body">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button blue">
                                            Enviar arquivo
                                        </a>
                                        <input type="file" name="DEFINIR NOME PARA O ELEMENTO">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!---------  AQUI TERMINA UM CAMPO DO FORMULÁRIO ------------->



                    </form>


                    <!-- FIM DA DIV COM UM CARD DE FORMULÁRIO-->
                </div>
                <!-- FIM DA SESSÃO PRINCIPAL DA PÁGINA -->
            </section>


            <!---------------------------------------------------------->

            <?php include 'rodape.php' ?>

        </div>

    </body>
</html>
