<?php

require '../vendor/autoload.php';

session_start();
$expiration_time = 1800;
if (isset($_SESSION['user'])) {
    if (!isset($_SESSION['expiration_time'])) {
        $_SESSION['expiration_time'] = time() + $expiration_time;
    } elseif (time() > $_SESSION['expiration_time']) {
        session_unset();
        session_destroy();
        echo json_encode(['session_expired' => true]);
        exit;
    }
    $session_up = true;
} else {
    $session_up = false;
}

$allowed_routes = require_once __DIR__ . '/../app/config/router/router.php';

$route = $_GET['route'] ?? 'home';

if(!isset($_SESSION['user']) && $route !== 'login_submit'){
    $route = 'login';
}

if(isset($_SESSION['user']) && $route === 'login'){
    $route = 'home';
}

if(!in_array($route, $allowed_routes)){
    $route = '404';
}

$page = null;
switch($route){
    case '404':
        $page = '404.php';
        break;
    case 'home':
        $page = 'home.php';
        break;
    case 'login':
        $page = 'login_page.php';
        break;
    case 'login_submit':
        $page = '../../helpers/login_submit.php';
        break;
    case 'loggout':
        $page = '../../helpers/loggout.php';
        break;
}

require_once __DIR__ . '/../app/config/database/configs.php';
require_once __DIR__ . '/../app/config/database/Database.php';

require_once __DIR__ . '/../app/views/templates/head.php';
require_once __DIR__ . "/../app/views/pages/$page";
?>

<script>
    $(document).ready(function(){
        let session_up = <?php echo json_encode($session_up); ?>;
        if(session_up) {
            setInterval(function () {
                $.ajax({
                    url: window.location.href,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.session_expired) {
                            window.location.href = "?route=login";
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Erro:', error);
                    }
                });
            }, 30 * 60 * 1000)
        }
    });
</script>