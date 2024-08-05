<?php

require '../vendor/autoload.php';
use ISM\KkerSystem\Database\database;

if($_SERVER['REQUEST_METHOD'] !== "POST"){
    header('Location: ../public/index.php?route=login');
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) || empty($password)){
    header('Location: ../public/index.php?route=login');
}

$database = new database();
$sql = 'select * from tb_users where username = :username';
$params = [
    ':username' => strtolower($username)
];
$result = $database->query($sql, $params);

if($result['status'] === 'error'){
    header('Location: ../public/index.php?route=404');
    exit;
}

if(count($result['data']) === 0){
    $_SESSION['error'] = 'Usuário ou senha inválidos!';
    header('Location: ../public/index.php?route=login');
    exit;
}

if(!password_verify($password, $result['data'][0]->password)){
    $_SESSION['error'] = 'Usuário ou senha inválidos!';
    header('Location: ../public/index.php?route=login');
    exit;
}

$_SESSION['user'] = $result['data'][0]->username;
header('Location: ../public/index.php?route=home');