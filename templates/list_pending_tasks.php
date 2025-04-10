<div class="container-conteudo">
    <div class="container-conteudo-titulo">
        <h3>Tarefas pendentes:</h3>
    </div>
    <?php foreach ($listaTarefas as $tarefa) { ?>
        <div class="container-buttons">
            <div>
                <li><?= strtoupper($tarefa['tarefa']) ?></li>
            </div>
            <div>
                <form action="cadastra.php" method="POST">
                    <input type="hidden" name="id" value="<?= $tarefa["id"] ?>">
                        <button type="submit" name="concluido" id="botao-concluir" class="finish-button">
                            <i class="fa-solid fa-check"></i>
                        </button>
                        <button type="submit" name="editar" id="botao-editar" class="edit-button">
                            <i class="fa-solid fa-pencil bg-black"></i>
                        </button>
                        <button type="submit" name="excluir" id="botao-excluir" class="detele-button">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                </form>
            </div>
        </div>
    <?php } ?>
</div>