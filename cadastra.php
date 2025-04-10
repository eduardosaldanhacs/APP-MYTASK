<?php
require_once("globals.php");
require_once("models/Tarefa.php");
require_once("dao/TarefaDAO.php");
require_once("db.php");

$tarefaDao = new TarefaDAO($conn, $BASE_URL);

$type = filter_input(INPUT_POST, "type");

/* Lógica para o index.php */
// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Verifique qual botão foi clicado
    if (isset($_POST['concluido'])) {
        $tarefaDao->concluirTarefa($id);
    } elseif (isset($_POST['excluir'])) {
        $tarefaDao->removerTarefa($id);
    } elseif (isset($_POST['editar'])) {
        $_SESSION['id'] = $id; // Armazena o ID da tarefa na sessão
        header("Location: " . $BASE_URL . "/edit_task");
        exit;
    }
}

/*LÓGICA para o script adicionar_tarefa.php */
if ($type == "adicionar") {
    $tarefa = filter_input(INPUT_POST, "tarefa");
    if ($tarefa <= 0) { //Caso não envie nada no formulário
        header("Location: " . $BASE_URL);
        exit;
    } else {
        $id_status = 1;

        $tarefaObjeto = new Tarefa();

        $tarefaObjeto->tarefa = $tarefa;
        $tarefaObjeto->id_status = $id_status;

        $tarefaDao->criar($tarefaObjeto);
        header("Location: " . $BASE_URL . "/list_pending_tasks");
        exit;
    }
    /* Lógica para o script editar.php */
} else if ($type == "editar") {
    $tarefaAtualizada = filter_input(INPUT_POST, "tarefa");
    $statusAtualizado = filter_input(INPUT_POST, "status");

    $id = $_SESSION["id"]; //Recuperar id do session para encontrar na query
    $tarefaDao->atualizar($tarefaAtualizada, $statusAtualizado, $id);
    header("Location: " . $BASE_URL . "edit_tasks&id=$id");
    exit;
}  else {
    header("Location: " . $BASE_URL);
    exit;
}
