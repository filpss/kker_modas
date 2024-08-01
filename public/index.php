<?php

session_start();
//$_SESSION['user'] = 'filipe';
//session_destroy();

$allowed_routes = require_once __DIR__ . '/../config/router/router.php';

$route = $_GET['route'] ?? 'home';

if(!isset($_SESSION['user'])){
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
}

require_once __DIR__ . '/../views/head.php';
require_once __DIR__ . "/../views/pages/$page";
require_once __DIR__ . '/../views/footer.php';