<html class="form-screen">
    <head>
        <meta charset="UTF-8">
        <?php include 'cabecalho.php' ?>
    </head>
    <body>
        <div id="app">
             <!------ SEÇÃO QUE MOSTRA A PÁGINA ONDE O USUÁRIO ESTÁ ------>
            <section class="is-title-bar">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                    <ul>
                        <li><b>Cadê o lixo que estava aqui?</b></li>

                         <li><b>Módulo Admin</b></li>
                        <!-- AQUI COLOCAR O NOME DA PÁGINA QUE VOCÊ ESTÁ DESENVOLVENDO -->
                        <li>Acessar</li>
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
                            Informe os campos a seguir para acessar o sistema
                        </p>
                    </header>
                    <div class="card-content">
                        <!-- AQUI COMEÇA O FORMULÁRIO -->
                        <form method="POST" action="" name="">

                            <div class="field spaced">
                                <label class="label">Login</label>
                                <div class="control icons-left">
                                    <input class="input" type="text" name="login" placeholder="Seu login de acesso" autocomplete="username">
                                    <span class="icon is-small left"><i class="mdi mdi-account"></i></span>
                                </div>
                                <p class="help">
                                    Digite seu login de acesso.
                                </p>
                            </div>

                            <div class="field spaced">
                                <label class="label">Senha</label>
                                <p class="control icons-left">
                                    <input class="input" type="password" name="txtSenha" placeholder="Senha de acesso" autocomplete="current-password">
                                    <span class="icon is-small left"><i class="mdi mdi-asterisk"></i></span>
                                </p>
                                <p class="help">
                                    Digite sua senha de acesso ao sistema
                                </p>
                            </div>

                            <div class="field grouped">
                                <div class="control">
                                    <button type="submit" class="button blue">
                                        Entrar
                                    </button>
                                </div>
                            </div>

                       
                        </form>
                    </div>
                    <?php include 'rodape.php'; ?>
                </div>
            </section>
       </div>

    </body>
</html>
