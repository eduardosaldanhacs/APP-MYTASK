<?php

$db_name = "bdmytask";
$db_host = "bdmytask.mysql.dbaas.com.br";
$db_user = "bdmytask";
$db_pass = "Bdmytask2023!";



try {
    $conn = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->exec("set names utf8mb4");

    if ($conn) {
        "Conexão bem-sucedida!";
    } else {
        "Erro na conexão.";
    }

    // Continuar com as operações no banco de dados, se necessário

} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>