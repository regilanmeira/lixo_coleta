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
                    <li>Meus dados</li>
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
                    Meus dados
                </p>


            </header>


            <?php
            include './cidadao.php';

            $login = $_SESSION["login"];

            $cidadao = new cidadao();
            $cidadao->setLogin($login);

            $cidadao->exibirMeusDados();


            ?>

            <!---------  AQUI COMEÇA UM CAMPO DO FORMULÁRIO ------------->
            <form enctype="multipart/form-data" action="cidadao_mostrar_dados_atualizar.php" method="POST">


                <div class="field">
                    <label class="label">Nome completo</label>

                    <input type="text" class="input" placeholder="Digite seu nome e sobrenome" required="" autocomplete="name" name="txtNome" value="<?php echo $cidadao->getNome(); ?>">
                </div>

                <div class="field">
                    <label class="label">E-mail</label>

                    <div class="control">
                        <input type="email" class="input" placeholder="Digite seu e-mail" required="" name="txtEmail" value="<?php echo $cidadao->getEmail(); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Telefone</label>

                    <div class="control">
                        <input type="tel" class="input" placeholder="Exemplo (73 99999-9999)" required="" name="txtCelular" value="<?php echo $cidadao->getCelular(); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Logradouro</label>

                    <div class="control">
                        <input type="text" class="input" placeholder="Digite o seu endereço" required="" name="txtLogradouro" value="<?php echo $cidadao->getLogradouro(); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Bairro</label>

                    <div class="control">
                        <input type="text" class="input" placeholder="Digite o nome do seu bairro" required="" name="txtBairro" value="<?php echo $cidadao->getBairro(); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Cidade</label>

                    <div class="control">
                        <input type="text" class="input" placeholder="Nome de sua cidade" required="" name="txtCidade" value="<?php echo $cidadao->getCidade(); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Login</label>

                    <div class="control">
                        <input type="text" disabled="disabled" class="input" placeholder="Seu login de acesso" required="" name="txtLogin" value="<?php echo $cidadao->getLogin(); ?>">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Senha</label>

                    <div class="control">
                        <input type="password" class="input" placeholder="Sua senha de acesso" required="" name="txtSenha" value="<?php echo $cidadao->getSenha(); ?>">
                    </div>
                </div>


                <div class="field grouped">
                    <div class="control">
                        <button type="submit" class="button button-confirm" name="">
                            Atualizar
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