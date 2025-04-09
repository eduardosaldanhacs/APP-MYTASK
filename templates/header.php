<?php

require_once("globals.php");
require_once("db.php");
require_once("dao/TarefaDAO.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>MYTASK</title>
</head>

<body>
    <header class="cabecalho">
        <div class="cabecalho-content">
            <div class="cabecalho-title">
                <a href="/mytask">
                    <h1>Mytask App</h1>
                </a>
            </div>
            <nav class="cabecalho-nav">
                <ul class="cabecalho-nav-lista">
                    <li class="cabecalho-nav-lista-item"><a href="index.php">Inicio</a></li>
                    <li class="cabecalho-nav-lista-item"><a href="https://eduardosaldanha.com.br" target="_blank">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>