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
                        <li>Mostrar dados da denúncia</li>
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
                    <form enctype="multipart/form-data" action="denuncia_mostrar_dados_remover.php?idDenuncia=<?php echo $_GET["idDenuncia"]?>" method="POST">

                        <?php 
                        include './denuncia.php';
                        
                        $idDenuncia = $_GET["idDenuncia"];
                        
                        $denuncia = new denuncia();
                        $denuncia->setIdDenuncia($idDenuncia);
                        
                        $denuncia->mostrarDadosDenuncia();
                        
                        ?>
                        
                        
                       
                        <div class="field space">
                            <label  class="label" for="descricaoLugar">Descrição do local</label>          
                            <label>
                                <?php echo $denuncia->getDescricaoLugar(); ?>
                            </label>                 
                        </div> 


                        

                        <div class="field">
                            <label class="label">Descrição da denúncia</label>

                             <label>
                                <?php echo $denuncia->getDescricaoDenuncia(); ?>
                            </label>   
                        </div>

                        <div class="field">
                            <label class="label">Data do ocorrido</label>

                             <label>
                                <?php 
                                
                                 $data = $denuncia->getDataOcorrido();
                
                                 $dataformatada = new DateTime($data);
                                
                                 echo $dataformatada->format('d/m/Y'); ?>
                            </label>   
                        </div>

                         <div class="field">
                            <label class="label">Status da denúncia</label>
  <label>
                                <?php echo $denuncia->getStatus(); ?>
                            </label> 
                           
                        </div>

                        <div class="field">
                            <label class="label">Foto do local</label>

                           
                        </div>
                        
                         <div class="field">
                             <img src="<?php echo $denuncia->getFoto(); ?>" />

                           
                        </div>
                        
                        
                        <!-- EXIBIÇÃO DO HISTÓRICO DA DENÚNCIA -->
                        <div class="field">
                             <label class="label">Histórico da denúncia</label>

                           
                        </div>
                        
                        <div class='field'>
                            
                            <table class="table-pagination">
                    <tr>
                        
                        <th>Data</th>
                        
                        <th>Observação</th>
                        <th>Status</th>
                        
                    </tr>
                        
              
                        
            <?php 
            
             include "./denuncia_historico.php";
            
            
            $denunciaHistorico = new denuncia_historico();
            
            $denunciaHistorico->setIdDenuncia($idDenuncia);
            
            $resultado = $denunciaHistorico->gerarHistorico();
            
            while ($linha = mysqli_fetch_assoc($resultado))
            {
                
               
                $observacao = $linha["$observacao"];
                $data = $linha["dataHistorico"];
                $dataformatada = new DateTime($data);
                
                $status = $linha["status"];
  
            ?>
            
            <tr>
                
               
                <td><?php echo $dataformatada->format('d/m/Y'); ?></td>
                <td><?php echo $observacao; ?></td>
                <td><?php echo $status; ?></td>
               
            </tr>

            <?php 
            
            }
            
            ?>
            
                </table>
                        </div>

                        
                        <?php 
                        
                        if ($denuncia->getStatus() == "Disponível")
                        {
                        
                        ?>
                        
                        <div class="field grouped">
                            <div class="control">
                                <button type="submit" class="button button-danger" name="">
                                    Remover denúncia
                                </button>
                            </div>
                        </div>

                        <?php 
                        
                        } else
                        {
                        
                        ?>
                        
                        
                        <div class="field grouped">
                            <div class="control">
                                <button disabled="disabled" type="submit" class="button button-danger" name="">
                                    Remover denúncia
                                </button>
                            </div>
                        </div>
                        
                        <div class="field">
                            <label class="label ">Esta denúncia não poderá ser removida pois já está em análise/encaminhamento.</label>

                              
                        </div>
                        
                        <?php 
                        
                        }
                        
                        ?>


                    </form>    
                </div>
            </section> 

            <!---------------------------------------------------------->
            <?php include 'rodape.php' ?>

        </div>
    </body>
</html>
