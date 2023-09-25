<!DOCTYPE html>


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
                        <li><b>Cadê o lixo que estava aqui</b></li>
                        <!-- AQUI COLOCAR O NOME DA PÁGINA QUE VOCÊ ESTÁ DESENVOLVENDO -->
                        <li>Postar relatório</li>
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
                            Relatórios Científicos
                        </p>
                    </header>

                    <!-- AQUI ONDE FICARÁ OS ELEMENTOS DE FORMULÁRIO
                   ADICIONAR O ACTION PARA ONDE A PÁGINA IRÁ SER SUBMETIDA
                    -->
                    <form name="" action="" method="POST">
                        <!-------- INÍCIO CAMPOS DO FORMULÁRIO -------->
                        <div class="field">
                            <label class="label">Data do relatório</label>

                            <div class="control">
                                <input name="txtDataRelatorio" class="input" type="date">
                            </div>
                            <p class="help">
                                Informe a data da postagem. Campo obrigatório.
                            </p>
                        </div>
                        
                        <div class="field">
                            <label class="label">Arquivo</label>
                            <div class="field-body">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button blue">
                                            Enviar arquivo
                                        </a>
                                        <input name="txtNomeArquivo" type="file">
                                    </label>
                                </div>
                            </div>
                            <p class="help">
                                Selecione o arquivo em PDF no seu dispositivo com o relatório. Campo obrigatório.
                            </p>
                        </div>
                        
                        <div class="field">
                            <label class="label">Código da proposta</label>

                            <div class="control">
                                <input name="txtCodigoProposta" class="input" type="number" placeholder="0123456789">
                            </div>
                            <p class="help">
                                Insira o código da proposta a que se refere este relatório. Campo obrigatório.
                            </p>
                        </div>
                        <!-------- FIM CAMPOS DO FORMULÁRIO -------->
                       
                        <!----------------- INÍCIO BOTÕES  -------------->
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
                        <!----------------- FIM BOTÕES  -------------->
                    </form>
                </div>
            </section>


            <!---------------------------------------------------------->

            <?php include 'rodape.php' ?>

        </div>

    </body>
</html>
