<?php

$hostname = 'localhost';
$database = 'to_do_list';
$username = 'postgres';
$password = 'root';

try {
    $pdo = new PDO(
        "pgsql:host=$hostname;dbname=$database",
        $username,
        $password
    );
} catch (PDOException $erro) {
    echo "Erro: " . $erro->getMessage();
}
?>