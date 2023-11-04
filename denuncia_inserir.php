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

        <script src="localizacao.js"></script>
    </head>
    <body onload="getLocation();">
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
                        <li>Realizar denúncia</li>
                    </ul>
                </div>
            </section>
            <!---------------------------------------------------------->    

            <!----------------- AQUI O CONTEÚDO DA PÁGINA -------------->

            <!-- INICIO DA SEÇÃO PRINCIPAL DA PÁGINA -->
            <section class="section main-section">
                
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-ballot"></i></span>
                            <!-- NOME DO FORMULÁRIO -->
                            Informe os dados da denúncia
                        </p>


                    </header>

                    <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
                    <form enctype="multipart/form-data" name="denuncia_inserir" action="denuncia_inserir_salvar.php" method="POST">

                        <div class="field space">
                            <input class="check" checked="checked" type="checkbox" value="gps" name="ckUsarGPS"/> Desejo usar minhas coordenadas geográficas (posição) atuais como local onde encontra-se o descarte de lixo denunciado. 
                        </div> 


                        <div class="field space">
                            <label  class="label" for="descricaoLugar">Descrição do local</label>          
                            <textarea class="textarea" placeholder="Descreva a localidade" name="txtDescricaoLugar"></textarea>                    
                        </div> 


                        <div class="field">

                            <input type="hidden" class="input" name="txtLatitude" >
                            <input type="hidden" class="input" name="txtLongitude" >
                        </div>

                        <div class="field">
                            <label class="label">Relate seu problema</label>

                            <div class="control">
                                <textarea class="textarea" required="" name="txtDescricaoDenuncia"></textarea>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Data do ocorrido</label>

                            <div class="control">
                                <input type="date" class="input" name="txtDataOcorrido" value="<?php echo date("Y-m-d"); ?>">
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



                        <div class="field">
                            <label class="label">Envie uma foto do local</label>

                           
                        </div>

                        <div class="field file">
                            <label class="upload control"></label>


                            <div class="field-body">
                                <div class="field file">
                                    <label>

                                        <input class="button-confirm" name="pic" type="file" accept="image/*" >
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button button-confirm" name="">
                                    Enviar
                                </button>
                            </div>
                        </div>

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
               
            </section> 

            <!---------------------------------------------------------->
            <?php include 'rodape.php' ?>

        </div>
    </body>
</html>
