<?php
    require_once("templates/header.php");
    require_once("globals.php");
    require_once("db.php");
    require_once("dao/TarefaDAO.php");


    $tarefaDao = new TarefaDAO($conn, $BASE_URL);
    $listaTarefas = $tarefaDao->recuperarTarefa();
?>

<body>
    <div class="container-titulo">
        <div>
            <h2>App Lista Tarefas</h2>
        </div>
    </div> 
    <div class="container">      
        <div class="container-opcoes">
            <ul>
                <li><a href="index.php">Tarefas pendentes</a></li>
                <li><a href="adicionar_tarefa.php">Nova tarefa</a></li>
                <li><a href="todas_tarefas.php">Todas tarefas</a></li>
            </ul>
        </div>
        <div class="container-conteudo">
            <div class="container-conteudo-titulo">
                <h2>Tarefas pendentes:</h2>
            </div>
            <?php foreach($listaTarefas as $tarefa) {?>
            <div class="container-buttons">
                <li><?= $tarefa['tarefa'] ?></li>
                <form action="cadastra.php" method="POST">
                    <input type="hidden" name="id" value="<?= $tarefa["id"] ?>">
                    <div>
                        <button type="submit" name="concluido" id="botao-concluir">Concluir</button>
                        <button type="submit" name="excluir" id="botao-excluir">Excluir</button>
                        <a href="editar.php/<?= $tarefa['id'] ?>"><button type="submit" name="editar" id="botao-editar">Editar</button></a>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>

    </div>
</body>
</html>