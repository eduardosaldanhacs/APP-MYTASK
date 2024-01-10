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
    <title>Aplicativo Lista Tarefas</title>
</head>
<body>
    <header class="cabecalho">
        <div class="cabecalho-content">
            <div class="cabecalho-title">
                <h1>Mytask App</h1>
            </div>
            <nav class="cabecalho-nav">
                <ul class="cabecalho-nav-lista">
                    <li class="cabecalho-nav-lista-item"><a href="index.php">Inicio</a></li>
                    <li class="cabecalho-nav-lista-item"><a href="https://eduardosaldanha.com.br" target="_blank">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
