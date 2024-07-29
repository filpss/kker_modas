<?php

global $pdo;

use JetBrains\PhpStorm\NoReturn;

require_once 'connection.php';

/**
 * Este é o arquivo onde faço a maioria das movimentações no banco:
 * Consulta, inclusão, deleção etc.
 * Para fazer qualquer movimentação no banco, precisamos esquever a query ($query), prepara-la ($stmt),
 * vincular seus valores (Para evitar SQL Injection) e só daí executar a query no banco (execute().
 */

function addUserAtDB($pdo, $nome, $email, $password): void
{
    $sql = 'INSERT INTO tb_users (username, email ,password) VALUES (:nome, :email, :password)';
    $stmt = $pdo->prepare($sql);

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':password', $password_hash);
    $stmt->bindParam(':email', $email);

    if($stmt->execute()) {
        echo 'Usuário inserido com sucesso!';
    } else {
        echo 'Erro ao inserir os dados';
    }
}

function getUserById($pdo, $id)
{
    $query = 'select * from tb_users where id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

function getUserByName ($pdo, $nome): void {
    $sql = 'select username from tb_users where username = :nome';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        echo 'Usuário encontrado: ' . $user['username'];
    } else {
        echo 'Nenhum usuário encontrado';
    }
}

function removeUserFromDb($pdo, $id): void
{
    $query = 'delete from tb_users where id = :id';

    if(is_int($id)) {
        $user = getUserById($pdo, $id);
        if($user){
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            echo "Usuário de ID: $id (" . $user['username'] . ') foi removido com sucesso!' . "<br>";
        }
    } else if(is_array($id)) {
        foreach ($id as $unique_id) {
            $user = getUserById($pdo, $unique_id);
            if($user){
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(':id', $unique_id);
                $stmt->execute();
                echo "Usuário de ID: $unique_id (" . $user['username'] . ') foi removido com sucesso!' . "<br>";
            } else {
                echo 'Usuário não encontrado' . "<br>";
            }
        }
    } else {
        echo 'Tipo de dado inválido para exclusão, use INT ou ARRAY(int)';
    }
}

/**
 * Testando os métodos
 */

//getUserByName($pdo, 'filipe');
//getUserById($pdo, 4);
//addUserAtDB($pdo, 'Gabriela', 'gaby@gmail.com', '123456');
//removeUserFromDb($pdo, 48);