<?php
    require_once("index.php");
    require_once("models/Tarefa.php");
    require_once("dao/TarefaDAO.php");
    require_once("db.php");

    //print_r($_POST);

    $tarefaDao = new TarefaDAO($conn, $BASE_URL);

    $type = filter_input(INPUT_POST, "type");

    if($type == "adicionar") {


        $tarefa = filter_input(INPUT_POST, "tarefa");
        if($tarefa <= 0) {
            header("Location: " . $BASE_URL . "index.php");
        } else {
            $id_status = 0;

            $tarefaObjeto = new Tarefa();

            $tarefaObjeto->tarefa = $tarefa;
            $tarefaObjeto->id_status = $id_status;
            
            $tarefaDao->criar($tarefaObjeto);
            echo "finalizado!";
            header("Location: " . $BASE_URL . "adicionar_tarefa.php");
        }
            
    } else if ($type == "adicionar") {
        $tarefa = filter_input(INPUT_POST, "tarefas_pendentes.php");


    } // Verifique se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
    
        // Verifique qual botão foi clicado
        if (isset($_POST['concluido'])) {
            $tarefaDao->concluirTarefa($id);
        } elseif (isset($_POST['excluir'])) {
            $tarefaDao->removerTarefa($id);
        } elseif (isset($_POST['editar'])) {
            header("Location: " . $BASE_URL . "editar.php?id=" . $id);
            // Criar um script editar.php utilizando o get recuperado do id
            // 
        }
    
        // Redirecione para a página inicial ou faça qualquer outra ação necessária
        
        
    }
?>