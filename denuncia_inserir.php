<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php session_start();?>
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
   
                        <div class="field">
                            <label class="label">Descrição da denúncia</label>

                            <div class="control">
                                <textarea name="txtDescricao" class="input" type="text" placeholder="" required="">
</textarea>
                            </div>
                            <p class="help">
                                Este campo é de preenchimento obrigatório.
                            </p>
                        </div>
                     
                        
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button green">
                                    Enviar
                                </button>
                            </div>
                            
                           
                            
                
                            
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
