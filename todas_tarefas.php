<?php

    require_once("templates/header.php");
    require_once("templates/footer.php");

    $tarefaDao = new TarefaDAO($conn, $BASE_URL);
    $listaTarefas = $tarefaDao->recuperarTodasTarefa();

?>
<div id="body-todas-tarefas">

    <div class="container-todas-tarefas">
        <h3 id="container-todas-tarefas-titulo">Todas as tarefas</h3>
        <? foreach($listaTarefas as $tarefa): ?>
            <div>
                <li>
                    <p id="tarefa-item"><?= $tarefa['tarefa'] ?></p>
                    <?php if($tarefa['id_status'] == 1): ?>
                        <span id="tarefa-pendente">(pendente)</span>
                    <?php elseif($tarefa["id_status"] == 2): ?>
                        <span id="tarefa-concluida">(concluído)</span>
                    <?php endif; ?>
                </li>
            </div>
        <?php endforeach; ?>
    </div>
</div>