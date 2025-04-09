<?php

$tarefaDao = new TarefaDAO($conn, $BASE_URL);
$listaTarefas = $tarefaDao->recuperarTodasTarefa();

?>


    <div class="container-todas-tarefas">
        <h3 id="container-todas-tarefas-titulo">Todas as tarefas</h3>

        <?php
        if ($listaTarefas != NULL) {
            foreach ($listaTarefas as $tarefa) { ?>
                <div>
                    <li>
                        <p id="tarefa-item"><?= $tarefa['tarefa'] ?></p>
                        <?php if ($tarefa['id_status'] == 1): ?>
                            <span id="tarefa-pendente">(pendente)</span>
                        <?php elseif ($tarefa["id_status"] == 2): ?>
                            <span id="tarefa-concluida">(concluido)</span>
                        <?php endif; ?>
                    </li>
                </div>
        <?php }
        } else { ?>
            <p id="tarefa-vazia">Nenhuma tarefa cadastrada</p>    
        <?php }
        ?>
    </div>

