<?php
include_once __DIR__ . '/../head.php';

$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>

<link rel="stylesheet" href="../app/assets/css/login_page.css">
<section class="form-section">
    <div class="form">
        <div class="logo-txt">
            <img class="img-login-page" src="../app/assets/img/mini-logo-kker.svg" alt="Logomarca da empresa KKER">
            <p>KK&R</p>
        </div>

        <h2>Faça Login</h2>
        <form method="post" action="?route=login_submit">
            <label for="login">Login</label>
            <input placeholder="Digite seu usuário" name="username" type="text" id="login"/>
            <label for="password">Senha</label>
            <input placeholder="******" type="password" name="password" id="password"/>
            <div class="btn">
                <button>Enviar</button>
            </div>
            <?php if(!empty($error)): ?>
            <div>
                <p style="color: red; margin-top:30px;">
                    <?= $error ?>
                </p>
            </div>
            <?php endif;?>
            <p class="forgot-password">Esqueceu a senha? <a>Clique aqui!</a></p>
        </form>
    </div>

    <div class="div-img">
        <img src="../app/assets/img/logo_kker.svg" alt="Foto grande com a logo">
    </div>
</section>