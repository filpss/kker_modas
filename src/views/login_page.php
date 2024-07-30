<?php
    include_once 'head.php';
?>

<link rel="stylesheet" href="../../public/assets/css/login_page.css">

<section class="form-section">
    <div class="form">
        <div class="logo-txt">
            <img src="../../public/assets/img/mini-logo-kker.svg" alt="Logomarca da empresa KKER">
            <p>KK&R</p>
        </div>

        <h2>Faça Login</h2>
        <form method="post" action="../login.php">
            <label for="username">Login</label>
            <input placeholder="Digite seu usuário" name="username" type="text" id="username"/>
            <label for="password">Senha</label>
            <input placeholder="******" name="password" type="password" id="password"/>
            <div class="btn">
                <input class="send_button" type="submit" value="Enviar">
            </div>
            <p class="forgot-password">Esqueceu a senha? <a>Clique aqui!</a></p>
        </form>
    </div>

    <div class="div-img">
        <img src="../../public/assets/img/logo_kker.svg" alt="Foto grande com a logo">
    </div>
</section>