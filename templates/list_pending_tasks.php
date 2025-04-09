<div class="container-conteudo">
    <div class="container-conteudo-titulo">
        <h3>Tarefas pendentes:</h3>
    </div>
    <?php foreach ($listaTarefas as $tarefa) { ?>
        <div class="container-buttons">
            <li><?= $tarefa['tarefa'] ?></li>
            <form action="cadastra.php" method="POST">
                <input type="hidden" name="id" value="<?= $tarefa["id"] ?>">
                <div>
                    <button type="submit" name="concluido" id="botao-concluir">Concluir</button>
                    <button type="submit" name="excluir" id="botao-excluir">Excluir</button>
                    <button type="submit" name="editar" id="botao-editar">Editar</button></a>
                </div>
            </form>
        </div>
    <?php } ?>
</div>