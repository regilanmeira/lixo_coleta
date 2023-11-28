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
                        <!-- AQUI COMEÇA O FORMULÁRIO -->
                        <form name="" action="cidadao_criar_conta_back.php" method="post">   
            <div class="field">
                <label class="label">Nome completo</label>

                <input type="text" class="input" placeholder="Digite seu nome e sobrenome" required="" autocomplete="name" name="txtNome">
            </div>

            <div class="field">
                <label class="label">E-mail</label>

                <div class="control">
                    <input type="email" class="input" placeholder="Digite seu e-mail" required="" name="txtEmail"> 
                </div>
            </div>
       
            <div class="field">
                <label class="label">Telefone</label>

                <div class="control">
                    <input type="tel" class="input" placeholder="Exemplo (73 99999-9999)" required="" name="txtCelular">
                </div>
            </div>

            <div class="field">
                <label class="label">Logradouro</label>

                <div class="control">
                    <input type="text" class="input" placeholder="Digite o seu endereço" required="" name="txtLogradouro">
                </div>
            </div>

            <div class="field">
                <label class="label">Bairro</label>

                <div class="control">
                    <input type="text" class="input" placeholder="Digite o nome do seu bairro" required="" name="txtBairro">
                </div>
            </div>

            <div class="field">
                <label class="label">Cidade</label>

                <div class="control">
                <input type="text" class="input" placeholder="Nome de sua cidade" required="" name="txtCidade">
                </div>
            </div>
                            
                            <div class="field">
                <label class="label">Login</label>

                <div class="control">
                <input type="text" class="input" placeholder="Seu login de acesso" required="" name="txtLogin">
                </div>
            </div>

             <div class="field">
                <label class="label">Senha</label>

                <div class="control">
                    <input type="password" class="input" placeholder="Sua senha de acesso" required="" name="txtSenha">
                </div>
            </div>
            

            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button green" name="">
                    Enviar
                    </button>
                </div>
            </div>

            <div class="field grouped">
                        <div class="control">
                            <a href="index.php">
                                <button type="button" class="button" name="">
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
