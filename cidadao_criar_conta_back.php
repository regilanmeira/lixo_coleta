<html class="form-screen">
    <head>
        <meta charset="UTF-8">
        <?php include './cabecalho.php' ?>
    </head>
    <body>
        <div id="app">

             <!------ SESSÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
            <section class="is-title-bar">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                    <ul>
                        <li><b>Cadê o lixo que estava  aqui?</b></li>

                        <!-- AQUI COLOCAR O NOME DA PÁGINA QUE VOCÊ ESTÁ DESENVOLVENDO -->
                        <li>Criar conta</li>
                    </ul>

                </div>
            </section>
            <!---------------------------------------------------------->

            <!-- INICIO DA SEÇÃO PRINCIPAL DA PÁGINA -->
            <section class="section main-section">
                <div class="card ">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-lock"></i></span>
                            Nova conta de usuário
                        </p>
                    </header>
                    <div class="card-content">
                        <!-- AQUI COMEÇA O CÓDIGO PARA COLOCAR NO BANCO DE DADOS -->
                        
                        <?php
                        include './cidadao.php';
                        
                        $bairro = $_POST["txtBairro"];
                        $celular = $_POST["txtCelular"];
                        $cidade = $_POST["txtCidade"];
                        $email = $_POST["txtEmail"];
                        $login = $_POST["txtLogin"];
                        $logradouro = $_POST["txtLogradouro"];
                        $nome = $_POST["txtNome"];
                        $senha = $_POST["txtSenha"];
                        $status = "Ativo";
                        
                        $cidadao = new cidadao($nome, $email, $celular, $logradouro, $bairro, $cidade, $login, $senha, $status);
                        
                        if ($cidadao->autoCadastrar() == true)
                        {
                            echo "<h1>Sua conta está adicionada!</h1>";
                        }
                        else
                        {
                            echo "<h1>Não foi possível adicionar este usuário. Este usuário já existe ou verifique os campos informados.</h1>";
                        }
                                
                        ?>
            

            <div class="field grouped">
                <div class="control">
                    <a href="index.php">
                    <button type="submit" class="button green" name="">
                     Voltar
                    </button>
                    </a>
                </div>
            </div>

        </form>
                        
                        
                    </div>
                    <?php include './rodape.php'; ?>
                </div>
            </section>
       </div>

    </body>
</html>
