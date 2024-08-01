<?php
/**
 * Neste arquivo está a conexão com o banco de dados postgreSQL.
 * A primeira coisa que fiz foi acessar o meu php.ini e adicionar as linhas:
 * extension=pgsql e extension=pdo_pgsql
 * E então precisei criar 3 constantes obrigatórias: HOST, PORT e DB_NAME,
 * instanciei um PDO e está feita a conexão com o PostgreSQL.
 */

const HOST = 'localhost';
const PORT = 5432;
const DB_NAME = 'db_kker';
const USER = 'postgres';
const PASSWORD = '123456';

try {
    $dsn = 'pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DB_NAME;
    $pdo = new PDO($dsn, USER, PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo 'Conectado ao banco de dados com sucesso!' . "<br>";
} catch (PDOException $err) {
    die('Erro ao se conectar com o banco de dados: ' . $err->getMessage() . "<br>");
}
