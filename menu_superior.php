<!------------------------  MENU DA PARTE SUPERIOR ------------------>
<script>
window.addEventListener("load", () => {
    const menu_lateral = document.querySelector("aside#menu-lateral");
    const btn_hamburguer = document.querySelector("#btn-hamburguer");

    window.addEventListener("click", (ev) => {
        if (!menu_lateral.contains(ev.target) && ev.target !== btn_hamburguer && !btn_hamburguer.contains(ev.target)) {
            menu_lateral.setAttribute("data-hamburguer", "off");
        }
    });

    btn_hamburguer.addEventListener("click", () => {
        let anterior = menu_lateral.getAttribute("data-hamburguer");
        let novo_valor = "on";
        if (anterior === "on") {
            novo_valor = "off";
        }

        menu_lateral.setAttribute("data-hamburguer", novo_valor);
    });
});
</script>

<nav id="navbar-main" class="navbar is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button" id="btn-hamburguer">
            <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>

        <div class="navbar-item">
            <div class="text-gray-500"><b>Cadê o lixo que estava aqui?</b></div>
        </div>

    </div>
    <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
            <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>


    </div>
    <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">

            <div class="navbar-item dropdown has-divider has-user-avatar">
                <a class="navbar-link">

                    <!-- AQUI MOSTRAR O USUÁRIO QUE ESTÁ LOGADO -->
                    <div class="is-user-name"><span><?php echo $_SESSION["login_cidadao"]?></span></div>
                    <!------------------------------------------->
                </a>

            </div>

            <a href="index.php" title="Sair" class="navbar-item desktop-icon-only">
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span>Sair</span>
            </a>
        </div>
    </div>
</nav>

<!--------------------- FIM DO MENU DA PARTE SUPERIOR ----------->
