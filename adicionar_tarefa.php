<?php
    require_once("templates/header.php");
?>

    <div class="container-nova-tarefa">
        <form action="cadastra.php" method="POST">
            <input type="hidden" name="type" value="adicionar">
            <div class="container-nova-tarefa-preencher">
                <label for="">Adicione uma tarefa:</label>
                <input type="text" placeholder="Preencher" name="tarefa">
            </div>
            <div class="container-botao-nova-tarefa">
                <input type="submit" value="Adicionar" id="botao-nota-tarefa">
            </div>
        </form>
    </div>
    <?php
    require_once("templates/footer.php");
    ?>