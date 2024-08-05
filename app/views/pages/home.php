<?php
include_once __DIR__ . '/../templates/head.php';
include_once __DIR__ . '/../templates/header.php';
?>
<html lang="pt-br">
<link rel="stylesheet" href="/kker_modas/app/assets/css/home.css?v=1.0">
<title>Página inicial</title>
<body>
    <section>
        <main class="main_div">
            <div class="kkersystem">
                <img class="img_kkersystem" src="/kker_modas/app/assets/img/kkersystem.svg" alt="Imagem com o texto 'KKeR System'">
                <h3>Cadastre novos produtos, clientes, ou visualize relatórios de faturamento!</h3>
            </div>
            <div class="buttons_div">
                <a href="?route=404">
                    <div class="card">
                        <div class="icon_div">
                            <img class="img_cadastro" src="/kker_modas/app/assets/img/icone_cadastrar_home_page2.svg" alt="Ícone de cadastro de produtos e clientes">
                        </div>
                        <div class="text">
                            <h2>Cadastrar</h2>
                            <p>Produtos e Clientes</p>
                        </div>
                    </div>
                </a>
                <div class="card">
                    <div class="icon_div">
                        <img class="img_estoque" src="/kker_modas/app/assets/img/icon-estoque.svg" alt="Ícone de cadastro de produtos e clientes">
                    </div>
                    <div class="text">
                        <h2>Estoque</h2>
                        <p>Visualizar estoque</p>
                    </div>
                </div>
                <div class="card">
                    <div class="icon_div">
                        <img class="img_relatorio" src="/kker_modas/app/assets/img/icon-relatorio.svg" alt="Ícone de cadastro de produtos e clientes">
                    </div>
                    <div class="text">
                        <h2>Relatório</h2>
                        <p>Visualizar relatórios</p>
                    </div>
                </div>
                <div class="card soon">
                    <div class="icon_div">
                        <img class="img_breve" src="/kker_modas/app/assets/img/icon-breve.svg" alt="Ícone de cadastro de produtos e clientes">
                    </div>
                    <div class="text">
                        <h2>Em breve</h2>
                        <p>Novas features logo</p>
                    </div>
                </div>
                <div class="card soon">
                    <div class="icon_div">
                        <img class="img_breve" src="/kker_modas/app/assets/img/icon-breve.svg" alt="Ícone de cadastro de produtos e clientes">
                    </div>
                    <div class="text">
                        <h2>Em breve</h2>
                        <p>Novas features logo</p>
                    </div>
                </div>
                <div class="card soon">
                    <div class="icon_div">
                        <img class="img_breve" src="/kker_modas/app/assets/img/icon-breve.svg" alt="Ícone de cadastro de produtos e clientes">
                    </div>
                    <div class="text">
                        <h2>Em breve</h2>
                        <p>Novas features logo</p>
                    </div>
                </div>
            </div>
            <?php
            include_once __DIR__ . '/../templates/footer.php';
            ?>
        </main>
    </section>
</body>
</html>