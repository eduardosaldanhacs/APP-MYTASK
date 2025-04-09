<?php

require_once("templates/header.php");
require_once("globals.php");
require_once("db.php");
require_once("dao/TarefaDAO.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
$tarefaDao = new TarefaDAO($conn, $BASE_URL);
$listaTarefas = $tarefaDao->recuperarTarefaNaoConcluida();
?>
<div class="container">
    <div class="content">
        <div class="container-opcoes">
            <ul>
                <li><a href="<?= $BASE_URL ?>/list_pending_tasks">Tarefas pendentes</a></li>
                <li><a href="<?= $BASE_URL ?>/new_task">Nova tarefa</a></li>
                <li><a href="<?= $BASE_URL ?>/list_all_tasks">Todas tarefas</a></li>
            </ul>
        </div>
        <?php $pag = isset($_GET['a']) ? $_GET['a'] : '';
        switch ($pag) {
            case 'list_pending_tasks':
                include('templates/list_pending_tasks.php');
                break;
            case 'list_all_tasks':
                include('templates/list_all_tasks.php');
                break;
            case 'new_task':
                include('templates/new_task.php');
                break;
            default:
                include('templates/list_pending_tasks.php');
                break;
        }
        ?>
    </div>
</div>
<?php
require_once("templates/footer.php");
?>