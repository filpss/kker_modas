<?php
include_once __DIR__ . '/../templates/header.php';
?>

<link rel="stylesheet" href="/kker_modas/app/assets/css/404.css">
<title>Oops! - 404</title>
<section class="main display-flex-center">
    <div class="title">
        <h1>Oops!</h1>
    </div>
    <div class="p">
        <p class="text-error-404">Erro 404, página solicitada não encontrada.</p>
    </div>
    <div class="button">
        <button onclick="location.href='?route=home'" >Página inicial</button>
    </div>
</section>

<?php
include_once __DIR__ . '/../templates/footer.php';
?>