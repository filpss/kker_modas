<?php
include_once __DIR__ . '/../views/head.php';
?>

<link rel="stylesheet" type="text/css" href="/kker_modas/app/assets/css/home_header.css" media="screen" />
<link rel="icon" type="image/x-icon" href="/kker_modas/app/assets/img/mini-logo-kker.svg">
<header>
    <section class="display-flex-center">
        <div class="logo">
            <img class="logo-header" src="/kker_modas/app/assets/img/logo_kker.svg" alt="Logo da empresa KKER">
        </div>
        <div class="user">
            <?php if($_SESSION['user']):?>
            <p>
                <?= 'Olá, ' . '<span style="color: #f49910; font-weight: bold">'. ucwords($_SESSION['user']) .'</span>' ?>
            </p>
            <?php endif; ?>
                <img class="img-user" src="/kker_modas/app/assets/img/icone_usuario.svg" alt="ícone de um bonequinho representando o usuário">
            <a class="loggout" href="?route=loggout">Sair</a>
        </div>
    </section>
</header>