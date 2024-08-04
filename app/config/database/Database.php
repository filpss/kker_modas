<?php

namespace ISM\KkerSystem\Database;

use PDO;
use PDOException;

class Database
{
    function query($query, $params=[]): array
    {
        try {
            $pdo = new PDO(
                'pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASSWORD,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
            $stmt = $pdo->prepare($query);
            $stmt->execute($params);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return [
                'status' => 'success',
                'data' => $result
            ];
        } catch (PDOException $err){
            return [
                'status' => 'error',
                'data' => $err->getMessage()
            ];
        }
    }
}